<?php

use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\MenuController as AdminMenuController;
use App\Http\Controllers\AdminPanel\MenuController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
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



Route::get('/home2', function () {
    return view('welcome');
});

Route::redirect('/anasayfa', '/home');

Route::get('/', function () {
    return view('home.index');
});



//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+','name'=>'[A-Za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//*********************ADMİNPANEL*****************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminPanelHomeController::class, 'index'])->name('index');

    //*****************ADMİN MENU ROUTES */
    Route::prefix('/menu')->name('menu.')->controller(AdminMenuController::class)->group(function () {
        Route::get('/' , 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/show/{id}', 'show')->name('show');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
});
