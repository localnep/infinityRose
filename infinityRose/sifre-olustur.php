<?php include 'baglanti.php'; 
    $sifre = $_POST["sifre"];
    $kod = $_POST["kod"];
    $mail = $_POST["mail"];

    if($sifre != $kod)
        header("location:giris-yap.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>



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



        #yeni-hesap-olustur {
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
        
         #error
            {
                color:red;
                text-align: left;
            }
            
         button
            {
                background-color: crimson;
                color: white;
                padding: 7px 10px;
                border-radius: 5px;
                cursor: pointer;
                border:none;
                margin-top: 10px;
                width: 25%;
            }
        
        button:hover{
            opacity: 0.7;
        }

    </style>

    <script>
        $(function() {
            $("#btn").click(function() {

                var errormessage = "";
                $("#error").html("");

               

                if ($("#password").val() == "") {
                    errormessage += "<p>parola alanı zorunlu alan</p>";
                }

                if ($("#password").val() != $("#repassword").val()) {
                    errormessage += "<p>parola alanları eşleşmiyor</p>";
                }

                if (errormessage != "") {
                    $("#error").html(errormessage);
                }
                
                else{
                    window.location.href="giris-yap.php";
                }



            });

        });
        
        

    </script>

</head>

<body>


  
    
            <div class="pencere">
               <h2 class="baslik">Yeni şifre oluşturun</h2>
                <div id="error"></div>
        
               <form action="sifreolustur.php" method="post">
                <div class="form-group">     
                    <label for="password"></label>
                    <input type="text" name="password" id="password" placeholder="yeni şifre" class="input">
                </div>

                 <div class="form-group">      
                    <label for="repassword"></label>
                    <input type="text" name="repassword" id="repassword" placeholder="yeni şifreyi tekrar girin" class="input">
                </div>
                    <input type="hidden" name="mail" value="<?php echo $mail; ?>">
                     <button id="btn">Kaydet</button>
              </form>
               <p><span>NOT: Parola alanlarınız aynı olmalı</span></p>
            
      </div>

</body>

</html>
