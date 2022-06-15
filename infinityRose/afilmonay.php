<?php error_reporting(0);
    include 'baglanti.php';
    if(empty($_GET["id"]))
        header("location:index.php");

    $sorgu = $db->exec("update kiralananlar set onay=1 where id=".$_GET["id"]);
    if ($sorgu) {
    	echo "film kiralama başvurusu onaylandı";
        $id = $_GET['id']; 
        $query = $db->query("SELECT kiralananlar.indirmeno,musteri.email FROM kiralananlar,musteri where musteri.id = kiralananlar.musteri_id and kiralananlar.id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
        if ( $query ){
            require("mail/class.phpmailer.php");
         

            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
            $mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
            $mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın
            $mail->Host = "smtp.gmail.com"; // Mail sunucusunun adresi (IP de olabilir)
            $mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
            $mail->IsHTML(true);
            $mail->SetLanguage("tr", "phpmailer/language");
            $mail->CharSet  ="utf-8";
            $mail->Username = "vurucuorhan17@gmail.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz)
            $mail->Password = "gjotjmnhxbpdmylj"; // Mail adresimizin sifresi
            $mail->SetFrom("vurucuorhan17@gmail.com", "İnfinity"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır)
            $mail->AddAddress($query["email"]); // Mailin gönderileceği alıcı adres
            $mail->Subject = "Film aktivasyon"; // Email konu başlığı
            $mail->Body = "film aktivasyon kodu : ".$query["indirmeno"]; // Mailin içeriği
            if(!$mail->Send()){
                echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
            } else {

                echo "<br>mail gönderildi.";
            }       

        }
        
    }
    else
    	echo "hata oluştu";

    header("Refresh: 2; url=bildirimleradmin.php");
 ?>