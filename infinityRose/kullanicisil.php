<?php 
	include "baglanti.php"; 
	$sorgu = $db->exec("delete from musteri where id=".$_POST["kid"]);
	if($sorgu)
		echo "Kullanici silindi.";
	else
		echo "Hata oluştu.";

	header("Refresh: 2; url=yonetici.php");
 ?>