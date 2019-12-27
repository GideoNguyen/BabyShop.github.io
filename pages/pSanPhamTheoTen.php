<div class="danhsachsanpham">     
<h2>Tìm kiếm sản phẩm</h2>
<div class="row">   
<?php 
    if (isset($_GET["key"])) {
    $key = $_GET["key"];
    $sql = "SELECT * FROM SanPham WHERE TenSanPham LIKE '%$key%'";
    $result = DataProvider::ExecuteQuery($sql);
}
    while($row=mysqli_fetch_array($result))
    {
        ?>     
            <div >      
                <div class="card" style="height:340px; width:185px;margin-right:30px;margin-left:15px">
                    <img src="image/img/<?php echo $row["HinhURL"];?>" class="card-img-top">
                    <div class="card-body">
                        <h6 class="card-title"><?php echo $row["TenSanPham"];?></h6>
                        <p class="card-text">Giá: <?php echo $row["GiaSanPham"];?>đ</p>
                        <a href="index.php?a=4&id=<?php echo $row["MaSanPham"]; ?>" class="btn btn-primary stretched-link">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        <?php
    }
?>
</div>
</div>
