<h1 style="margin-left:5%">Thông tin chi tiết sản phẩm</h1>
<?php
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
    }
    else
    {
        DataProvider::ChangeURL("index.php?a=404");
    }
    $sql="SELECT s.MaSanPham, s.TenSanPham, s.GiaSanPham, s.SoLuongTon, s.SoLuocXem, s.HinhURL, s.MoTa, h.TenHangSanXuat, l.TenLoaiSanPham,s.MaLoaiSanPham
    FROM SanPham s, HangSanXuat h, LoaiSanPham l
    WHERE s.BiXoa = 0 AND s.MaHangSanXuat=h.MaHangSanXuat AND s.MaLoaiSanPham = l.MaLoaiSanPham AND s.MaSanPham=$id";

    $result=DataProvider::ExecuteQuery($sql);
    $row=mysqli_fetch_array($result);

    if($result==null)
    {
        DataProvider::ChangeURL("index.php?a=404");
    }
?>
    <div id="chitietsp">
        <div class="row">
            <div class="col-4">
                <img src="image/img/<?php echo $row["HinhURL"];?>">
            </div>
            <div class="col-4">
                <div>
                    <span class="label">Tên sản phẩm:</span>
                    <span class="productname"><?php echo $row["TenSanPham"]; ?></span>
                </div>
                <div>
                    <span class="label">Giá:</span>
                    <span class="price"><?php echo $row["GiaSanPham"];?> đ</span>
                </div>
                <div>
                    <span class="label">Hãng sản xuất:</span>
                    <span class="factory"><?php echo $row["TenHangSanXuat"];?></span>
                </div>
                <div>
                    <span class="label">Loại sản phẩm:</span>
                    <span class="data"><?php echo $row["TenLoaiSanPham"];?></span>
                </div>
                <div>
                    <span class="label">Số lượng:</span></span>
                    <span class="data"><?php echo $row["SoLuongTon"];?> sản phẩm</span>
                </div>
                <div>
                    <span class="label">Số lược xem:</span>
                    <span class="data"><?php echo $row["SoLuocXem"] + 1; ?> lược</span>
                </div>
                <div class="giohang">
                    <?php
                if(isset($_SESSION["MaTaiKhoan"]))
                {
                    ?>
                        <a role="button" class="btn btn-primary" href="index.php?a=5&id=<?php echo $row["MaSanPham"]; ?>">
                            Thêm vào giỏ hàng<img src="img/shopping_cart.png" width="32">
                        </a>
                        <?php
                }
                ?>
                </div>
                <div id="mota">
                    <?php echo $row["MoTa"];?>
                </div>
            </div>
        </div>
        <div class="row"style="margin-top:20px"> <h1>Sản phẩm cùng loại</h1></div>
        <div id="spcungloai" class="row" style="margin-top:10px">
    <?php
    $loaisanpham = $row["MaLoaiSanPham"];
    $sql = "SELECT * FROM SANPHAM s JOIN LOAISANPHAM l 
                    ON s.MaLoaiSanPham = l.MaLoaiSanPham WHERE l.MaLoaiSanPham = $loaisanpham ORDER BY SoLuocXem DESC LIMIT 0, 5";
    $result = DataProvider::ExecuteQuery($sql);
    while ($row = mysqli_fetch_array($result)) {
    ?>
        <div class="col-2">
            <div class="card" style="height:320px">
                <img src="image/img/<?php echo $row["HinhURL"]; ?>" class="card-img-top">
                <div class="card-body">
                    <h6 class="card-title"><?php echo $row["TenSanPham"]; ?></h6>
                    <p class="card-text">Giá: <?php echo $row["GiaSanPham"]; ?>đ</p>
                    <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>" class="btn btn-primary stretched-link">Xem chi tiết</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
    </div>
<?php
    $SoLuocXem=$row["SoLuocXem"]+1;
    $sql="UPDATE SanPham SET SoLuocXem = $SoLuocXem
            WHERE MaSanPham = $id";
    DataProvider::ExecuteQuery($sql);
?>