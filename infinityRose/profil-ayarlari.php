<?php session_start();
    include 'baglanti.php';
    $id = $_SESSION["id"] ;
    $query = $db->query("SELECT * FROM musteri WHERE id = {$id}")->fetch(PDO::FETCH_ASSOC);
    if ( $query ){
        $isim = $query["isim"];
        $tel = $query["telefon"];
        $mail = $query["email"];
        $sifre = $query["sifre"];
        $adres = $query["adres"];
    }
 ?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Ayarları - InfinityRose</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="./css/bootstrap.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/orhanstyle.css">
    
    
</head>
<body id="bodyid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" style="margin: -5%;padding: 10%;padding-left: 18%;">
                    <div class="panel panel-crimson" id="paneledit">
                    <div class="panel-heading">
                        <strong>Profil Ayarları</strong>
                    </div>
                    <div class="panel-body">
          
                        <form action="musteriguncelle.php" method="post" enctype="multipart/form-data">
                            <br>
                            <div class="input-group">
          
                                <span class="input-group-addon" aria-hidden="true"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" name="isim" id="isim" value="<?php echo $isim; ?>" class="form-control" placeholder="İsmi Değiştirin">
                            
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                <input type="text" name="tel" id="telefon"  value="<?php echo $tel; ?>" class="form-control" placeholder="Telefon numaranızı değiştirin.">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input type="text" name="mail" id="mail"  value="<?php echo $mail; ?>" class="form-control" placeholder="Mailinizi değiştirin.">
                            </div>
                            <br>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="sifre" id="parola"  value="<?php echo $sifre; ?>" class="form-control" placeholder="Şifrenizi değiştirin.">
                            </div>
                            
                            

                            <br><br>
                            <div class="input-group">
                                <label for="adres">Kapıda ödeme için adresi girin:</label>
                                <textarea name="adres" id="adres" cols="50" rows="5" class="form-control" maxlength="150"><?php echo $adres; ?></textarea>
                            </div>

                            <br><br>
                            <div class="form-group">
                                    <label for="profilResmiSec">Profil resmini değiştirmek için resmi yükleyin.</label>
                                    <input type="file" class="form-control-file" name="dosya" id="picture">
                            </div>
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </form>
                            <div class="form-group">
                                <br><br>
                                <label for="hesabiKapat">Hesabınızı kapatmak için alttaki butona tıklayın.</label>
                                <br>
                                
                                    <button type="button" class="btn btn-danger" id="hesabiKapa">Hesabı Kapat</button>

                            </div>

                            <div class="form-group" style="overflow: auto;">
                                <div>Kira süresi 1 gün kalan filmler</div>

                                <?php 


                                    $query = $db->query("SELECT filmler.id,filmler.resim,filmler.isim FROM `kiralananlar`,`filmler` WHERE filmler.id = kiralananlar.film_id and kiralananlar.onay=1 and kiralananlar.durum=1 and DATE_ADD(kiralananlar.tarih, INTERVAL 14 DAY) >= CURDATE() AND DATE_ADD(kiralananlar.tarih, INTERVAL 14 DAY) < CURDATE() + INTERVAL 1 DAY and kiralananlar.musteri_id=".$_SESSION["id"], PDO::FETCH_ASSOC);
                                    if ( $query->rowCount() ){
                                         foreach( $query as $row ){
                                              echo '<div style="float: left;margin: 10px; border-radius: 10px;">
                                                    <a href="filmarayuz.php?id='.$row["id"].'">
                                                        <img alt="'.$row["isim"].'" style="border-radius: 10px;" src="'.$row["resim"].'" width="80" height="80">
                                                    </a>
                                                </div>';
                                         }
                                    }

                                 ?>
                                
                               
                            </div>

                            <div class="form-group">
                                <a href="index.php" class="btn btn-crimson" id="buton-anasayfa">Anasayfaya git</a>
                            </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="./js/app.js"></script>
</body>
</html>