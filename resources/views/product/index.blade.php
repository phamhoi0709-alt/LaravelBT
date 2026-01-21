<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <h1>Danh sách sản phẩm mẫu</h1>
    <a href="{{ route('product.add') }}" style="padding: 10px; background: green; color: white; text-decoration: none;">
        Thêm mới sản phẩm
    </a>

    <table border="1" style="margin-top: 20px; width: 50%;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>iPhone 15</td>
                <td>20.000.000đ</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Samsung S24</td>
                <td>18.000.000đ</td>
            </tr>
        </tbody>
    </table>
</body>
</html>