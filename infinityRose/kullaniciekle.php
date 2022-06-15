<?php include "baglanti.php"; 
	$sayi = mt_rand(100000,999999);
	$sayi2 = mt_rand(100000,999999);

	

if ($_FILES["dosya"]) {

  $yol = "./foto/";

  $yuklemeYeri =  $yol  . "n" .$sayi . "n" .$sayi2."n". $_FILES["dosya"]["name"];
 
  if ( file_exists($yuklemeYeri) ) {

      echo "Dosya daha önceden yüklenmiş";

  } else {

      if ($_FILES["dosya"]["size"]  > 10000000) {

          echo "Dosya boyutu sınırı";

      } else {

          $dosyaUzantisi = pathinfo($_FILES["dosya"]["name"], PATHINFO_EXTENSION);

          if ($dosyaUzantisi != "JPG" && $dosyaUzantisi != "jpg" && $dosyaUzantisi != "png") { # Dosya uzantı kontrolü

              echo "Sadece jpg ve png uzantılı dosyalar yüklenebilir.";

          } else {

              
              $konum = $yuklemeYeri;
              $url = $_FILES["dosya"]["tmp_name"];
            touch($konum);//belirlediğimiz yerde dosyayı oluştur.
            $al=file_get_contents($url);//belirlediğimiz resimin kaynağını al
            $kaydet=file_put_contents($konum,$al);//oluşturduğumuz dosyanın içine yaz
            if($kaydet){//eğer yazma başarılı ise
              
              $sorgu = $db->exec("insert into musteri (id,isim,telefon,email,sifre,adres,resim) values (".$_POST["kid"].",'".$_POST["isim"]."','".$_POST["tel"]."','".$_POST["mail"]."','".$_POST["sifre"]."','".$_POST["adres"]."','".$yuklemeYeri."')");
				if($sorgu)
					echo "Kullanici eklendi.";
				else
					echo "Hata oluştu.";

				header("Refresh: 2; url=yonetici.php");			


            }else{
              echo "Kayıt edilemedi";//deil ise
              unlink($konum);//dosyayı sil
                header("Refresh: 2; url=yonetici.php");
            }

          }

      }

  }

} else {

  echo "Lütfen bir dosya seçin";

}










	

?>