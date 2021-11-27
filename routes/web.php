<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\frontend\UserController;
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
        return view('admin/layouts/home');
    })->name('admin');
     Route::get('/members/member',[MemberController::class,'memberCreate'])->name('admin.members.add');
    Route::post('/members/member',[MemberController::class,'member_store'])->name('admin.members.store');
    Route::get('/members/member-list',[MemberController::class,'memberList'])->name('admin.members.list');
   Route::get('/members/member-list/member-details',[MemberController::class,'details'])->name('admin.members.details');



    Route::get('/news pages/news',[NewsController::class,'news'])->name('admin.news.add');
    Route::post('/news pages/news',[NewsController::class,'news_store'])->name('admin.news.store');
    Route::get('/news pages/news details',[NewsController::class,'news_list'])->name('admin.news.list');



    Route::get('/loan/loan request',[LoanRequestController::class,'add'])->name('admin.loan.add');
    Route::post('/loan/loan request',[LoanRequestController::class,'loan_store'])->name('admin.loan.store');
    Route::get('/loan/loan status',[LoanRequestController::class,'list'])->name('admin.loan.list');


});








Route::get('/', function(){
    return  redirect()->route('user');

});

Route::group(['prefix'=>'user-portal'],function(){
    Route::get('/', function () {
        return view('user.user');
    })->name('user');
});
