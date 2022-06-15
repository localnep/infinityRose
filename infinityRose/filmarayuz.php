<?php include "baglanti.php"; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
    
</head>
    <style>
    

body{
    background: #252525;
    font-family: sans-serif;
    
}

.sayfa{
   height: 500px;
    margin: 0 ;
    padding: 0;
}
    .baslik{
    color: crimson;
    text-decoration: none;
    height: 10%
   
        float: center;}
   

.orta{
    
    background: #333;
 
}

.orta-sol{
    float: left;
    width: 50%;
    height: 100%;
    margin-left: 10%;
    
}


.orta-sag{
    float: left;
    width: 40%;    
    height: 50%;
    color: #bbb;
   font-size: 90%;
}
        




    
    
    </style>
<body>

<?php 

  $id = $_GET['id']; 
  $query = $db->query("SELECT * FROM filmler WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
  if ( $query ){
     $isim = $query["isim"];
     $fiyat = $query["fiyat"];
     $yorum = $query["yorum"];
     $imbd = $query["imbd"];
     $resim = $query["resim"];
     $tur = $query["tur"];
     $query2 = $db->query("SELECT film_id,avg(puan) as sayi FROM puan WHERE film_id = '{$id}' group by film_id")->fetch(PDO::FETCH_ASSOC);
    if ($query2) {
       $puan = number_format((float)$query2["sayi"], 2, '.', '');
    }
    else
      $puan = "0.00";
  }

 ?>

<div class="sayfa">
    <div class="ust">
    <div class="baslik">
    <h1><?php echo $isim; ?></h1>
    
    
            
        
    </div>
    <div class="orta">
    <div class="orta-sol">
    <img src="<?php echo $resim; ?>"width="50%"height="55%" alt="Resim bulunamadı."/>    
    </div>
    <div class="orta-sag"    >    
        
           <dl>    
          
            <dt><b>Tür:</b> <?php echo $tur; ?></dt>
            
       
               <dt><b>IMDB Puanı:</b><?php echo $imbd; ?></dt>
        
         
         
           
               <dt><b>Kullanıcı puanı:</b><?php echo $puan; ?>/5</dt>
             
               <dt><b>Editör Yorumu:</b><?php echo $yorum; ?></dt>
            
            </dl>
             <button type="button" style="background-color: crimson" onclick="window.location.href='odemesistemi.php?id=<?php echo $_GET["id"]; ?>'">Kirala (<?php echo $fiyat; ?>₺)</button>
             
            <form action="puanver.php" method="post">
  Puan girin (1 ve 5 arasında): <input type="number" name="puan" min="1" max="5">
   <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
  <input type="submit" value="Puanla" style="background-color: crimson">
</form> 
   <button type="button" style="background-color: crimson" onclick="window.location.href='index.php'">Ana menü</button>
    </div>  
        </div>
    </div>
</div> 


      
</body>
</html>
