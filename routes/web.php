<?php

use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tt');
});

Route::get('/z', function () {
    return view('test');
});

Route::group(['prefix' => 'x'], function () {
    Route::get('create', [CertificateController::class, 'create'])->name('x');
    Route::get('index', [CertificateController::class, 'index'])->name('xx');
    Route::post('store', [CertificateController::class, 'store'])->name('store');
});
