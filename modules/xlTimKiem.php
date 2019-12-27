<?php
session_start();
include "../lib/DataProvider.php";
if(isset($_GET["key"]))
{
    $key = $_GET["key"];
    $sql="SELECT * FROM SanPham WHERE TenSanPham LIKE '%$key%'";
    $result=DataProvider::ExecuteQuery($sql);
    $row=mysqli_fetch_array($result);
    if($row==null)
    {
        DataProvider::ChangeURL("../index.php?a=404&id=3");
    }
    else
    {
        DataProvider::ChangeURL("../index.php?a=7&key=$key");
    }
}
else if(isset($_GET["minPrice"]) && isset($_GET["maxPrice"]))
{
    $minPrice = $_GET["minPrice"];
    $maxPrice = $_GET["maxPrice"];
    $sql="SELECT * FROM SanPham WHERE GiaSanPham >= '$minPrice' AND GiaSanPham <= '$maxPrice'";
    $result=DataProvider::ExecuteQuery($sql);
    $row=mysqli_fetch_array($result);
    if($row==null)
    {
        DataProvider::ChangeURL("../index.php?a=404&id=3");
    }
    else
    {
        DataProvider::ChangeURL("../index.php?a=7&minPrice=$minPrice&maxPrice=$maxPrice");
    }
}
else
{
    DataProvider::ChangeURL("../index.php?a=404");
}
?> 
 19  pages/pError.php 
@@ -4,8 +4,23 @@
    {
        switch ($_GET["id"]){
            case 1:
                echo "Tên đăng  nhập và mật khẩu không tồn tại";
                echo "<span>Tên đăng  nhập và mật khẩu không tồn tại</span>";
            break;
            case 2:
                echo "<span>Không tìm thấy sản phẩm nào</span>";
            break;
            case 3:
                echo "<span>Bạn cần nhập đủ thông tin giá</span>";
            break;
            default: 
                echo "";
        break;
        }
    }
?> 
?>

<style>
    h1, span{
        color: white;
    }
</style> 