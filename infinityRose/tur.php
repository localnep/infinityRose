<?php session_start();


include "baglanti.php"; 

if(isset($_SESSION["dil"]))
{
	include "dil/".$_SESSION["dil"].".php";
}
else
{
	include "dil/tr.php";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title> Tür</title>
	<style>
        
        

      
        
        body{
            padding: 0;
            margin: 0;
            
            
            
            
            
            
        }
        
        .window{
            height: 1000px;
            background: black;
           
            
        
     
            
           

        }
        
        .buton{
            
            height: 160px;
            position: relative;
           
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
            margin-top: 150px;
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

	
        .film{
            width: 125px;
            border-radius: 50%;
            position: absolute;
            right: 70px;
            top: 25px;
            
            
        }
        .poster{
            width: 150%;
            height: 150%;
            border-radius: 10px;
           
    
        }
      
        
        button{
            position: absolute;
            left: 90%;
            top: 40%;
        }

	

	</style>
</head>

<body>
<div style="position: absolute;right: 10px;top:10px;">
	<a href="dil.php?d=tr"><img src="foto/tr.jpg" style="width: 24px; height: 24px;"></a>
	<a href="dil.php?d=en"><img src="foto/en.jpg" style="width: 24px; height: 24px;"></a>
</div>

<div class="window">
<div class="butonlarim">
<img src="img/end.jpg" class="film"alt="">
	<ul>
		<li>
			<a href="tur.php?t=Aksiyon"><?php echo $dil["menu1"]; ?></a>
		</li>
		<li>
			<a href="tur.php?t=Gerilim"><?php echo $dil["menu2"]; ?></a>
		</li>
		<li>
			<a href="tur.php?t=Bilim Kurgu"><?php echo $dil["menu3"]; ?></a>
		<li>
			<a href="tur.php?t=Korku"><?php echo $dil["menu4"]; ?></a>

		</li>
		
		
	</ul>
	<button type="button" style="background-color: crimson" onclick="window.location.href='./index.php'"><?php echo $dil["anamenubtn"]; ?></button>
	</div>	





  <?php 

  if(isset($_GET["t"]))
  {
      
        $query = $db->query("SELECT * FROM `filmler` where tur like '%".$_GET["t"]."%' order by tarih DESC", PDO::FETCH_ASSOC);
      
      
  }
  else if(isset($_GET["a"]))
  {
      
        $query = $db->query("SELECT * FROM `filmler` where isim like '%".$_GET["a"]."%' order by isim asc", PDO::FETCH_ASSOC);
      
      
  }
  else
  {
    $query = $db->query("SELECT * FROM `filmler` where 1=0", PDO::FETCH_ASSOC);
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
                     <span class="gorunmez"> '.$row["isim"].' <br> '.$dil["imdbpuan"].' : '.$row["imbd"].' <br> '.$dil["kullanicipuan"].' : '.$fpuan.' / 5  </span>
                    </a>
                </div>';
       }
  }
  else
  	echo $dil["filmyok"];


   ?>

  
   
</div>


</body>

</html>
