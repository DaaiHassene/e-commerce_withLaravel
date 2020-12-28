<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::group(['prefix' => 'admin'], function()
{
    Voyager::routes();
    Route::get('admin', 'HomeController@admin')->middleware('admin');

});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{cat}/products', [App\Http\Controllers\ProductController::class, 'categorie_product'])->name('catgorie');
//Route::resource('products', ProductController::class);

Route::get('products', [App\Http\Controllers\ProductController::class, 'index']);

Route::post('products/create', [App\Http\Controllers\ProductController::class, 'store']);

Route::get('products/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
 
Route::delete('products/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);
 
Route::get('products/{id}',['as'=>'product.view','uses'=>'ProductController@view']);

Route::get('products/{id}', [App\Http\Controllers\ProductController::class, 'show']);
