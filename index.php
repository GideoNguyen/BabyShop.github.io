<?php
    session_start();
    include "lib/DataProvider.php";
    $_SESSION["path"]=$_SERVER["REQUEST_URI"]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/css.css"/>
</head>
<body>
    <div id="wrapper">
        <?php
            include "modules/mHeader.php";
            include "modules/mSidebar.php";
        ?>
<div id="content">
        <?php 
            $a=1;
            if (isset($_GET["key"]) == true) {
                $key = $_GET["key"];
                if($key!="") include "pages/pSanPhamTheoTen.php";
            }
            else{
            if(isset($_GET["a"])==true)
                $a=$_GET["a"];
            switch($a){
                case 1:
                    include "pages/pIndex.php";
                break;
                case 2:
                    include "pages/pSanPhamTheoHang.php";
                break;
                case 3:
                    include "pages/pSanPhamTheoLoai.php";
                break;
                case 4:
                    include "pages/pChiTiet.php";
                break;
                case 5:
                    include "pages/GioHang/pIndex.php";
                break;
                case 6:
                    include "pages/TaoTaiKhoan/pIndex.php";
                break;
                case 7:
                    include "pages/pSanPhamTheoTen.php";
                    break;
                default:
                    include "pages/pError.php";
                break;
            }
        }
        ?>

    </div>
    <?php 
        include "modules/mFooter.php";
    ?>
    </div>
</body>
</html>