<?php
namespace App\Http\Controllers;


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

use App\Http\Controllers\ResultController;
use App\Models\product;
use Illuminate\Support\Facades\Route;

Route::get('/frmInverted', [ResultController::class,'Inverted']);

Route::get('product/listar',[productController::class,'index'])->name('product.index');
