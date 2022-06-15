<?php session_start();
    include 'baglanti.php';
    if(empty($_SESSION["id"]))
        header("location:giris-yap.php");
    if(empty($_GET["id"]))
        header("location:index.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<style>
    .mainmenubtn {
        background-color: blueviolet;
        color: white;
        border: none;
        cursor: pointer;
        padding: 20px;
        margin-top: 20px;
    }

    .mainmenubtn:hover {
        background-color: burlywood;
    }

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-child {
        display: none;
        background-color: black;
        min-width: 200px;
    }

    .dropdown-child a {
        color: white;
        padding: 20px;
        text-decoration: none;
        display: block;
    }

    .dropdown:hover .dropdown-child {
        display: block;
    }

    #bası {

        background-color: brown;
    }


    #mayki {
        height: 250px;
        background: red;
        display: none;


    }

</style>




<head>
    <!-- <script type="text/javascript">
            // Göster ve gizle
            function showMe(blockId) {
                document.getElementById(blockId).style.display = '';
            }
        
            function hideMe(blockId) {
                document.getElementById(blockId).style.display = 'none';
        
        
            }
        
        </script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>İnfinityRose</title>

    <div class="countainer">
        <div class="row">
            <div id="bası"><br /><br /><br /><br /><br /><br />
            </div>
        </div>
    </div>
    <!-- gölge olacak js de rek ayarlanacak kutu ve dugmeler guzelleştirilecek -->
    <link rel="stylesheet" media="screen" href="./css/bootstrap.css">
    <script src="./css/jquery.js"></script>
    <script src="./css/bootstrap.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="../favicon.png" />
</head>

<?php 

$id = $_GET['id']; 
  $query = $db->query("SELECT * FROM filmler WHERE id = '{$id}'")->fetch(PDO::FETCH_ASSOC);
  if ( $query ){
     $isim = $query["isim"];
     $fiyat = $query["fiyat"];
    
  }
  else
    header("location:index.php");


    $query = $db->query("SELECT * FROM musteri WHERE id = ".$_SESSION["id"])->fetch(PDO::FETCH_ASSOC);
  if ( $query ){
     $adres = $query["adres"];
  }

 ?>

<body style="background-color:rgb(102, 102, 105)">
<input type="hidden" id="adresim" name="adresim" value="<?php echo $adres; ?>">
    <br><br><br>

    <div class="countainer" style="margin-left: auto; margin-right: auto; ">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-7" style="background-color: rgb(207, 207, 207); border-radius: 4px; box-shadow: 3px 3px 4px 4px #000;">





                <div class="container ">

                    <div class="row">
                        <div class="col-sm-12">

                            <div class="dropdown">
                                <button class="mainmenubtn">Ödeme Yönteminizi Seçiniz</button>
                                <div class="dropdown-child">
                                    <a href="#" class="ininal">İninal</a>
                                    <a href="#" class="havale">Kapıda Ödeme</a>
                                    <a href="#" class="kredi">EFT/Havale</a>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="container">
                        <div class="row">
                            <br><br>
                            <div class="col-sm-4">
                                &nbsp;<img width="220" height="380" alt="" id="resim" src="">
                            </div>
                            <div class="col-sm-6"><br><br>
                                <p id="paragraf"></p><br>
                                &nbsp;<img width="300" height="120" alt="" id="resimm" src=""><p id="adress"></p><br>
                                <br>
                                <h5>Müşteri ID : </h5><output form="" name="p" for="a b">@<?php echo $_SESSION["id"]; ?></output><br>
                                <h5>Ürün ID : </h5><output form="" name="x" for="a b">@<?php echo $id; ?><br><?php echo $isim; ?></output>
                                <div id="item-prices" class="box-highlighted box-content">
                                    <div class="sidebar-list">
                                        <div class="list-item">
                                            <h3 class="sidebar-list-title">
                                                Ürün Fiyatı (KDV Dahil)
                                            </h3>
                                            <div class="price">
                                                <strong><output form="" name="" for="a c"><?php echo $fiyat; ?></output></strong> TL

                                            </div>
                                            <br> 
                                            <!--BURSAYA RESİM OLACAK-->
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                    <script src="js/omerapp.js"></script>

                </div>

                <br>
                <br>
                <br>
                <br>
                <br>


                <div class="col-sm-12">



                    <!--https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_input_type_checkbox-->
                    
                        <button type="submit" class="btn btn-primary"><a style="color: #fff;" href="index.php">İptal</a></button>
                        <button type="submit" class="btn btn-primary"> <a style="color: #fff;" href="odemebildirimi.php?id=<?php echo $id; ?>">Onayla</a></button> <br><br>
                </div>

                <!--

        <div id="mayki">
                sasa
           

        <a href="javascript:;" onclick="hideMe('mayki');">Gizle</a>
         </div>
        <a href="javascript:;" onclick="showMe('mayki');">Göster</a>
        -->


            </div>
        </div>
        <br>


</body>

</html>
