<?php 
	include "baglanti.php"; 
	$id = $_POST['kid']; 
	$query = $db->query("SELECT * FROM musteri WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
	if ( $query ){
	    header("Refresh: 0; url=yonetici.php?id=".$query["id"]."&isim=".$query["isim"]."&tel=".$query["telefon"]."&mail=".$query["email"]."&sifre=".$query["sifre"]."&adres=".$query["adres"]);
	}
	else
		header("Refresh: 0; url=yonetici.php");

	
 ?>