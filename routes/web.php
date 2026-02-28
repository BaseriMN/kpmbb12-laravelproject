<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; // Kena ada yang ni.. 

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/about', function(){
    return view('pages.about', [
        'nama'=>'Muhamad Baseri',
        'umur'=>39,
        'alamat'=>'Malaysia',
    ]);
});



Route::view('/contactus', 'pages.contact');

// Controller ProductController
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']); // memaparkan halaman form data
Route::post('/product' , [ProductController::class, 'store']); // untuk menyimpan data yang dihantar dari form