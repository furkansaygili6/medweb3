<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\yonlendirme;
use App\Http\Controllers\Backend\users;
use App\Http\Controllers\Backend\ürün;

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
    return view('frontend/homepage');
});
Route::get("/hakkimizda",[yonlendirme::class,"hakkimizda"])->name("hakkimizda");
Route::get("/iletisim",[yonlendirme::class,"iletisim"])->name("iletisim");
Route::get("/giris",[yonlendirme::class,"giris"])->name("giris");
Route::get("/kayit",[yonlendirme::class,"kayit"])->name("kayit");
Route::get("/cast",[yonlendirme::class,"cast"])->name("cast");
Route::get("/homepage",[yonlendirme::class,"homepage"])->name("homepage");
Route::post("/user",[users::class,"index"])->name("index");
Route::post("/store/{users}",[users::class,"store"])->name("store");
Route::get("/user/{user_id}",[users::class,"destroy"])->name("destroy");
Route::get("/show",[users::class,"show"])->name("show");
Route::get("/update",[users::class,"update"])->name("update");
Route::post("user/{user_id}/edit",[users::class,"edit"])->name("edit");;
Route::get("/create",[users::class,"create"])->name("create");
Route::resource("/user",users::class);




