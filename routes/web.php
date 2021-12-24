<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\frontend\UserController as UController;
use App\Http\Controllers\frontend\ServiceController;
 use App\Http\Controllers\frontend\DepositController;
  use App\Http\Controllers\frontend\ReportController;
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
// Route::get('/', function(){
//     return  redirect()->route('admin.page');

// });

Route::group(['prefix'=>'admin-portal'],function(){
    //  Route::get('/', function () {
    //  return view('admin/layouts/home');
 //})->name('admin');
 Route::get('/login',[UserController ::class,'page'])->name('admin.page');
  Route::post('/login',[UserController ::class,'log'])->name('admin.log');

Route::group(['middleware'=>'auth'],function(){
Route::get('/logout',[UserController ::class,'logout'])->name('admin.logout');
Route::get('/',[DashboardController ::class,'dashboard'])->name('admin');






    Route::get('/image/mehadi.jpg',[UserController::class,'profile'])->name('admin.profile');
     Route::get('/image/mehadi.jpg/profile-edit',[UserController::class,'edit'])->name('admin.edit');







     Route::get('/members/member',[MemberController::class,'member_create'])->name('admin.members.add');
    Route::post('/members/member',[MemberController::class,'member_store'])->name('admin.members.store');
    Route::get('/members/member-list',[MemberController::class,'member_list'])->name('admin.members.list');
   Route::get('/members/member-list/details/{id}',[MemberController::class,'member_details'])->name('admin.members.details');
 Route::get('/members/member-list/delete/{id}',[MemberController::class,'member_delete'])->name('admin.members.delete');
  Route::get('/members/member-list/edit/{id}',[MemberController::class,'member_edit'])->name('admin.members.edit');
   Route::put('/members/member-list/update/{id}',[MemberController::class,'member_update'])->name('admin.members.update');
  Route::get('/members/member/ha',[MemberController::class,'mehadi']);




     Route::get('/components/branch',[BranchController::class,'branch'])->name('admin.branch');
    Route::get('/components/branch/add new branch',[BranchController::class,'branch_create'])->name('admin.branch.add');
    Route::post('/components/branch/add new branch',[BranchController::class,'branch_store'])->name('admin.branch.store');
 Route::get('/components/branch',[BranchController::class,'branch_list'])->name('admin.branch.list');




    Route::get('/components/loan',[New_loanController::class,'loan_list'])->name('admin.loan.new');
    Route::get('/components/loan/add new loan',[New_loanController::class,'loan_create'])->name('admin.new.create');
    Route::post('/components/loan/add new loan',[New_loanController::class,'loan_store'])->name('admin.new.store');





     Route::get('/news pages/news',[NewsController::class,'news_create'])->name('admin.news.add');
    Route::post('/news pages/news',[NewsController::class,'news_store'])->name('admin.news.store');
    Route::get('/news pages/news details',[NewsController::class,'news_list'])->name('admin.news.list');
     Route::get('/news pages/news details/delete/{id}',[NewsController::class,'news_delete'])->name('admin.news.delete');










    Route::get('/loan/loan request',[LoanRequestController::class,'loan_add'])->name('admin.loan.add');
    Route::post('/loan/loan request',[LoanRequestController::class,'loan_store'])->name('admin.loan.store');
    Route::get('/loan/loan status',[LoanRequestController::class,'loan_list'])->name('admin.loan.list');
    Route::get('/loan/loan status/delete/{id}',[LoanRequestController::class,'loan_delete'])->name('admin.loan.delete');


});






});

Route::get('/', function(){
     return  redirect()->route('user');

 });

Route::group(['prefix'=>'user-portal'],function(){
     Route::get('/', function () {
         return view('website.pages.home');
    })->name('user');
// Route::get('/',[UController::class,'home'])->name('user');

Route::post('/registration',[UController::class,'registration'])->name('user.registration');
Route::post('/login/post',[UController::class,'userLogin'])->name('user.do.login');
Route::get('/user/logout',[UController::class,'userLogout'])->name('user.logout');
Route::group(['middleware'=>'auth'],function(){
Route::get('/service',[ServiceController::class,'service'])->name('user.service');
Route::get('/service/deposit',[ServiceController::class,'deposit'])->name('user.deposit');
Route::post('/service',[DepositController::class,'store'])->name('deposit.store');
Route::get('/service/loan request',[ServiceController::class,'loan'])->name('user.loan');
 Route::get('/service/profile',[ServiceController::class,'profile'])->name('user.profile');
// Route::post('/service',[LoanRequestController::class,'loan_store'])->name('user.loan.store');
Route::get('/report',[ReportController::class,'report'])->name('user.report');
Route::get('/service/loan request',[New_loanController::class,'loan_request'])->name('user.loan');

});


});
