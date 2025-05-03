<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('trangchu');
});
Route::get('chucnang', function () {
    return view('gioithieu.chucnang');
});
Route::get('sumenh', function () {
    return view('gioithieu.sumenh');
});
Route::get('doi-ngu', function () {
    return view('gioithieu.doi-ngu');
});
Route::get('phucvu', function () {
    return view('phucvu');
});
Route::get('dichvu', function () {
    return view('dichvu');
});
Route::get('tin-tuc', function () {
    return view('tin-tuc');
});
Route::get('lien-he', function () {
    return view('lien-he');
});
Route::get('hdsd', function () {
    return view('hdsd');
});
