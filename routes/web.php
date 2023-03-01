<?php

use App\Data\Nasabah;
use App\Data\Tabungan;
use Illuminate\Support\Facades\Route;

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
app()->singleton('nen', function(){
    return new App\Data\Tabungan;
});


Route::get('/', function () {
    return dd(app('nen'), app('nen'));
});
