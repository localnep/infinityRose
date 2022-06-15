<?php include 'baglanti.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfinityRose</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="./css/bootstrap.css">
    <script src="./css/jquery.js"></script>
    <script src="./css/bootstrap.min.js"></script>
    
</head>

<body>

<br><br><br><br><br>

<div class="container">

    <div class="row">


        <div class="col-sm-9">

    <div class="container">

        <div class="row">


            <div class="col-sm-7">
              <div class="container">
                <div class="row">
                        <div class="col-sm-6">
                     <img src="/odemesistemiana/zingzing.png" style="height: 55px;" alt="">
                    <h3 style="align-self: auto;">Bildirimler</h3>
                </div>
                <div class="col-sm-6"></div>
            </div>
        </div>
                

                <div class="bilbil" >

                    <?php 


                    $query = $db->query("SELECT kiralananlar.*,musteri.isim as adsad FROM kiralananlar,musteri where musteri.id = kiralananlar.musteri_id and onay=0 and durum=0 and neden is null", PDO::FETCH_ASSOC);
                    if ( $query->rowCount() ){
                         foreach( $query as $row ){
                              echo '<div class="container" style="border: black solid 2px;">
                                        <div class="row">
                                            <div class="col-sm-4">

                                             <output form="" name="t" for="s b" style="color: chartreuse;">Satın Alma Talebi!</output>
                                             <h5>Üye ID : </h5><output form="" name="x" for="a b">@'.$row["musteri_id"].'</output>
                                             <h5>Alışveriş ID : </h5><output form="" name="x" for="a b">@'.$row["alisverisno"].'</output>
                                             <h5>Ürün ID : </h5><output form="" name="x" for="a b">@'.$row["film_id"].'</output>

                                        </div>
                                            <div class="col-sm-4">

                                                <p>
                                                        
                                                        <h5>Ürün Fiyatı : </h5><output form="" name="x" for="a b">'.$row["tutar"].' TL</output> 
                                                        <h5>Satın Alım Tarih : </h5><output form="" name="x" for="a b">'.$row["odemetarih"].'</output>
                                                        <h5>İsim-Soyisim : </h5><output form="" name="x" for="a b">'.$row["adsad"].'</output>
                                                        <h5>Hesap No : </h5><output form="" name="x" for="a b">'.$row["hesap"].'</output>

                                                    </p>

                                            </div>
                                            <div class="col-sm-4">
                                                <br><br>
                                                    <br> <a  class="btn btn-success" href="afilmonay.php?id='.$row["id"].'">Onayla</a><br><br>
                                                    <a  class="btn btn-danger" href="afilmsil.php?id='.$row["id"].'">Sil</a><br><br>
                                            </div>
                                        </div>
                                     </div>
                                     <br><hr><br>'  ;
                         }
                    }






                        $query = $db->query("SELECT kiralananlar.*,musteri.isim as adsad FROM kiralananlar,musteri where musteri.id = kiralananlar.musteri_id and onay=0 and durum=0 and NOT neden is null", PDO::FETCH_ASSOC);
                    if ( $query->rowCount() ){
                         foreach( $query as $row ){
                              echo '<div class="container" style="border: black solid 2px;">

                            <div class="row">
                                <div class="col-sm-4">
                                    
                                 <output form="" name="t" for="s b" style="color: brown;">İade Talebi!</output>
                                 <h5>Üye ID : </h5><output form="" name="x" for="a b">@'.$row["musteri_id"].'</output>
                                 <h5>Alışveriş ID : </h5><output form="" name="x" for="a b">@'.$row["alisverisno"].'</output>
                                 <h5>Ürün ID : </h5><output form="" name="x" for="a b">@'.$row["film_id"].'</output>
                                 <h5>Sebep : </h5><output style=" border:black dashed 1px;" form="" name="x" for="a b">'.$row["neden"].'</output>
                                    <br>
                            </div>
                                <div class="col-sm-4">
                                    <br>
                                    <p>
                                            
                                            <h5>Ürün Fiyatı : </h5><output form="" name="x" for="a b">'.$row["tutar"].' TL</output> 
                                            <h5>Satın Alım Tarih : </h5><output form="" name="x" for="a b">'.$row["odemetarih"].'</output>
                                            <h5>İsim-Soyisim : </h5><output form="" name="x" for="a b">'.$row["adsad"].'</output>
                                            <h5>Hesap No : </h5><output form="" name="x" for="a b">'.$row["hesap"].'</output>
                                            
                                        </p>
    
                                </div>
                                
                            </div>
                         </div><br><hr><br>'  ;
                         }
                    }

                     ?>
                     


                 </div>
            </div>
                <br>
            </div>

            <div class="col-sm-5"></div>
        
        </div>

    </div>
    </div>

    <div class="col-sm-3"></div>

    </div>

</div>
<br><br><br>

<br><br><br>
</body>
</html>