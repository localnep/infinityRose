<?php include "baglanti.php"; 
	$sayi = mt_rand(100000,999999);
	$sayi2 = mt_rand(100000,999999);

	

if ($_FILES["dosya"] && $_FILES["dosya2"]) {

  $yol = "./foto/";
  $yol2 = "./video/";

  $dosyaisimleri = $yol  . "n" .$sayi . "n" .$sayi2."n";
  $dosyaisimleri2 = $yol2  . "n" .$sayi . "n" .$sayi2."n";
  $yuklemeYeri =  $dosyaisimleri. $_FILES["dosya"]["name"];
  $yuklemeYeri2 =  $dosyaisimleri2. $_FILES["dosya2"]["name"];
 
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

            $konum2 = $yuklemeYeri2;
              $url2 = $_FILES["dosya2"]["tmp_name"];
            touch($konum2);//belirlediğimiz yerde dosyayı oluştur.
            $al2=file_get_contents($url2);//belirlediğimiz resimin kaynağını al
            $kaydet2=file_put_contents($konum2,$al2);//oluşturduğumuz dosyanın içine yaz


            if($kaydet && $kaydet2){//eğer yazma başarılı ise
              
              $sorgu = $db->exec("insert into filmler (id,isim,imbd,tur,puan,yorum,resim,video) values (".$_POST["fid"].",'".$_POST["isim"]."',".$_POST["imbd"].",'".$_POST["tur"]."',".$_POST["puan"].",'".$_POST["yorum"]."','".$yuklemeYeri."','".$yuklemeYeri2."')");
				if($sorgu)
					echo "Film eklendi.";
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