<form action="" method="POST" role="form">
    <Legend>Tìm kiếm theo tên</Legend>
<form action="modules/xlTimKiem.php" method="GET" role="form">
    <div class="form-group">
        <input type="text" class="form-control" id="" placeholder="Input field">
        <input type="text" class="form-control" id="" placeholder="Nhập tên sản phẩm" name="key">
    </div>
    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    <button type="submit" class="btn btn-primary">Tìm kiếm theo tên</button>
</form>
<form action="" method="POST" role="form">
    <legend>Tìm kiếm theo giá</legend>
<hr>
<form action="modules/xlTimKiem.php" method="GET" role="form">
    <div class="form-group">
        <label for="">Min</label>
        <input type="number" class="form-control" id="" placeholder="Input field">
        
        <label for="">Max</label>
        <input type="number" class="form-control" id="" placeholder="Input field">
        <input type="number" class="form-control" id="" placeholder="Nhập giá thấp nhất" name="minPrice">
        <input type="number" class="form-control" id="" placeholder="Nhập giá cao nhất" style="margin-top: 5px" name="maxPrice">
    </div>
    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
    <button type="submit" class="btn btn-primary">Tìm kiếm theo giá</button>
</form>