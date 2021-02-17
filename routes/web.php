<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\LoanTypeController;
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

Route::group(['prefix' => 'loanType'], function () {


    Route::get('/index', [LoanTypeController::class, 'index',])->name('loantypeindex');
    Route::get('/add/loan', [LoanTypeController::class, 'addloan',])->name('add_loan');
    Route::post('/save/loan', [LoanTypeController::class, 'saveloan',])->name('save_loan');
    Route::get('/update/loan/{id}', [LoanTypeController::class, 'updateLoan',])->name('update_loan');
    // Route::post('/save/{id}', [LoanTypeController::class, 'updateformsave',])->name('update_formsave');
    // Route::get('/delete/{id}', [LoanTypeController::class, 'deletedata',])->name('delete_data');

});