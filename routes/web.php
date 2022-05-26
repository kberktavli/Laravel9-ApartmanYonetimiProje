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
Route::get('/admin',[AdminPanelHomeController::class,'index'])->name('admin');

//*****************ADMİN MENU ROUTES */
Route::get('/admin/menu',[AdminMenuController::class,'index'])->name('admin_menu');
Route::get('/admin/menu/create',[AdminMenuController::class,'create'])->name('admin_menu_create');
Route::post('/admin/menu/store',[AdminMenuController::class,'store'])->name('admin_menu_store');
Route::get('/admin/menu/edit/{id}',[AdminMenuController::class,'edit'])->name('admin_menu_edit');
Route::post('/admin/menu/update/{id}',[AdminMenuController::class,'update'])->name('admin_menu_update');
Route::get('/admin/menu/show/{id}',[AdminMenuController::class,'show'])->name('admin_menu_show');
Route::get('/admin/menu/destroy/{id}',[AdminMenuController::class,'destroy'])->name('admin_menu_destroy');
