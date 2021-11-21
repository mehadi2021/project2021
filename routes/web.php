<?php
namespace  App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend;
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
Route::get('/', function(){
    return  redirect()->route('admin');

});

Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');
    Route::get('/members/order-list',[OrderController::class,'orderList'])->name('admin.members.order-list');
    Route::get('/members/product-list',[ProductController::class,'productList'])->name('admin.members.product-list');
     Route::get('/members/add-member',[MemberController::class,'memberCreate'])->name('admin.members.add-member');
     Route::post('/members/store',[MemberController::class,'memberStore'])->name('admin.members.store');

});
