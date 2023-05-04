<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TouristAttractionController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('tourist_attractions', TouristAttractionController::class);
Route::get('/', [TouristAttractionController::class,'predict'])->name('predict.index');
Route::post('predict-process', [TouristAttractionController::class,'predictProcess'])->name('predict.process');
