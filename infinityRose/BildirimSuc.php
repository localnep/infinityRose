<?php session_start();
    include 'baglanti.php';
    if(empty($_SESSION["id"]))
        header("location:giris-yap.php");
    if(empty($_GET["id"]) || empty($_GET["kod"]))
        header("location:index.php");


 ?>
<!DOCTYPE html>
<html lang="en">
<head>


        <script type="text/javascript">

var audio = new Audio('InsertCoin.mp3');
audio.play(); 
      
          </script>


    <style>
    

    
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InfinityRose</title>
    <link rel="stylesheet" media="screen" href="./css/bootstrap.css">
    <script src="./css/jquery.js"></script>
    <script src="./css/bootstrap.min.js"></script>



    <?php 

    $id = $_GET['id']; 
      $query = $db->query("SELECT * FROM filmler WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
      if ( $query ){
         $isim = $query["isim"];
         $fiyat = $query["fiyat"];
        
      }

    $indirmeno = mt_rand(100000,999999);
    $ekle = $db->exec("INSERT INTO `kiralananlar`(`film_id`, `musteri_id`, `tutar`, `alisverisno`, `indirmeno`, `hesap`, `odemetarih`) VALUES (".$id.",".$_SESSION["id"].",".$fiyat.",'".$_GET["kod"]."','".$indirmeno."','".$_POST["hesap"]."','".$_POST["tarih"]."')");
    if(!$ekle)
    {
        echo "hata oluştu.";
        exit();
    }

     ?>
</head>
<body>
        <br><br><br><br><br><br><br><br>
        <div class="container" style="border: solid 1px;">
            <div class="row">
                

    <div class="container">

        <div class="row" >

            <div class="col-sm-3"><img style="height: 150px; float: right;" id="tick" src="foto/tick.png"></div>
            <div class="col-sm-6">

                <br>
                <h3><b>Bildirim başarıyla gönderildi.</b></h3>


            </div>
            <div class="col-sm-3"></div>

            
        </div>
        <div class="container">

                <div class="row" >
        
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
        
                        <br>
                        <p>İletişim Adreslerinizden Gelişmeleri Taki Ediniz.Eğer Bir Sorun Yok İse. Üç (3) İş Günü İçerisinde Size Film Ekleme Kodunuz İletilecektir.</p>
        
                       <br> <h5><b>İletişim :</b></h5> <output style="background-color: rgb(118, 124, 131);" form="" name="a1" for="a c">omerfarukbasekin@hotmail.com <br> 5069941278</output><br>
                   
                        AlışVeriş No : <?php echo $_GET["kod"]; ?>

                       <a style="float:right;" class="btn btn-success" href="index.php">Bitti</a>
                       <br>
                        <br>
                    </div>

                    <div class="col-sm-3"></div>
        
                    
                </div>
        
    </div>
</div>
</div>
    
</body>
</html>