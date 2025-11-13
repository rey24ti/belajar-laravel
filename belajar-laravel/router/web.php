<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;

route::get('/mahasiswa', function () {
    return 'Hallo cina';
});

route::get('/mahasiswa/{param1}', [MahasiswaController::class, 'show']);

route::get('/about', function () {
    return view ('halaman-about');
});
route::get('/pcr ', function () {
    return 'selamat datang di wepsite kampus PCR';
});

route::get('/mahasiswa ', function () {
    return 'Hallo Mahasiswa';
});

route::get('/nama/{param1}', function ($param1) {
    return 'nama saya: '.$param1;
});

route::get('/nim/{param1}', function ($param1) {
    return 'nim saya: '.$param1;
});


route::get('/home',[homecontroller::class, 'index']);
