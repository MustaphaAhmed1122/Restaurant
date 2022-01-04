<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
Route::group(['middleware'=>'web'],function () {
Route::get('/',[HomeController::class,"index"]);
Route::get('/redirects',[HomeController::class,"redirects"]);
Route::get('/deleteusers/{id}',[AdminController::class,'deleteusers']);
Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu']);
Route::get('/updateview/{id}',[AdminController::class,'updateview']);
Route::post('/update/{id}',[AdminController::class,'update']);
Route::post('/reservation',[AdminController::class,'reservation']);
Route::get('/viewcheef',[AdminController::class,'viewcheef']);
Route::post('/uploadcheef',[AdminController::class,'uploadcheef']);
Route::get('/vieweservation',[AdminController::class,'vieweservation']);
Route::get('/updatechef/{id}',[AdminController::class,'updatechef']);
Route::get('/deletechef/{id}',[AdminController::class,'deletechef']);
Route::post('/updatefoodchef/{id}',[AdminController::class,'updatefoodchef']);
Route::get('/foodmenu',[AdminController::class,'foodmenu']);
Route::post('/uploadfood',[AdminController::class,'upload']);
Route::get('/users',[AdminController::class,'user']);
Route::post('/addcart/{id}',[HomeController::class,'addcart']);
Route::post('/orderconfirm',[HomeController::class,'orderconfirm']);
Route::get('/orders',[AdminController::class,'orders']);
    Route::get('/search',[AdminController::class,'search']);

Route::get('/showcart/{id}',[HomeController::class,'showcart']);
Route::get('/removefood/{id}',[HomeController::class,'removefood']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
});
