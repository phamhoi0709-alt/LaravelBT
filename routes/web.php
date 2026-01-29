<?php

use Illuminate\Support\Facades\Route;

// 1. Trả về view home
Route::get('/', function () {
    return view('home');
})->name('home');

// 2. Gom nhóm "/product"
Route::prefix('product')->group(function () {
    
    // Trả về view product.index
    Route::get('/', function () {
        return view('product.index');
    })->name('product.index');

    // Trả về view product.add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // Route với {id} kiểu chuỗi, giá trị mặc định 123
    Route::get('/{id?}', function ($id = '123') {
        return "Chi tiết sản phẩm với ID: " . $id;
    })->where('id', '[A-Za-z0-9]+'); 
});

// 3. Thông tin sinh viên với giá trị mặc định
Route::get('/sinhvien/{name?}/{mssv?}', function ($name = "Pham Duc Hoi", $mssv = "0170467") {
    return "Thông tin sinh viên: " . $name . " - MSSV: " . $mssv;
})->name('sinhvien.info');

// 4. Bàn cờ vua kích thước n*n
Route::get('/banco/{n}', function ($n) {
    return view('banco', ['n' => $n]);
})->name('banco.show');

// 5. Xử lý lỗi 404 (Fallback) khi không tìm thấy route
Route::fallback(function () {
    return view('error.404');
});
