<?php include "baglanti.php";

	$sifre = $_POST["password"];
    $sifre2 = $_POST["repassword"]; //şifreyi tekrarla
    $mail = $_POST["mail"];

    if($sifre != $sifre2)
        header("location:giris-yap.php");
    else
    {
    	$sorgu = $db->exec("update musteri set sifre='".$sifre."' where email='".$mail."'"); //müşteriler tab.ndaki şifre sütununu maile göre değiştiroyrum -> update sorgusu başarılı bir şekilde çalışırsa if yapısına girer
    	if ($sorgu) {
    		echo "Şifre değiştirildi";
    	}
    	else echo "hata oluştu";

        header("Refresh: 2; url=giris-yap.php");
    }


 ?>