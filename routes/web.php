<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use App\Http\Controllers\adminController;

// Route::get('/', [PageController::class, 'index']);
// // Route::get('/', [PageController::class, 'welcome']);

// Route::get('/hello',function(){
//     return 'Hello World';
// });
// Route::get('/data',function (Request $request){
//     //  dd($request->all());
//      $program = ['html','css','js'];
//      dd($program);
// });

Route::get('/',[pageController::class,'index'])->name('welcome');
Route::get('/about',[pageController::class,'about'])->name('about');
Route::get('/contact',[pageController::class,'contact'])->name('contact');

//route admin
// include('admin-route.php');
// Route::get('/admin',[pageController::class,'index']);
// Route::get('/admin/chart',[pageController::class,'chart']);
// Route::get('/admin/table',[pageController::class,'table']);

Route::prefix('admin')->name('admin.')->controller(adminController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/chart','chart')->name('chart');
    Route::get('/table','table')->name('table');
});


