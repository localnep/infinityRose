<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">


    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: Raleway;
            background: rgba(0, 0, 0, 0.9);
            color: black;

        }


        .pencere {
            box-sizing: border-box;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 400px;
            padding: 40px;
            background: #f7fee6;
            box-shadow: 0 15px 25px rgba(243, 243, 243, 0.3);
            border-radius: 10px;
        }

        .baslik {
            padding: 0;
            text-align: left;
            margin: 0 0 40px;

        }

        .baslik:hover {
            animation: animasyon 4s infinite;
        }

        .pencere .input-alanlari {
            position: relative;
        }

        .input {
            width: 100%;
            padding: 7px 3px;
            font-size: 14px;
            margin-bottom: 40px;
            border-bottom: 1px solid #fff;
            transition: padding 750ms;
            transition-timing-function: ease-out;

        }

        .input:focus {
            padding: 7px 7px;
            border: 1.3px solid crimson;
            background: #f1f1f1;
        }

        .input:hover {
            background: #f2f2f2;
        }

        #giris-yap-butonu {
            background: white;
            border-radius: 8px;
            width: 75px;
        }


        #giris-yap-butonu:hover {
            background: #f1f1f1;
        }

        @keyframes animasyon {
            0% {
                color: black;
            }

            25% {
                color: crimson;
            }

            50% {
                color: black;
            }
        }

        @keyframes animasyon2 {
            0% {}

            25% {}

            50% {
                transform: rotate(360deg);
            }
        }

        img:hover {
            animation: animasyon2 4s infinite;
        }

        img {
            width: 20px;
        }

        h2 {
            font-family: 'Permanent Marker', cursive;
        }

        #check-div {
            position: absolute;
            left: 25px;
            bottom: 45px;
            letter-spacing: 1px;
            border: 1px solid #f1f1f1;
        }


        #href {
            position: absolute;
            right: 30px;
            bottom: 90px;
            text-decoration: none;
            color: crimson;
            border: 1px solid #f1f1f1;
        }

        #href:hover {
            opacity: 0.5;
        }

        #ile-giris {
            width: 60px;
            position: absolute;
            right: 20px;
            top: 20px;
        }

        #ile-giriss {
            width: 60px;
            position: absolute;
            right: 80px;
            top: 20px;
        }




        /* --------------------------------------------------- */

        .tool-tip-text {
            display: none;

        }

        .tool-tip-href:hover .tool-tip-text {
            display: inline-block;
            color: blue;
            position: absolute;
            width: 130px;
            background: crimson;
            color: #fff;
            text-align: center;
            border-radius: 5px;
            padding: 1px 1px;
            z-index: 1;

        }

        .pos1 {
            top: 75px;
            right: 42.5px;
        }

        .pos2 {
            top: 75px;
            right: 100px;

        }

        .pos1::after {
            content: "";
            position: absolute;
            top: 0;
            right: 10%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: yellow transparent transparent transparent;
        }

        .pos2::after {
            content: "";
            position: absolute;
            top: 0;
            right: 10%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: yellow transparent transparent transparent;
        }

        #kayit-ol {
            position: absolute;
            bottom: 15px;
            right: 45px;
            text-decoration: none;
            font-family: 'Open Sans Condensed', sans-serif;
            color: crimson;

        }

        #kayit-ol:hover {
            opacity: 0.5;

        }

        #goster {
            position: absolute;
            top: 263px;
            right: 40px;
            color: white;
        }

        #sifre-goster {
            position: absolute;
            top: 265px;
            right: 60px;
            color: white;
        }

    </style>






    <script>
        var dejavu = new Audio();
        dejavu.src = "telifsiz.mp3";

        function loadContent(num) {
            dejavu.play();
            var div1 = document.getElementById("div1");
            div1.innerHTML = "Loaded content for section" + num;
        }



        /* ----------------------------------------------- */


        /* function myFunction() { 
             var x = document.querySelector("#password");
             if (x.type === "password") {
                 x.type = "text";
             } else {
                 x.type = "password";
             }
         }*/

        function myFunction() {
            var x = document.querySelector("#password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }


        
        var value1 = document.getElementsByClassName("sifre-goster");
        
        value1.onclick = function ()
        {
            console.log("Tıklandı");
            var x = document.querySelector("#password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        
//        function fonks(e) { çalışmadı
//            console.log(e.type);
//            var x = document.querySelector("#password");
//            if (x.type === "password") {
//                x.type = "text";
//            } else {
//                x.type = "password";
//            }
//        }
        
        

    </script>





</head>

<body>
    <div class="pencere">
        <div class="baslik">
            <h2>Giriş Yap</h2>
        </div>
        <form action="iki-asamali-d-s.php" method="post"> <!--post, gönderme metodum diğer taraftan çekerken _post diye verimi çekeceğim !-->
            <div class="input-alani">
                <img src="foto/kullanici.jpg" alt="kullanıcı resmi">
                <input type="text" class="input" name="kadi" placeholder="E-posta veya Telefon" required>


            </div>

            <div class="input-alani">
                <img src="foto/kilit.jpg" alt="parola resmi">


                <input type="password" class="input" placeholder="Şifre" name="sifre" id="password">
                <img src="foto/password-eyes.jpg" alt="" id="sifre-goster" class="sifre-goster">
                <input type="checkbox" onclick="myFunction()" id="goster">



            </div>


            <input type="submit" value="Giriş Yap" class="input" id="giris-yap-butonu">


            <div id="check-div">
                <nav>
                    <input type="checkbox" onmousedown="dejavu.play();" id="check"> Beni Hatırla
                </nav>
            </div>

            <div>
                <a href="sifremi-unuttum.php" id="href">Şifremi Unuttum</a>
                <a href="" class="tool-tip-href"><img id="ile-giris" src="foto/facebook.png" alt=""><span class="tool-tip-text pos1">Facebook ile bağlan</span></a>
                <a href="googleapi" class="tool-tip-href"><img id="ile-giriss" src="foto/google.png" alt=""><span class="tool-tip-text pos2">Google ile bağlan</span></a>
            </div>
        </form>

        <a href="kayit-ol.php" id="kayit-ol" style="padding: 4px; border: 1px solid #f5f5f5;">Kayıt Ol</a>
        
               <a href="index.php" style="position: absolute; top: 25px; left: 40px; color: black;"><i class="fas fa-home">   Ana Sayfaya Dön</i></a>
            

    </div>






    <script>
        var isCrimson = false; 
        var crimson = document.querySelector('#kayit-ol'); 

        setInterval(function() {

            if (isCrimson) {
                crimson.style.background = 'White';
                crimson.style.color = 'Crimson';
                crimson.style.borderRadius = '10px';


                isCrimson = false;
            } else {
                crimson.style.background = 'Crimson';
                crimson.style.color = 'white';
                crimson.style.borderRadius = '10px';

                isCrimson = true;
            }
        }, 1750);

    </script>
</body>

</html>
