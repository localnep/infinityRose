<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>


<style>
    * {
        box-sizing: border-box;
    }

    body {
        background-color: rgba(0, 0, 0, 0.9);
    }

    #pencere {
        background-color: #f7fee6;
        margin: 100px auto;
        font-family: Raleway;
        padding: 60px;
        width: 30%;
        min-width: 300px;
        box-shadow: 0 15px 25px rgba(243, 243, 243, 0.3);
        border-radius: 10px;
    }

    h1 {
        padding: 0;
        text-align: left;
        margin: 0 0 40px;
    }

    input {
        padding: 7px;
        width: 100%;
        font-size: 15px;
        font-family: Raleway;
        border: 1px solid #aaaaaa;
        border-radius: 5px;

    }

    input:focus {
        padding: 7px 7px;
        border: 1.3px solid crimson;
        background: #f1f1f1;
    }

    input:hover {
        background: #f2f2f2;
    }

    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd;
    }

    /* Hide all steps by default: */
    .tab {
        display: none;
    }

    button {
        background-color: crimson;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        font-size: 13px;
        font-family: Raleway;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.7;
    }

    #prevBtn {
        background-color: black;


    }

    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: crimson;
    }


    #cinsiyet {
        padding: 3px;
    }

    [type="date"] {
        background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
    }

    [type="date"]::-webkit-inner-spin-button {
        display: none;
    }

    [type="date"]::-webkit-calendar-picker-indicator {
        opacity: 0;
    }

    #taysin {
        display: block;
    }

    #dogum-tarihi {
        border: 1px solid #c4c4c4;
        border-radius: 5px;
        background-color: #fff;
        padding: 3px 5px;
        box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
        width: 190px;
    }

    a:hover {
        opacity: 0.7;
    }

    /* ------------------------------------------------------------------------------------- */

    #gizlebeni {
        box-sizing: border-box;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        box-shadow: 0 15px 25px rgba(243, 243, 243, 0.3);
        border-radius: 10px;

        float: left;
        height: 350px;
        width: 400px;
        background: white;
        overflow-y: scroll;
        margin-bottom: 25px;
        padding: 0;
        margin: 0;
    }
    



    .tool-tip-text {
        display: none;

    }

    .tool-tip-href:hover .tool-tip-text {
        display: inline-block;
        color: blue;
        position: absolute;
        width: 110px;
        background: black;
        color: #fff;
        text-align: center;
        border-radius: 5px;
        padding: 1px 1px;
        z-index: 1;

    }

    /*.pos1 {
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
        }*/

    #mayki {
     float: left;
       
    }
    
    #maykil{
      float: right;
        position: relative;
    }
    
    .pos1 {
            top: 0;
            right: 105px;
        }
    
    
    

</style>


<body>

    <form id="pencere" action="kayitol.php" method="post">
        <h1>Kayıt Ol:</h1>
        <div class="tab">

            <p><input placeholder="Adınız ve soyadınız" name="fname"></p>
            

        </div>
        <div class="tab">
            <p><input placeholder="E-posta adresiniz" name="email"></p>
            <p><input placeholder="Telefon numaranız" name="phone"></p>
        </div>
        
        <div class="tab">
            
            <p><input placeholder="Şifre oluşturunuz" name="pword" type="password"></p>

        </div>
        <div class="tab">
            <a href="javascript:;" onclick="showMe('gizlebeni');"  style="text-decoration: none; color: crimson;" >Sitenin kurallarını </a> okudum ve onaylıyorum. <div id="message-box">


            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Önceki</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Sonraki</button>
            </div>

        </div>
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>

    </form>



    <div id="gizlebeni" style="display: none;" class="mayki">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam alias exercitationem voluptas odit neque nam corporis iure pariatur error excepturi, iste, optio quasi? Fugiat, aperiam, impedit! Rem accusantium deserunt quasi, modi minus sint mollitia nihil! Nostrum voluptatibus quam architecto nulla ullam dolore eveniet libero facilis! Atque rem, fugit distinctio, minus eius laudantium id, dicta totam hic quas nulla quis cum modi? Aliquid exercitationem temporibus voluptatem, modi minus ut. Ad recusandae eveniet sequi, voluptatum, reiciendis, odio beatae, unde incidunt ullam consequuntur omnis officia itaque quae modi eaque obcaecati magni laboriosam rem veniam rerum dolor aperiam. Corrupti ad veniam, placeat, blanditiis perspiciatis quos repellendus et soluta minima provident commodi aperiam quibusdam sapiente doloribus rem molestiae hic, nam modi dicta. Unde reiciendis vitae quia tempora repudiandae voluptatem atque aliquid necessitatibus consequatur laboriosam deleniti expedita debitis repellat animi numquam, neque non voluptate, ducimus fugit incidunt sunt inventore temporibus nesciunt quasi. Assumenda ea repellendus harum quam recusandae libero quasi possimus vitae eos ipsa eum perferendis doloribus quidem aliquam similique, voluptas beatae, quis alias doloremque inventore optio iusto corporis? Quo dicta dolorem fugiat aspernatur corrupti non commodi beatae voluptatum cupiditate autem minima nam architecto soluta maxime quae, voluptate at aliquid. Necessitatibus esse earum doloribus, aliquam eveniet officiis, fuga, mollitia, assumenda architecto est fugiat ratione neque beatae. Eaque esse rerum atque unde, sed consequuntur dicta distinctio deserunt ut tenetur deleniti eos. Laudantium praesentium aspernatur aperiam laborum molestiae quo cum debitis officiis consectetur consequuntur modi aliquam possimus sunt repellendus, porro deleniti in. Quibusdam consequuntur non, quia quas dicta reprehenderit, necessitatibus quos animi eius. Autem delectus, facilis odit reprehenderit debitis ab vel magni laborum porro numquam est molestias quas at eius vero inventore pariatur fuga impedit nulla perferendis, quaerat animi doloremque laboriosam. Unde, facilis, impedit? Voluptatibus animi sit, libero consequatur, pariatur accusantium sint neque magnam adipisci iste, culpa perspiciatis!</p>
        <a href="troll.html" class="tool-tip-href" id="mayki"><img src="beyinsiz.jpg" alt="" style="width: 100px;"><span class="tool-tip-text">Hayır,sitenin kurallarını onaylamıyorum</span></a>
        <a href="javascript:;" onclick="hideMe('gizlebeni'); " class="tool-tip-href" id="maykil" ><span class="tool-tip-text pos1">Evet, sitenin kurallarını onaylıyorum.</span><img src="beyinli.jpg" alt="" style="width: 100px;"></a>
    </div>

   
    <script>
        var currentTab = 0;
        showTab(currentTab); 

        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Kayıt Ol";
            } else {
                document.getElementById("nextBtn").innerHTML = "İleri";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                document.getElementById("pencere").submit();
                return false;
            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, z, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }




        /* ---------------------------------------------------------------- */

        // Göster ve gizle
        function showMe(blockId) {
            document.getElementById(blockId).style.display = '';
            document.querySelector("#pencere").style.opacity = '0.5';

        }

        function hideMe(blockId) {
            document.getElementById(blockId).style.display = 'none';
            document.querySelector("#pencere").style.opacity = '1';
        }

    </script>



</body>

</html>
