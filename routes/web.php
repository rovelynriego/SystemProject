<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//Final Activity
 //master
/*

Route::get('/index',[HomeController::class,'index']);

Route::get('/generic',[HomeController::class,'generic']);

Route::get('/elements',[HomeController::class,'elements']);
*/





//login

Route::get('/loginpage',[HomeController::class,'loginpage']);
Route::post('/loginpage',[HomeController::class,'insertData']);
//Register
Route::get('/register',[HomeController::class,'register']);
//Minigrocery

Route::get('/accessories',[HomeController::class,'accessories']);
Route::post('/accessories',[HomeController::class,'insertb']);

Route::get('/bfast',[HomeController::class,'bfast']);
Route::post('/bfast',[HomeController::class,'insertbf']);


Route::get('/biscuits',[HomeController::class,'biscuits']);
Route::get('/cannedf',[HomeController::class,'cannedf']);
Route::get('/chocolates',[HomeController::class,'chocolates']);
Route::get('/dairyandmilk',[HomeController::class,'dairyandmilk']);
Route::get('/frozen',[HomeController::class,'frozen']);
Route::get('/juices',[HomeController::class,'juices']);
Route::get('/junkfoods',[HomeController::class,'junkfoods']);
Route::get('/minigrocery',[HomeController::class,'minigrocery']);
Route::get('/schoolsupplies',[HomeController::class,'schoolsupplies']);
Route::get('/soap',[HomeController::class,'soap']);
Route::get('/softdrinks',[HomeController::class,'softdrinks']);

//Account,Update,Inventory
Route::get('/account',[HomeController::class,'account']);
Route::get('/update',[HomeController::class,'update']);
Route::get('/inventory',[HomeController::class,'inventory']);

