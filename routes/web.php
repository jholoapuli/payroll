<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
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


Route::group(['prefix' => 'department'], function () {


    Route::get('/index', [DepartmentController::class, 'index',])->name('indexpage');
    Route::get('/add/department', [DepartmentController::class, 'createform',])->name('deptform');
    Route::post('/save', [DepartmentController::class, 'saveform',])->name('saveform');
    Route::get('/update/{id}', [DepartmentController::class, 'updateform',])->name('update_form');
    Route::post('/save/{id}', [DepartmentController::class, 'updateformsave',])->name('update_formsave');
    Route::get('/delete/{id}', [DepartmentController::class, 'deletedata',])->name('delete_data');

});