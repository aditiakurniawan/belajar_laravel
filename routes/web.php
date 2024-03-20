<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use App\Http\Controllers\adminController;
use App\Http\Controllers\StudentController;

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

// Route::prefix('student')->name('student.')->controller(StudentController::class)->group(function(){
//     Route::get('/','index')->name('index');
//     Route::get('/create','create')->name('create');
//     Route::post('/','store')->name('store');
//     Route::get('/{student}/edit','edit')->name('edit');
//     Route::put('/{student}/update','update')->name('update');
//     Route::delete('/{student}/destroy','destroy')->name('destroy');
// });

Route::resource('/students', StudentController::class)->except('show');





