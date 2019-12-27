<div style="margin-left:5%">
<h3 style="color:#3567d7">Tìm theo thương hiệu</h3>
    <?php
        $sql="SELECT * FROM HangSanXuat WHERE BiXoa = 0 ";
        $result=DataProvider::ExecuteQuery($sql);
        while($row=mysqli_fetch_array($result))
        {
            ?>
            <div style="float:left;margin:5px 5px 5px 5px" >
                <a href="index.php?a=2&id=<?php echo $row["MaHangSanXuat"]; ?>">
                    <img src="image/img/<?php echo $row["LogoURL"]?>" height="60" width="130">
                </a>
            </div>
            <?php
        }
    ?>
    <div style="clear:both"></div>
</div>
