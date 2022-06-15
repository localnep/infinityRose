
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <form class="profile-form" action="kullaniciekle.php" method="post"  enctype="multipart/form-data">
        <div class="form-header">
            <h3 class="form-header-title">Kullanıcı Ekleme</h3>
        </div>
        <div class="form-container">
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-key fa-2x"></i></div>
                <input class="name-chance input-style" name="kid" type="text" placeholder=" Kullanıcı ID ">
            </div>
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-user fa-2x"></i></div>
                <input class="name-chance input-style" name="isim" type="text" placeholder="İsim ">
            </div>
            <div class="section-form">
                <div class="logo2 logo"><i class="fas fa-mobile-alt fa-2x"></i></div>
                <input class="name-chance input-style" name="tel" type="text" placeholder="Telefon Numarası">
            </div>
            <div class="section-form">
                <div class="logo3 logo"><i class="fas fa-envelope-square fa-2x"></i></div>
                <input class="name-chance input-style" name="mail" type="text" placeholder="Mail">
            </div>
            <div class="section-form">
                <div class="logo4 logo"><i class="fas fa-lock fa-2x"></i></div>
                <input class="name-chance input-style" name="sifre" type="password" placeholder="Şifre">
            </div>
            <div class="section-form">
                <input id="file" class="fileStyle input-style" type="file" name="dosya" accept="image/*" placeholder="Resim">

                <input class="txt-area input-style" name="adres" type="text-area" placeholder="Adres giriniz">
            </div>
            <div class="section-form">
                <input class="btn-style input-style" type="submit" value="EKLE">
            </div>
        </div>
    </form>



    <form class="profile-form form-2" action="kullanicisil.php" method="post">
        <div class="form-header">
            <h3 class="form-header-title">Kullanıcı Silme</h3>
        </div>
        <div class="form-container form-2-container">
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-key fa-2x"></i></div>
                <input class="name-chance input-style" name="kid" type="text" placeholder="Kullanıcı ID ">
            </div>
            <div class="section-form">
                <input class="btn-style input-style" type="submit" value="SİL">
            </div>
        </div>
    </form>
    
    
    
        <div class="form-header">
            <h3 class="form-header-title">Kullanıcı Güncelleme</h3>
        </div>
        <div class="form-container">
        <form class="profile-form" action="kullanicilistele.php" method="post">
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-key fa-2x"></i></div>
                <input class="name-chance input-style" value="<?php if(isset($_GET["id"])) echo $_GET["id"];  ?>" name="kid" type="text" placeholder="Kullanıcı ID ">
            </div>
        </form>
        <form class="profile-form" action="kullaniciguncelle.php" method="post"  enctype="multipart/form-data">
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-user fa-2x"></i></div>
                <input class="name-chance input-style" value="<?php if(isset($_GET["isim"])) echo $_GET["isim"];  ?>" name="isim" type="text" placeholder="İsim ">
                <input  value="<?php if(isset($_GET["id"])) echo $_GET["id"];  ?>" name="kid" type="hidden">
            </div>
            <div class="section-form">
                <div class="logo2 logo"><i class="fas fa-mobile-alt fa-2x"></i></div>
                <input class="name-chance input-style" name="tel" value="<?php if(isset($_GET["tel"])) echo $_GET["tel"];  ?>" type="text" placeholder="Telefon Numarası">
            </div>
            <div class="section-form">
                <div class="logo3 logo"><i class="fas fa-envelope-square fa-2x"></i></div>
                <input class="name-chance input-style"  value="<?php if(isset($_GET["mail"])) echo $_GET["mail"];  ?>" name="mail" type="text" placeholder="Mail">
            </div>
            <div class="section-form">
                <div class="logo4 logo"><i class="fas fa-lock fa-2x"></i></div>
                <input class="name-chance input-style" name="sifre" type="password"  value="<?php if(isset($_GET["sifre"])) echo $_GET["sifre"];  ?>" placeholder="Şifre">
            </div>
            <div class="section-form">
                <input id="file" class="fileStyle input-style" type="file" name="dosya" accept="image/*" placeholder="Resim">

                <input class="txt-area input-style"  value="<?php if(isset($_GET["adres"])) echo $_GET["adres"];  ?>" type="text-area" name="adres" placeholder="Adres giriniz">
            </div>
            <div class="section-form">
                <input class="btn-style input-style" type="submit" value="GÜNCELLE">
            </div>
        </form>
        </div>
    
    
    
    <form class="profile-form"  action="filmekle.php" method="post"  enctype="multipart/form-data">
        <div class="form-header">
            <h3 class="form-header-title">Film Ekleme</h3>
        </div>
        <div class="form-container">
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-key fa-2x"></i></div>
                <input class="name-chance input-style" name="fid" type="text" placeholder="Film ID ">
            </div>
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-video fa-2x"></i></div>
                <input class="name-chance input-style" name="isim" type="text" placeholder="Film İsmi ">
            </div>
            <div class="section-form">
                <div class="logo2 logo"><i class="fab fa-imdb fa-2x"></i></div>
                <input class="name-chance input-style" name="imbd" type="text" placeholder="IMBD">
            </div>
            <div class="section-form">
                <div class="logo3 logo"><i class="fab fa-scribd fa-2x"></i></div>
                <input class="name-chance input-style" name="tur" type="text" placeholder="Tür">
            </div>
            <div class="section-form">
                <div class="logo4 logo"><i class="fas fa-star-half-alt fa-2x"></i></div>
                <input class="name-chance input-style" name="puan" type="password" placeholder="Puan">
            </div>
            <div class="section-form">
                <input id="file" class="fileStyle input-style" type="file" name="dosya" accept="image/*" placeholder="resim Yükle">
                <input id="file" class="fileStyle input-style" type="file" name="dosya2"  placeholder="Film Yükle">

                <input class="txt-area input-style" type="text-area" name="yorum" placeholder="Film Yorumu">
            </div>
            <div class="section-form">
                <input class="btn-style input-style" type="submit" value="EKLE">
            </div>
        </div>
    </form>
    
    
    <form class="profile-form form-2"  action="filmsil.php" method="post">
        <div class="form-header">
            <h3 class="form-header-title">Film Silme</h3>
        </div>
        <div class="form-container form-2-container">
            <div class="section-form">
                <div class="logo1 logo"><i class="fas fa-key fa-2x"></i></div>
                <input class="name-chance input-style" name="fid" type="text" placeholder="Film ID ">
            </div>
            <div class="section-form">
                <input class="btn-style input-style" type="submit" value="SİL">
            </div>
        </div>
    </form>





</body>
<script src="input.js"></script></html>
