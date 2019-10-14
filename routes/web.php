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

Route::post('/{type}/login/proses', 'c_Akun@login');
Route::post('/{type}/register/proses', 'c_Akun@register');
Route::get('/kios/c/{username}/{token}','c_Akun@konfirmasi_kios');

Route::get('/coba', 'Coba@get');

Route::get('/cobainsert', 'Coba@insert');

Route::get('geo/getProvinces', 'geoCity@Provinces');
Route::get('geo/getCities/{provId}', 'geoCity@Cities');

Route::get('mail', 'c_Akun@mailer');

Route::get('info', 'c_Akun@test');

Route::get('dashboard', 'c_Dashboard@index');
Route::get('logout', 'c_Akun@logout');