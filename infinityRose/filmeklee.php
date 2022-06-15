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
            
            /* Sol menu */

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
  background-color: rgb(255, 255, 255);
  background-position: 10px 10px; 
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  margin-left: 10% ;
}

input[type=text]:focus {
  width: 80%;
}

/*Film ekle butonu*/
.button {
    margin-left: 10%;
  background-color: rgb(158, 158, 158); /* Green */
  border: none;
  color: white;
  padding: 12px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
    .button2 {
  background-color: white; 
  color: rgb(19, 20, 18); 
  border: 2px solid rgb(226, 226, 226);
  border-radius: 15px 15px 15px; 
}

.button2:hover {
  background-color: rgb(142, 223, 255);
  color: white;
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
        <li><a  href="./filmyonetimi.php">Filmlerim</a></li>
        <li><a class="active" href="#">Film Ekle</a></li>
        <li><a href="./uruniade.php">Ürün İade</a></li>
        
      </ul>
      

      <div style="margin-left:25%;padding:1px 16px;height:1000px;">
           
            <br><br>

            

<div style="margin-top: 6%; margin-left: 20%; margin-right: 20%; width: 50%; height: 50%; border-radius: 30px 30px 30px; border: rgb(255, 255, 255) solid 3px;">
        <form action="filmaktif.php" method="post">
        <h3 style=" margin-left: 40%; width: 14%;  background-color: rgb(255, 255, 255);"> Film Ekle</h3>
        
            <h5 style=" margin-left: 10%; color: rgb(255, 255, 255);">Film Aktivasyon Kodu :</h5>
        <input type="text" name="kod" value="" >
        <br>
        <br>
        <button class="button button2">Ekle</button>
      </form> 
    </div>
                       
    </div>



</body>
</html>
