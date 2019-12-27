<div class="danhsachsanpham">   
<h2>Sản phẩm mới nhất</h2>
<div class="row">
<?php 
    $sql = "SELECT * FROM SanPham WHERE BiXoa = 0 ORDER BY NgayNhap DESC LIMIT 0, 12";
    $result=DataProvider::ExecuteQuery($sql);
    $dem=0;
    while($row=mysqli_fetch_array($result))
    {
        ?>     
            <div class="col-2">      
                <div class="card"style="height:340px; width:185px;margin-right:30px;">
                    <img src="image/img/<?php echo $row["HinhURL"];?>" class="card-img-top">
                    <div class="card-body" >
                        <p class="card-title"><?php echo $row["TenSanPham"];?>
                            <br>
                            Giá: <?php echo $row["GiaSanPham"];?>đ
                        </p>
                        <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>" class="btn btn-primary stretched-link">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php
    }
?>
</div>
</div>