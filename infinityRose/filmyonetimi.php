<?php session_start();
    include 'baglanti.php';
    if(empty($_SESSION["id"]))
        header("location:giris-yap.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>InfinityRose</title>
    <style>
            body {
              margin: 0;
            }
            
            /* Sol menu */
        header {
    overflow: hidden;
    height: 15vh;
    width: 100%;

}

.container {
    height: 100%;
    width: 90%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.menu-toggle {
    position: fixed;
    top: 2.5rem;
    right: 2.5rem;
    color: #eeeeee;
    font-size: 3rem;
    cursor: pointer;
    z-index: 1000;
    display: none;
}

.logo {
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 50;
}

.logo1 {
    font-size: 3rem;
    color: crimson;
}

.logo2 {
    color: aliceblue;
    animation: slide2 .7s forwards;
}

            ul {
              list-style-type: none;
              margin: 0;
              padding: 0;
              width: 25%;
              background-color: #f1f1f1;
              position: fixed;
              height: 100%;
              overflow: auto;
            }
            
            li a {
              display: block;
              color: #000;
              padding: 8px 16px;
              text-decoration: none;
            }
            
            li a.active {
              background-color: #555;
              color: white;
            }
            
            li a:hover:not(.active) {
              background-color:rgb(151, 155, 151);
              color: white;
            }
            /* Film Arama */
            input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid rgb(255, 255, 255);
  border-radius: 20px 20px 20px;
  font-size: 16px;
  background-color: rgb(175, 175, 175);
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
            </style>
</head>
<body style="background-color: black;">
    <header>
      <div class="menu-toggle" id="hamburger-menu">
          <i class="fas fa-bars"></i>
      </div>
      <div class="covering"></div>
      <div class="container">
          <a href="index.php">
              <div class="logo">
                  <h1 class="logo1">INFINITY</h1>
                  <h1 class="logo2">ROSE</h1>
              </div>
          </a>
      </div>
  </header>

    
<ul>
        <li><a class="active" href="">Filmlerim</a></li>
        <li><a href="./filmeklee.php">Film Ekle</a></li>
        <li><a href="./uruniade.php">Ürün İade</a></li>
        
      </ul>
      
      <div style="margin-left:25%;padding:1px 16px;height:1000px;">
           
        <br><br>

                    
                  <div class="sayfaa" style="height: 100%;">
                  <br><br>

                  <?php 
                    $query = $db->query("SELECT filmler.video,filmler.resim,filmler.isim,filmler.id FROM filmler,kiralananlar where filmler.id = kiralananlar.film_id and kiralananlar.onay = 1 and kiralananlar.durum = 1 and DATE_ADD(kiralananlar.tarih, INTERVAL 14 DAY) > CURDATE() and kiralananlar.musteri_id = ".$_SESSION["id"], PDO::FETCH_ASSOC);
                    if ( $query->rowCount() ){
                         foreach( $query as $row ){
                              echo '<div class="filmm" style="width: 20%; ">
                      <a href="filmizle.php?p='.$row["video"].'">  <img style="width:100%;" src="'.$row["resim"].'" alt=""> </a>
                        <h4 style="margin-left: 1%; color: blanchedalmond;">'.$row["isim"].'</h4>
                        
      </div>';
                         }
                    }


                   ?>


                  
      
   
     
</div>
      </div>
    
</body>
</html>