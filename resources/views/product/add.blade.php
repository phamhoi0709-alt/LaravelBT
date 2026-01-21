<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>
    <h1>Form thêm mới sản phẩm</h1>
    <form>
        <label>Tên sản phẩm:</label><br>
        <input type="text" name="name"><br><br>
        
        <label>Giá:</label><br>
        <input type="number" name="price"><br><br>
        
        <button type="submit">Lưu sản phẩm</button>
    </form>
    <br>
    <a href="{{ route('product.index') }}">Quay lại danh sách</a>
</body>
</html>