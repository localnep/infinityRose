<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Open Sans Condensed', sans-serif;
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

        #gonder-butonu {
            background: white;
            border-radius: 8px;
            width: 75px;
       
        }


        #gonder-butonu:hover {
            background: #f1f1f1;
        }

        #png{

            width: 20px;
            position: absolute;
            top:135px;
            left: 15px;
        }
        
        #yeni-hesap-olustur{
            text-decoration: none;
            color: white;
            border: 1px solid crimson;
            background: crimson;
            border-radius: 10px;
            position: absolute;
            bottom: 30px;
            right: 20px;
            padding: 3px;
            
            
        }
        
         #yeni-hesap-olustur:hover{
           opacity: 0.7;
            
        }
        
      

    </style>

</head>

<body>


    <div class="pencere">
        <div class="baslik">
            <h2>Şifremi Unuttum</h2>
        </div>
        <form action="aktivasyon-kodu.php" method="post">
            <div class="input-alani">

                <input type="text" name="mail" class="input" placeholder="Kayıtlı e-posta adresiniz">


            </div>

            <img src="foto/email.png" alt="e-mail resmi" id="png">
           <input type="submit" value="Gönder" class="input" id="gonder-butonu">


        </form>
        
        <a href="kayit-ol.php" id="yeni-hesap-olustur" class="tool-tip-href">Yeni Hesap Oluştur</a>
     

    </div>

</body>

</html>
