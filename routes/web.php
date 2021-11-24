<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Backend\MemberController;
use App\Http\Controllers\Backend\LoanRequestController;
use App\Http\Controllers\Backend\NewsController;
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
    Route::get('/members/member-add',[MemberController::class,'memberList'])->name('admin.members.member-add');
    Route::get('/members/add-member',[MemberController::class,'memberCreate'])->name('admin.members.add-member');
    Route::get('/members/add',[MemberController::class,'memberCreate'])->name('admin.members.add');
    Route::post('/members/add',[MemberController::class,'add'])->name('admin.members.add');
    Route::get('/news pages/news',[NewsController::class,'news'])->name('admin.news.add');
    Route::post('/news pages/news',[NewsController::class,'news_store'])->name('admin.news.store');
    Route::get('/news pages/news details',[NewsController::class,'list'])->name('admin.news.list');
    Route::get('/loan/loan request',[LoanRequestController::class,'add'])->name('admin.loan.add');
    Route::post('/loan/loan request',[LoanRequestController::class,'loan_store'])->name('admin.loan.store');
    Route::get('/loan/loan status',[LoanRequestController::class,'list'])->name('admin.loan.list');


});
