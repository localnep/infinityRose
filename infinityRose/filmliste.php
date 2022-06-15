<?php include 'baglanti.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> BİZİM ÖNERDİKLERİMİZ </title>
	<style>
        
        
        html {

    font-family: 'Calistoga', cursive;
    font-size: 10px;
}

body {
    background: black;

}

/* ************ HEADER ********** */
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
        
        .pencerem{
            height: 1000px;
            background: black;
            
            
           

        }
        
        .butonlarim{
            border-bottom: 1px solid white;
            height: 160px;
            position: relative;
            box-sizing: border-box;
        }
        
        
		ul {
			list-style: none;
			margin: 0;
			padding: 0;
			position: absolute;
             left: 220px;
            margin-top: 50px;
            
          
            
		}

		li {
			display: inline-block;
			float: left;
			margin-right: 15px;
            
            
		}


		li a {
			display: block;
			background: #2f3036;
			min-width: 150px;
			color: #fff;
			text-decoration: none;
			height: 50px;
			line-height: 50px;
			text-align: center;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            box-shadow: 0 1px 4px 1px crimson;
            font-size: 14px;
            transition: background 750ms;
            
            
            
		}

		li a:hover {
			background: crimson;
            border: 1px solid black;
		}
        
        .sa{
            width: 125px;
            border-radius: 50%;
            position: absolute;
            right: 70px;
            top: 25px;
            
            
        }
        
        .kutu{
            width: 250px;
            height: 300px;
            border: 1px solid white;
            margin-left: 60px;
            margin-top: 70px;
            border-radius: 10px;
            float: left;
          
        }
        
        .ga{
            width: 100%;
            height: 100%;
            border-radius: 10px;
           
    
        }
        
        .ga:hover{
            opacity: 0.3;
        
            
        }
        
        .gorunmez .ga{
            color: white;
            display: none;
         
            
            
        }
        
        .kutu:hover .gorunmez{
            display:inline;
            color: white;
        }
        

	

	</style>
</head>

<body>
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

<div class="pencerem">
<div class="butonlarim">
<img src="img/end.jpg" class="sa" alt="">
	<ul>
		<li>
			<a href="?d=yeni">YENİ EKLENENLER</a>
		</li>
		<li>
			<a href="?d=kira">EN ÇOK KİRALANANLAR</a>
		</li>
		<li>
			<a href="?d=puan">EN ÇOK PUAN ALANLAR</a>

		</li>
		<li>
			<a href="?d=oneri">BİZİM ÖNERDİKLERİMİZ</a>
		</li>
		<li>
			<a href="?d=imdb">IMDB PUAN</a>
		</li>
    <li>
      <a href="filmfiltesi.php">TÜRLER</a>
    </li>
	</ul>
	</div>	



<?php 

  if(isset($_GET["d"]))
  {
      if ($_GET["d"] == "yeni") {
        $query = $db->query("SELECT * FROM `filmler` order by tarih DESC", PDO::FETCH_ASSOC);
      }
      else if ($_GET["d"] == "kira") {
        $query = $db->query("select filmler.* FROM filmler,kiralananlar WHERE filmler.id = kiralananlar.film_id GROUP BY kiralananlar.film_id ORDER BY COUNT(kiralananlar.film_id) DESC", PDO::FETCH_ASSOC);
      }
      else if ($_GET["d"] == "puan") {
        $query = $db->query("select filmler.* FROM filmler,puan WHERE filmler.id = puan.film_id GROUP BY puan.film_id ORDER BY AVG(puan.film_id) DESC", PDO::FETCH_ASSOC);
      }
      else if ($_GET["d"] == "oneri") {
        $query = $db->query("SELECT * FROM `filmler` ORDER BY RAND()", PDO::FETCH_ASSOC);
      }
      else if ($_GET["d"] == "imdb") {
        $query = $db->query("SELECT * FROM `filmler` order by imbd DESC", PDO::FETCH_ASSOC);
      }
      else
      {
        $query = $db->query("SELECT * FROM `filmler` order by tarih DESC", PDO::FETCH_ASSOC);
      }
  }
  else
  {
    $query = $db->query("SELECT * FROM `filmler` order by tarih DESC", PDO::FETCH_ASSOC);
  }


  if ( $query->rowCount() ){
       foreach( $query as $row ){

        $query2 = $db->query("SELECT avg(puan) as puan FROM puan WHERE film_id = ".$row["id"])->fetch(PDO::FETCH_ASSOC);
        if ( $query2 ){
            $fpuan = $query2["puan"];
            if (empty($fpuan) || $fpuan == "") {
              $fpuan = "-";
            }
            else
            {
              $fpuan = number_format((float)$fpuan, 2, '.', '');
            }
        }
        else
          $fpuan = "-";
            echo '<div class="kutu">
   
                   <a href="filmarayuz.php?id='.$row["id"].'"> <img src="'.$row["resim"].'" class="ga" alt=""> 
                     <span class="gorunmez"> '.$row["isim"].' <br> IMDB PUANI : '.$row["imbd"].' <br> KULLANICI PUANI : '.$fpuan.' / 5  </span>
                    </a>
                </div>';
       }
  }

 ?>









</div>


</body>

</html>
