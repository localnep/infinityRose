 <?php 
    error_reporting(0); // error ları yok say -> bi yerde gereksiz bir hata ile karşılaşmamak için kullanılır
    include "baglanti.php"; 
    $kadi=$_POST["kadi"]; // giris yap html mdeki giriş bilgilerimi bu iki asamalı d.s html sayfama _post sayesinde aldım
    $sifre=$_POST["sifre"]; // iki bilgiyi değişkene atıyorum
    $min = 1000; 
    $max = 9999;        
    $sifre2 = mt_rand($min, $max); //random sayıyı 1000 ile 9999 arasında 4 haneli bir sayı ürettim
    $query = $db->query("SELECT * FROM musteri WHERE email = '{$kadi}' and sifre='{$sifre}'")->fetch(PDO::FETCH_ASSOC);
    // email ile kullanıcı adım eşleşecek ve şifrem ile şifre doğru eşleşirse o müşteririn bilgilerini getircek
    // select i kullanmak için kullanılan hazır yapı fetch ,,-- db = database
    if ( $query ){
        $id = $query["id"]; //gelen müşteririn id bilgisini id değişkenine atadım
        require("mail/class.phpmailer.php"); //require ile bu kütüphaneyi include ettim etmeseydim kod blokları çalışmazdı
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPDebug = 1; // Hata ayıklama değişkeni: 1 = hata ve mesaj gösterir, 2 = sadece mesaj gösterir
            $mail->SMTPAuth = true; //SMTP doğrulama olmalı ve bu değer değişmemeli
            $mail->SMTPSecure = 'ssl'; // Normal bağlantı için tls , güvenli bağlantı için ssl yazın --> ssl sertifakasını sahibi,siteden aldığım sertifika
            $mail->Host = "smtp.gmail.com"; // Mail sunucusunun adresi (IP de olabilir)
            $mail->Port = 465; // Normal bağlantı için 587, güvenli bağlantı için 465 yazın
            $mail->IsHTML(true);
            $mail->SetLanguage("tr", "phpmailer/language");
            $mail->CharSet  ="utf-8";
            $mail->Username = "vurucuorhan17@gmail.com"; // Gönderici adresinizin sunucudaki kullanıcı adı (e-posta adresiniz) telefona gelen mail adresi orhanvurucu tarafından gönderilecek
            $mail->Password = "gjotjmnhxbpdmylj"; // Mail adresimizin sifresi --> orhan vurucu adına otomatik mail atılıyor
            $mail->SetFrom("vurucuorhan17@gmail.com", "İnfinity"); // Mail atıldığında gorulecek isim ve email (genelde yukarıdaki username kullanılır) sadece infinity gözükecek
            $mail->AddAddress($query["email"]); // Mailin gönderileceği alıcı adres
            $mail->Subject = "kod"; // Email konu başlığı
            $mail->Body = $sifre2; // Mailin içeriği
            // mail göndermek için hazır aldığım kod
            if(!$mail->Send()){
                echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
            } else {

                
            }       
    }   
    else header("location:giris-yap.php"); // giremediği takdirde giriş yapa yönlendiriyor
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

    <script type="text/javascript">
        $(function() {

            var saniye = 240;
            var sayacYeri = $("div.sayac span");

            $.sayimiBaslat = function() {
                if (saniye > 1) {
                    saniye--;
                    sayacYeri.text(saniye);
                } else {
                    window.location.href="giris-yap.html";
                }
            }

            sayacYeri.text(saniye);
            setInterval("$.sayimiBaslat()", 1000);

        });

    </script>

    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Open Sans Condensed', sans-serif;
            background: rgba(0, 0, 0, 0.9);
            color: black;

        }


        .pencere {
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: #f7fee6;
            box-shadow: 0 15px 25px rgba(243, 243, 243, 0.3);
            border-radius: 10px;
        }

        .baslik {
            padding: 0;
            text-align: left;
            margin: 0 0 40px;

        }

        .baslik:hover {
            animation: animasyon 4s infinite;
        }

        @keyframes animasyon {
            0% {
                color: black;
            }

            25% {
                color: crimson;
            }

            50% {
                color: black;
            }
        }



        .input {
            width: 100%;
            padding: 7px 3px;
            font-size: 14px;
            margin-bottom: 40px;
            border-bottom: 1px solid #fff;
            transition: padding 750ms;
            transition-timing-function: ease-out;

        }

        .input:focus {
            padding: 7px 7px;
            border: 1.3px solid crimson;
            background: #f1f1f1;
        }

        .input:hover {
            background: #f2f2f2;
        }

        #gonder-butonu {
            background: white;
            border-radius: 8px;
            width: 75px;

        }


        #gonder-butonu:hover {
            background: #f1f1f1;
        }

       

        #yeni-hesap-olustur {
            text-decoration: none;
            color: white;
            border: 1px solid crimson;
            background: crimson;
            border-radius: 10px;
            position: absolute;
            bottom: 30px;
            right: 20px;
            padding: 3px;


        }


        div.sayac {
            background-color: #dddddd;
            padding: 1px 1px;
            border-bottom: 3px solid #ccc;
        }

        div.sayac span {
            font-weight: bold;
        }

    </style>

</head>

<body>


    <div class="pencere">
        <div class="baslik">
            <h2>İki Aşamalı Doğrulama</h2>
        </div>
        <form method="post" action="girisyap.php">
            <div class="input-alani">

                <input type="text" class="input" name="girilen" placeholder="güvenli giriş için telefonunuza gelen kodu girin." required>
                <input type="hidden" name="kod" value="<?php echo $sifre2; ?>">
                <input type="hidden" name="id" value="<?php echo $id; ?>">


            </div>

           
            <input type="submit" value="Gönder" class="input" id="gonder-butonu" onclick="location.href='index.html'">


        </form>
        <div class="sayac"><span></span> saniye sonra işlem sonlanacaktır.</div>



    </div>

</body>

</html>
