<?php include 'baglanti.php'; //veri bağlantısı için 
	



$sorgu = $db->exec("insert into musteri (isim,telefon,email,sifre) values ('".$_POST["fname"]."','".$_POST["phone"]."','".$_POST["email"]."','".$_POST["pword"]."')"); // insert ile isim telefon email şifre bilgilerini aldım ve values ile veritabanını güncelledim
				if($sorgu)
					echo "Kayıt oldun.";
				else
					echo "Hata oluştu.";

				header("Refresh: 2; url=giris-yap.php");	


 ?>