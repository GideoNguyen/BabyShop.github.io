<div style="width=80%;">
    <div class="list-group" id="danhmuc" style="width: 17%;float:left;height=100%">
        <a href="#" class="list-group-item list-group-item-action" style="background: blue;">
            <img src="image/listbutton.png" height="16" width="16">Loại sản Phẩm
        </a>
        <?php 
            $sql ="SELECT * FROM LoaiSanPham WHERE BiXoa=0";
            $result=DataProvider::ExecuteQuery($sql);
            while($row=mysqli_fetch_array($result))
            {
                ?>
        <a href="index.php?a=3&id=<?php echo $row["MaLoaiSanPham"];?>" class="list-group-item list-group-item-action">
                    <img src="image/<?php echo $row["HinhURL"]?>"><?php echo $row["TenLoaiSanPham"]; ?>
                </a>
        <?php
            }
            ?>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" style="width:60%;float:left;height:107%">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/pic1.jpg" width="107%">
            </div>
            <div class="carousel-item">
                <img src="image/pic2.jpg"width="107%">
            </div>
            <div class="carousel-item">
                <img src="image/pic3.jpg"width="107%">
            </div>
            <div class="carousel-item">
                <img src="image/pic4.jpg"width="107%">
            </div>
        </div>
    </div>
    <div style="width:14%;float:left;">
        <img src="image/pic5.jpg" width="107%">
        <img src="image/pic6.png" width="107%">
    </div>
    <div style="clear:both"></div>
</div>