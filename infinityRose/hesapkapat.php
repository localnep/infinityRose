<?php session_start();
	include 'baglanti.php';

	$sorgu = $db->exec("delete from musteri where id=".$_SESSION["id"]);
	if ($sorgu) {
		echo "Hesabınız silindi.";
		session_destroy();
	}
	else
		echo "hata oluştu";

	header("Refresh: 2; url=index.php");
 ?>