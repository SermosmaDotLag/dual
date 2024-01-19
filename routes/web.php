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
use App\Http\Controllers\PanController;
use App\Http\Controllers\CacheController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\ConsumeController;

Route::get('show-bread', [PanController::class, 'showBread'])->name('show.bread');
Route::get('error', [PanController::class, 'showError'])->name('error');
Route::get('add-bread', [PanController::class, 'showAddForm'])->name('add.bread')->middleware('test');
Route::post('save-bread', [PanController::class, 'saveBread'])->name('save.bread');
Route::delete('delete-bread/{id}', [PanController::class, 'deleteBread'])->name('delete.bread');
Route::get('edit-bread/{id}', [PanController::class, 'showEditForm'])->name('edit.bread');
Route::put('update-bread/{id}', [PanController::class, 'updateBread'])->name('update.bread');
Route::get('/index', [PanController::class, 'index'])->name('index.index'); //preguntar
//Route::get('/', [PanController::class, 'index'])->name('index.index'); 

Route::get('cache', [CacheController::class, 'show'])->name('show.cache');
Route::get('test', [CacheController::class, 'test'])->name('test.cache');

Route::get('download', [DownloadController::class, 'downloadDog'])->name('download.dog');


Route::get('consume', [ConsumeController::class, 'showConsume'])->name('show.consume');
Route::get('/chartData', [ConsumeController::class, 'chartData']);

Route::get('/', function () {
    return view('index');
});


