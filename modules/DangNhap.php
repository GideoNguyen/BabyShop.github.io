<html>

<head>
    <link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
<script type="text/javascript">
    function KiemTra()
    {
        
        var check = true;
        var a1 = document.getElementById('txtUS');
        var b1 = document.getElementById('errus');
        if(a1.value == ""){
            b1.innerHTML = "Tên đăng nhập không được bỏ trống";
            check=false;
        }
        else b1.innerHTML = "";
        a1 = document.getElementById('txtPS');
        b1 = document.getElementById('errps');
        if(a1.value == ""){
            b1.innerHTML = "Tên đăng nhập không được bỏ trống";
            check=false;
        }
        else b1.innerHTML = "";
        return check;
    }
</script>
    <div id="wrapper">
        <div id="header" class="row">
            <div class="col-8" id="timkiem">
                <a href="../index.php"><img src="../image/logo.png" height="30" width="60" style="margin-top: -4;"></a>
                <input style="border: 0;" type="text" value placeholder='Nhập tên sản phẩm bạn mong muốn ...'>
                <button style="border: 0;">Tìm kiếm</button>
            </div>
            <div class="col-4" id="timkiem2">
                <a href="DangNhap.php" style="margin-right: 5px;"><img class="tk" src="../image/dnhap.png">Đăng nhập</a>
                <a href="../index.php?a=6" style="margin-right: 5px;"><img class="tk" src="../image/dky.png">Đăng ký</a>
            </div>
        </div>
        <div>
            <div style="text-align: center;">
                <h1>Đăng nhập</h1>
                <p>Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích, nhận nhiều ưu đãi hấp dẫn.</p>
            </div>
            <form style="margin-left:30%;margin-right:30%;" action="xlDangNhap.php" method="post" onsubmit="return KiemTra()">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên đăng nhập</label>
                    <input id='txtUS' name='txtUS' type="text" class="form-control" aria-describedby="emailHelp">
                    <span id='errus' style="color:red;"></span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input id='txtPS' name='txtPS' type="password" class="form-control">
                    <span id='errps' style="color:red;"></span>
                </div>
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </form>
        </div>
    </div>
</body>

</html>