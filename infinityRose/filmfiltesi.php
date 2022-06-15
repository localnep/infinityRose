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
	<title>Film Türü</title>
	<style>
        
        
       
               
        
        
        body{
            padding: 0;
            margin: 0;
             
        }
        
        .window{
            height: 900px;
            background: black;
           
            
            
           

        }
        
        .tuşlar{
       
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
			color: crimson;
			height: 50px;
			line-height: 50px;
			text-align: center;
			font-family:  " sans-serif";
            font-size: 14px;
            transition: background 750ms;
            
            
            
		}

		
        .logo{
            
            right: 70px;
            top: 25px;
            width: 250px;
            
        }
        
       
        button{
            position: absolute;
            left: 90%;
            top: 40%;
        }
        .ibo{
            position: absolute;
            top: 800px;
            
            
        }
        
        
       
        
         
            
            
        
        
       
        
        

	

	</style>
</head>

<body>

<div id="matk" >    <form action="tur.php"  method="get" class="ibo">

<input type="text" name="a" size="40" length="100" class="search" value="" style="font-family: Verdana; font-size: 10px; border: 1px solid #C0C0C0">
<input type="submit" class="Arama" value="<?php echo $dil["arama"]; ?>" style="font-family: Verdana; font-size: 10px; border: 5px solid #C0C0C0">
    
    
</form>
    </div>
<div class="window">
<div class="tuşlar">
<img src="foto/filmbuton.png" style="height: 100;" "width: 100;" class="logo">
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
</div>

<div style="position: absolute;right: 10px;top:10px;">
	<a href="dil.php?d=tr"><img src="foto/tr.jpg" style="width: 24px; height: 24px;"></a>
	<a href="dil.php?d=en"><img src="foto/en.jpg" style="width: 24px; height: 24px;"></a>
</div>
</body>
            
</html>
