<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;

//route admin
Route::get('/admin',[pageController::class,'index']);
Route::get('/admin/chart',[pageController::class,'chart']);
Route::get('/admin/table',[pageController::class,'table']);

Route::prefix('admin')->name('admin.')->controller(adminController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/chart','chart')->name('chart');
    Route::get('/table','table')->name('table');
});


