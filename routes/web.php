<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home; 

// Login
Route::get('/login','App\Http\Controllers\home@login');
Route::post('/aksi_login','App\Http\Controllers\home@aksi_login');
Route::post('/logincheck', 'App\Http\Controllers\home@login_check');
Route::get('/logout', 'App\Http\Controllers\home@logout');

// CRUD
Route::get('/dok','App\Http\Controllers\home@dok');
Route::get('/tambah', 'App\Http\Controllers\home@tambah');   
Route::post('/simpan', 'App\Http\Controllers\home@simpan');  
Route::get('/edit/{id}','App\Http\Controllers\home@edit');   
Route::post('/update/{id}','App\Http\Controllers\home@update');
Route::get('/hapus/{id}','App\Http\Controllers\home@hapus');
Route::get('/users', 'App\Http\Controllers\home@users');
Route::get('/employeeData', 'App\Http\Controllers\home@employeeData');
Route::get('/addEmployee', 'App\Http\Controllers\home@addEmployee');
Route::post('/saveEmployee', 'App\Http\Controllers\home@saveEmployee');
Route::get('/delEmployee/{employeeid}', 'App\Http\Controllers\home@delEmployee');
Route::get('/EmployEdit/{employeeid}', 'App\Http\Controllers\home@EmployEdit');
Route::post('/EmployUpdate/{employeeid}', 'App\Http\Controllers\home@EmployUpdate');
Route::get('/resetPassword/{userid}', 'App\Http\Controllers\home@resetPassword');
Route::post('/reservations','App\Http\Controllers\home@store')->name('reservations.store');

// Transactions
Route::get('/transactions', 'App\Http\Controllers\Home@indext')->name('transactions.index');
Route::post('/transactions', 'App\Http\Controllers\Home@storet')->name('transactions.store');
Route::get('/transactions/export/pdf', 'App\Http\Controllers\Home@exportPdf')->name('transactions.exportPdf');
Route::get('/transactions/export/excel', 'App\Http\Controllers\Home@exportExcel')->name('transactions.exportExcel');
Route::delete('/transactions/clear',  'App\Http\Controllers\Home@clearTransactions')->name('transactions.clear');
Route::delete('/transactions/{id}',  'App\Http\Controllers\Home@destroyTransaction')->name('transactions.destroy');
Route::get('/transactions/filter', 'App\Http\Controllers\Home@filterTransactions')->name('transactions.filter');

// Settings
Route::get('/settings', 'App\Http\Controllers\home@settings');
Route::post('/settings/update', 'App\Http\Controllers\home@updateSettings');


// Register
Route::get('/register', 'App\Http\Controllers\home@register');
Route::post('/registersave','App\Http\Controllers\home@register_save');

// Extras
Route::get('/kli','App\Http\Controllers\home@kli');
Route::get('/report','App\Http\Controllers\home@report');

// med
Route::get('/yao','App\Http\Controllers\home@yao');
Route::post('/save-order', 'App\Http\Controllers\home@storem')->name('save.order');
Route::get('/medtransactions', 'App\Http\Controllers\home@medtransactions');
Route::delete('/clearMedTransactions', 'App\Http\Controllers\home@clearMedTransactions');
Route::get('/exportMedPdf', 'App\Http\Controllers\home@exportMedPdf');
Route::get('/exportMedExcel', 'App\Http\Controllers\home@exportMedExcel');


// /
Route::get('/','App\Http\Controllers\home@wow');