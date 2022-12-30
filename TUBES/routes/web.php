<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowroomtController;

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

Route::get('/', function () { //harusnya / bukan /home
    return view('Home');
});
Route::resource('showroom', ShowroomtController::class); //harusnya showroom bukan showrooms
