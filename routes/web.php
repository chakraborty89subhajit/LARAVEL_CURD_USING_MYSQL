<?php

use Illuminate\Support\Facades\Route;

use  App\Http\Controllers\CRUDModelController;

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
    return view('welcome');
});

Route::get('curd_show',[CRUDModelController::class,'show']);
Route::get('curd_create',[CRUDModelController::class,'create']);
Route::post('curd_store',[CRUDModelController::class,'store']);
Route::get('curd_delete/{id}',[CRUDModelController::class,'destroy']);
Route::get('curd_edit/{id}',[CRUDModelController::class,'edit']);
Route::post('curd_update/{id}',[CRUDModelController::class,'update'])->name('curd_update');