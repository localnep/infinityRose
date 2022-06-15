<?php include 'baglanti.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

    <link rel="stylesheet" href="css/anastyle.css">
</head>

<body>
   
   
    <header>
        <div class="menu-toggle" id="hamburger-menu">
            <i class="fas fa-bars"></i>
        </div>
        <div class="covering"></div>
        <div class="container">
            <a href="index.html">
                <div class="logo">
                    <h1 class="logo1">INFINITY</h1>
                    <h1 class="logo2">ROSE</h1>
                </div>
            </a>
            <nav>
                <ul>
                    <li><a href="">Anasayfa</a></li>
                    <li><a href="filmliste.php">Filmler</a></li>
                    <li><a href="filmyonetimi.php">Film Yönetimi</a></li>
                    <li><a href="./giris-yap.php"><i class="far fa-user-circle fa-2x"></i></a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    
    
    
    
    
    <div id="slide">
        <div class="slideshow-container">
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <div id="img1" class="mySlides fade">
                <div id="about-1" class="about-slider">
                    <h1 class="text-1">FiLM'İN DOĞRU ADRESİ</h1>
                    <div class="button-1" onclick="location.href='./Ozan/kayit-ol.html'">
                        <h3>KAYIT OL</h3>
                    </div>
                </div>
            </div>
            <div id="img2" class="mySlides fade">
            </div>
            <div id="img3" class="mySlides fade">
            </div>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>

    <section id="responsive-section">
        <div class="responsive-container">
            <div class="intro-photo">
                <img src="foto/responsive.png" alt="">
            </div>
            <div class="intro-text">
            <h1>Her yerde istediğiniz zaman izleyin.</h1>
                <h3>Telefondan,tabletten,bilgisayardan ektra ücret ödemeden film izleyin.</h3>
            </div>
        </div>
    </section>
    <div id="film-header">
        <h1>Seçtiğimiz filmler</h1>
    </div>

    <main id="film-main">
    <section class="all-cards">

        <?php 

        $query = $db->query("SELECT * FROM filmler", PDO::FETCH_ASSOC);
        if ( $query->rowCount() ){
             foreach( $query as $row ){
                 echo '<div class="single-card">
                        <div class="movie-image">
                            <img src="'.$row["resim"].'" alt="">
                        </div>
                        <div class="movie-content">
                            <p class="movie-name text--size">
                                '.$row["isim"].'
                            </p>
                            <div class="movie-about">
                                <p class="text--size">IMDB:'.$row["imbd"].'</p>
                                <p class="movie-push text--size" onclick="location.href=index.html">İzle</p>
                                <p class="text--size">TÜR:'.$row["tur"].'</p>
                            </div>
                        </div>
                    </div>'; 
             }
        }

         ?>


        
        



    </section>
    </main>



    <script src="js/anascript.js"></script>
</body></html>
