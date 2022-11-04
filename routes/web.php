<?php

use App\Http\Controllers\CreateCatalogsControllers;
use App\Http\Controllers\CreateManufacturersControllers;
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






Route::get('catalogs/', [CreateCatalogsControllers::class, 'index']);
Route::get('manufacturers/', [CreateManufacturersControllers::class, 'index']);


Route::delete('catalogs/delete/{id}/', [CreateCatalogsControllers::class, 'delete'])->where('id', '[0-9]+');
Route::get('catalogs/edit/{id}/', [CreateCatalogsControllers::class, 'edit'])->where('id', '[0-9]+');
Route::patch('catalogs/update/{id}', [CreateCatalogsControllers::class, 'update'])->where('id', '[0-9]+');

Route::delete('manufacturers/delete/{id}/', [CreateManufacturersControllers::class, 'delete'])->where('id', '[0-9]+');
Route::get('manufacturers/edit/{id}/', [CreateManufacturersControllers::class, 'edit'])->where('id', '[0-9]+');
Route::patch('manufacturers/update/{id}', [CreateManufacturersControllers::class, 'update'])->where('id', '[0-9]+');
