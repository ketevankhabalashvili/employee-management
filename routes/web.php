<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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
})->name('home');


Route::prefix('employee-management')->group(function () {
    Route::get('', [EmployeeController::class, 'list'])->name('list');
    Route::get('show/{id}', [EmployeeController::class, 'show'])->name('show');
    Route::get('new/', [EmployeeController::class, 'new'])->name('new');
    Route::post('add/', [EmployeeController::class, 'add'])->name('add');
    Route::get('edit/{id}', [EmployeeController::class, 'edit'])->name('edit');
    Route::put('update/{id}', [EmployeeController::class, 'update'])->name('update');
    Route::post('hire/{id}', [EmployeeController::class, 'hire'])->name('hire');
    Route::delete('delete/{id}', [EmployeeController::class, 'delete'])->name('delete');
});
