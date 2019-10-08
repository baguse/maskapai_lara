<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/akun/reset', function () {
    return view('reset');
});

Route::get('/akun/register', function () {
    return view('register');
});

Route::post('/{type}/login/proses', 'C_akun@login');
Route::post('/{type}/register/proses', 'C_akun@register');
Route::get('/kios/c/{username}/{token}','C_akun@konfirmasi_kios');
Route::get('/coba', 'Coba@get');

Route::get('/cobainsert', 'Coba@insert');

Route::get('geo/getProvinces', 'geoCity@Provinces');
Route::get('geo/getCities/{provId}', 'geoCity@Cities');

Route::get('mail', 'C_akun@mailer');

Route::get('info', 'C_akun@test');