<?php 
    include 'baglanti.php';
    if(empty($_GET["id"]))
        header("location:index.php");

    $sorgu = $db->exec("delete from kiralananlar where id=".$_GET["id"]);
    if ($sorgu) {
    	echo "film kiralama başvurusu silindi";
    }
    else
    	echo "hata oluştu";

    header("Refresh: 2; url=bildirimleradmin.php");
 ?>