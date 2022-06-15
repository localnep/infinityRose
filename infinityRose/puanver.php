<?php session_start();
include 'baglanti.php';
	if(isset($_SESSION["id"]))
	{
		$sorgu = $db->exec("insert into puan (film_id,musteri_id,puan) values (".$_POST["id"].",".$_SESSION["id"].",".$_POST["puan"].")");
		if($sorgu)
		{
			echo "Filme ".$_POST["puan"]." puan verdiniz";
		}
		else
			echo "hata oluştu";

		header("Refresh: 2; url=index.php");
	}
	else
	{
		echo "Puan vermek için önce giriş yapınız.";
		header("Refresh: 2; url=giris-yap.php");
	}

 ?>