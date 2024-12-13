<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NgdSinhVienController;


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
#SinhVien-model
Route::get('/ngd-sinhviens',[NgdSinhVienController::class,'ngdList'])->name('ngdSinhVien.ngdList');
Route::get('/ngd-sinhviens/create',[NgdSinhVienController::class,'ngdcreate'])->name('ngdSinhVien.ngdCreate');
Route::post('/ngd-sinhviens/create',[NgdSinhVienController::class,'ngdcreateSubmit'])->name('ngdSinhVien.ngdCreateSubmit');