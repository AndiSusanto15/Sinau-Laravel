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
    return view('welcome');
});

Route::get('hello', function(){
    return "hello Andi";
});

Route::get('/product/display', 'ProductController@showAll');
Route::get('/product/save', 'ProductController@saveNew');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product/{categori_id}/{id}', 'ProductController@detail');

Route::get('/pintu-masuk', function(){
    return "Selamat datang di pintu masuk!";
});

Route::get('test', 'TestController@pintuMasuk');
Route::get('test/{masuk?}', 'TestController@pintuMasuk'); // yang ini namanya optional route param tinggal tambahin ?

Route::view('/juara', 'juara');

Route::get('tampil-semua-produk', 'ProductController@showAllProduct');

Route::resource('buku', 'BukuController');

Route::get('redirect', 'BukuController@redirect');
Route::get('redirect-lain', 'BukuController@redirectLain');

Route::group(["prefix" => "latihan"], function() {
    Route::get("/kategori/all", "CategoryController@index");
    Route::get("/kategori/search", "CategoryController@search");
    Route::get("/kategori/{id}/delete", "CategoryController@delete");
    Route::get("/kategori/{id}/restore", "CategoryController@restore");
    Route::get("/kategori/{id}/permanent-delete", "CategoryController@permanentDelete");
});