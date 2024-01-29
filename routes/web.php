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
use App\Http\Controllers\PokeApiController;


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


Route::get('/datatable-consume', [ConsumeController::class, 'showDataTableConsume'])->name('datatable.consume');
Route::get('/chart-consume', [ConsumeController::class, 'showChartConsume'])->name('chart.consume');
Route::get('/chartData', [ConsumeController::class, 'chartData']);

Route::get('/', function () {
    return view('index');
});

Route::get('/poke-view', [PokeApiController::class, 'show'])->name('poke.view');
Route::get('/testPokeApi', [PokeApiController::class, 'insertData'])->name('api');

// Route::get('/testPokeApi', function () {
//     $baseUrl = 'https://pokeapi.co/api/v2/pokemon/?offset=0&limit=20';
//     $continue = true;

//     while ($continue) {
//         $curl = curl_init();

//         curl_setopt_array($curl, [
//             CURLOPT_URL => $baseUrl,
//             CURLOPT_RETURNTRANSFER => true,
//             CURLOPT_MAXREDIRS => 10,
//             CURLOPT_TIMEOUT => 10,
//             CURLOPT_FOLLOWLOCATION => true,
//             CURLOPT_FAILONERROR => true,
//         ]);

//         $curlResponse['message'] = curl_exec($curl);
//         $curlResponse['status'] = curl_getinfo($curl);
//         $curlResponse['errors'] = curl_error($curl);
//         curl_close($curl);

//         $apiData = json_decode($curlResponse['message'], true);

//         if (isset($apiData['results']) && is_array($apiData['results'])) {
//             foreach ($apiData['results'] as $result) {
//                 \App\Models\ApiModel::create([
//                     'pokeName' => $result['name'],
//                     'url' => $result['url'],
//                 ]);
//             }
//         }

//         if (isset($apiData['next']) && $apiData['next']) {
//             $baseUrl = $apiData['next'];
//         } else {
//             $continue = false;
//         }
//     }

//     echo 'Datos guardados exitosamente';
// })->name('api');