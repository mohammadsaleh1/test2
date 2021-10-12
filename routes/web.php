<?php

use App\Http\Controllers\InvoiceController;
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

Route::get('addInvoice',[InvoiceController::class,'create']);
Route::post('store',[InvoiceController::class,'store'])->name('store');

Route::get('/', function () {
    return view('welcome');
});
