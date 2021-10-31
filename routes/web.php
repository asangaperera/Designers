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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/postCompany', [App\Http\Controllers\companyController::class, 'addCompany'])->name('add.company');
Route::post('/postCompany', [App\Http\Controllers\companyController::class, 'saveCompany'])->name('save.company');
Route::get('/viewCompany', [App\Http\Controllers\companyController::class, 'view'])->name('view');
Route::get('/editCompany/{c_id}', [App\Http\Controllers\companyController::class, 'editCompany'])->name('edit.company');
Route::get('/deleteCompany/{C_id}', [App\Http\Controllers\companyController::class, 'deleteCompany'])->name('delete.company');
Route::post('/updateCompany', [App\Http\Controllers\companyController::class, 'updateCompany'])->name('update.company');
Route::get('/viewCompany/{c_id}', [App\Http\Controllers\companyController::class, 'viewCompany'])->name('viewCompany');

Route::get('/postEmployee', [App\Http\Controllers\employeeController::class, 'addEmployee'])->name('add.employee');
Route::post('/postEmployee', [App\Http\Controllers\employeeController::class, 'saveEmployee'])->name('save.employee');
Route::get('/viewEmployee', [App\Http\Controllers\employeeController::class, 'view'])->name('view');
Route::get('/editEmployee/{id}', [App\Http\Controllers\employeeController::class, 'editEmployee'])->name('edit.employee');
Route::get('/deleteEmployee/{id}', [App\Http\Controllers\employeeController::class, 'deleteEmployee'])->name('delete.employee');
Route::post('/updateEmployee', [App\Http\Controllers\employeeController::class, 'updateEmployee'])->name('update.employee');
Route::get('/viewEmployee/{id}', [App\Http\Controllers\employeeController::class, 'viewEmployee'])->name('viewEmployee');