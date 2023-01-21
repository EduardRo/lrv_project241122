<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ServiceController;

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
// Customers --
Route::get('/customers', [CustomerController::class, 'index']
);
Route::get('/customers/create', [CustomerController::class, 'create']
);
Route::post('/customers/store', 'App\Http\Controllers\CustomerController@store')->name('customers.store');
// Services --
// Route::post('tasks', 'TaskController@store');
Route::get('/services',[ServiceController::class, 'index']);

// Invoices ---
Route::get('/invoices', [InvoiceController::class, 'index']);
