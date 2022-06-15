<?php session_start();
    include 'baglanti.php';
    if(empty($_SESSION["id"]))
        header("location:giris-yap.php");
    if(empty($_GET["id"]))
        header("location:index.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ödeme Bildirimi</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="./css/bootstrap.css">
    <script src="./css/jquery.js"></script>
    <script src="./css/bootstrap.min.js"></script>
    <style>
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
    .button2 {
  background-color: white; 
  color: black; 
  border: 2px solid rgb(184, 6, 6);
  border-radius: 8px; 
}

.button2:hover {
  background-color: rgb(184, 8, 8);
  color: white;
}
.button3 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
  border-radius: 8px; 
}

.button3:hover {
  background-color: #008CBA;
  color: white;
}   
    
    </style>

    <?php 

    $id = $_GET['id']; 
      $query = $db->query("SELECT * FROM filmler WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
      if ( $query ){
         $isim = $query["isim"];
         $fiyat = $query["fiyat"];
        
      }
      else
        header("location:index.php");


        $query = $db->query("SELECT * FROM musteri WHERE id = ".$_SESSION["id"])->fetch(PDO::FETCH_ASSOC);
      if ( $query ){
         $adres = $query["adres"];
         $ad = $query["isim"];
         $mail = $query["email"];
         $tel = $query["telefon"];
      }
      $kod = mt_rand(100000,999999);
     ?>
    
</head>
<body>
    
    <div class="container">
        <div class="row" ><br>
            <div class="col-sm-4"> <br><br></div>
            <div class="col-sm-4" style="background-color: rgb(201, 197, 197); outline-style: outset; outline-width: 5px; outline-color: lightslategray; box-shadow: 3px 3px 4px #000;">
                  <form action="BildirimSuc.php?id=<?php echo $id.'&kod='.$kod; ?>" method="post">
                    <h5><b>Ürün ID :</b></h5> <output form="" name="a1" for="a c">$<?php echo $id; ?></output> <br>
                    <h5><b>Müşteri ID :</b></h5> <output form="" name="a1" for="a c">@<?php echo $_SESSION["id"]; ?></output><br>
                    <h5><b>Müşteri Ad/Soyad :</b></h5> <output form="" name="a1" for="a c"><?php echo $ad; ?></output><br>
                    <h5><b>Müşteri e-Mail :</b></h5> <output form="" name="a1" for="a c"><?php echo $mail ?></output><br>
                    <h5><b>Müşteri tel-no :</b></h5> <output form="" name="a1" for="a c"><?php echo $tel; ?></output><br>
                    <h5><b>Ödeme Yapan Hesap No: :</b></h5> <input type="text" name="hesap" value="" ><br>
                    <h5><b>Ödeme Yapılan Tarih :</b></h5>   <input type="date" name="tarih"><br>
                    
                   <div style="outline-style: dotted; outline-color: magenta;"> <h5><b>Alışveriş No :</b></h5> <output  form="" name="a1" for="a c"><?php echo $kod; ?></output> </div> <br>
                  <!--  <input type="button" onclick="alert('Hello World!')" value="Click Me!"> -->
                  
                  <a href="index.php" class="button button2">İptal</a>
                  <button class="button button3" >Gönder</button>
                  <!-- <button class="button button3" href="BildirimSuc.html" >Gönder</button> -->
                </div>
            <div class="col-sm-4"><br><br></div>
        </div>
    </div>






</body>
</html>