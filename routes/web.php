<?php

use App\Http\Controllers\InvoiceController;
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

Route::get('/', [InvoiceController::class, 'index']);
Route::get('/a', [InvoiceController::class, 'index']);
Route::get('/b', [InvoiceController::class, 'index']);
Route::get('/c', [InvoiceController::class, 'index']);
Route::get('/d', [InvoiceController::class, 'index']);
