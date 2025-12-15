<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/sapa/{nama}', function ($nama) {
    return "Halo, $nama selamat datang di toko Online.";
});

Route::get('/kategori/{kategori}', function ($nama = 'semua') {
    return "Menampilkan Kategori: $nama";
});

Route::get('/produk/{id}', function ($id){
    return "Detail Produk #$id";
})->name('produk.detail');