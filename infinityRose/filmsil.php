<?php 
	include "baglanti.php"; 
	$sorgu = $db->exec("delete from filmler where id=".$_POST["fid"]);
	if($sorgu)
		echo "film silindi.";
	else
		echo "Hata oluştu.";

	header("Refresh: 2; url=yonetici.php");
 ?>