 <?php session_start(); //sessiona işlem yapmak için start etttim
 	
	include "baglanti.php";	//veritabanına bağlantı sağlandı
	$girilen=$_POST["girilen"]; //ekrana yazılan kodu çektim (kullanıcının girdiği kod)
	$kod=$_POST["kod"]; // sistem tarafından üretilen kod
	$id=$_POST["id"]; // müşterinin id sini çektim -> son 2si hidden -> kullanıcıya gösterilmeyen bölüm
	if($girilen == $kod)
	{
		$_SESSION["id"] = $id; // artık ana sayfa sadece bana özel , artık sadece bana ait bir kullanıcı sayfası var , sonrasi için 
		header("location:profil-ayarlari.php");
	
	}
	else
	{
		
		header("location:giris-yap.php");
	}
		
 ?>
