<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;
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
Route::get('admin',[AdminController::class,'index']);
Route::post('admin/auth',[AdminController::class,'auth'])->name('admin.auth');

Route::group(['middleware'=>'admin_auth'],function(){
    Route::get('admin/dashboard',[AdminController::class,'dashboard']);
    route::get('admin/category',[CategoryController::class,'index']);
    route::get('admin/manage_category',[CategoryController::class,'manage_category']);
    route::get('admin/updatepassword',[AdminController::class,'updatepassword']);
    Route::get('admin/logout', function () {
          session()->forget('ADMIN_LOGIN');
          session()->forget('ADMIN_ID');
          session()->flash('error','Logout successfully');
          return redirect('admin');
});
});




//Test............................

Route::post('test',[TestController::class,'test']);