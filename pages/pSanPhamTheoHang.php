<div class="danhsachsanpham">   
<h2>Sản phẩm theo hãng</h2>
<div class="row">    
<?php 
    if(isset($_GET["id"]))
    {
        $id=$_GET["id"];
    }
    else
    {
        DataProvider::ChangeURL("index.php?a=404");
    }
    $sql="SELECT * FROM SanPham WHERE BiXoa = 0 AND MaHangSanXuat=$id";
    $result=DataProvider::ExecuteQuery($sql);
    while($row=mysqli_fetch_array($result))
    {
        ?>     
            <div class="col-2">      
                <div class="card" style="height:320px">
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
