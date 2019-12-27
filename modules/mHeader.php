<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div id="header" class="row">
        <div class="col-8" id="timkiem">
            <form action="index.php?a=7" method="get">
                <a href="index.php"><img src="image/logo.png" height="30" width="60" style="margin-top: -4;"></a>
                <input name="key" style="border: 0;" type="text" value placeholder='Nhập tên sản phẩm bạn mong muốn ...'>
                <button type="submit"style="border: 0;"class="btn btn-success">Tìm kiếm</button>
            </form>
        </div>
        <div id="timkiem2" class="col-4">
            <?php 
            if(isset($_SESSION["MaTaiKhoan"]))
            {
            ?><img class="tk" src="image/dnhap.png"> Hello <?php echo $_SESSION["TenHienThi"];?>
            <a href="modules/xlDangXuat.php" style="margin-right: 5px;"><img class="tk" src="image/logout-icon.png">Đăng xuất</a>
            <a href="index.php?a=5"><img class="tk" src="image/giohang.jpg">Giỏ hàng</a>  
            <?php 
            } 
            else
            { ?>  
            <a href="modules/DangNhap.php" style="margin-right: 15px;"><img class="tk" src="image/dnhap.png">Đăng nhập</a>
            <a href="index.php?a=6" style="margin-right: 15px;"><img class="tk" src="image/dky.png">Đăng ký</a>
            <?php } ?>
        </div>
    </div>
</body>

</html>