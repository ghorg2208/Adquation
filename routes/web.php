<?php

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
    return view('adquation.welcome');
});

Route::get('/Acceuil', [\App\Http\Controllers\Viewscontroller::class, 'Acceuil']) -> name('Acceuil.show');
Route::get('/Acceuil/Formation', [\App\Http\Controllers\Viewscontroller::class, 'Formation']) -> name('Formation.show');
Route::get('/Acceuil/Conseil', [\App\Http\Controllers\Viewscontroller::class, 'Conseil']) -> name('Conseil.show');
Route::get('/Acceuil/Audit', [\App\Http\Controllers\Viewscontroller::class, 'Audit']) -> name('Audit.show');
Route::get('/Acceuil/Portail', [\App\Http\Controllers\Viewscontroller::class, 'Portail']) -> name('Portail.show');
Route::get('/Acceuil/Portail', [\App\Http\Controllers\Viewscontroller::class, 'Portail']) -> name('Portail.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
