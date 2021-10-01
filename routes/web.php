<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Document\DocumentController;
use App\Http\Controllers\Official\OfficialController;
use App\Http\Controllers\Record\RecordController;
use App\Http\Controllers\Resident\ResidentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::get('/resident', [ResidentController::class,'index'])->name('resident');

Route::get('/document', [DocumentController::class,'index'])->name('document');

Route::get('/record', [RecordController::class,'index'])->name('record');

Route::get('/official', [OfficialController::class,'index'])->name('official');
