<?php 
    if(isset($_GET["id"]))
    {
        switch ($_GET["id"]){
            case 1: 
                ?><p style="color:red;margin-left:5%"><?php echo "Tên đăng nhập và mật khẩu không tồn tại"; ?></p>
            <?php
            break;
            case 2:
                ?><p><?php echo "Tên đăng nhập đã tồn tại";?></p>
            <?php
            break;
        }
    }
?>