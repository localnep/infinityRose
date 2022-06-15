<?php session_start();
	include 'baglanti.php';

	 $query = $db->query("SELECT * FROM kiralananlar WHERE onay=1 and  indirmeno = ".$_POST["kod"])->fetch(PDO::FETCH_ASSOC);
      if ( $query ){
         $guncelle = $db->exec("update kiralananlar set durum = 1 where id=".$query["id"]);
         if ($guncelle) {
         	echo "Film aktif edildi";
         }
         else echo "hata oluştu tekrar deneyiniz.";
      }
      else
      	echo "Kodunuz hatalı lütfen kontrol ediniz";

    //  header("Refresh : 2; url = filmyonetimi.php");
      header("Refresh: 2; url=filmyonetimi.php");
 ?>