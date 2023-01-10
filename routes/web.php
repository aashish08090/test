<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

    $y = 1;
    $fn1 = fn($x) => $x+$y;
    echo $fn1(10);

    //echo phpinfo();
    //return view('welcome');
});

Route::get('update', [Controller::class, 'update']);
