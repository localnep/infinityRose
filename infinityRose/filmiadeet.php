<?php session_start();
	include 'baglanti.php';

	 $query = $db->query("SELECT * FROM kiralananlar WHERE onay=1 and durum = 0 and indirmeno = ".$_POST["kod"])->fetch(PDO::FETCH_ASSOC);
      if ( $query ){
         $guncelle = $db->exec("update kiralananlar set onay = 0,neden='".$_POST["neden"]."' where id=".$query["id"]);
         if ($guncelle) {
         	echo "Film iade edildi";
         }
         else echo "hata oluştu tekrar deneyiniz.";
      }
      else
      	echo "Kodunuz hatalı yada aktif edilmiş durumda. lütfen kontrol ediniz";

    //  header("Refresh : 2; url = filmyonetimi.php");
      header("Refresh: 2; url=filmyonetimi.php");
 ?>