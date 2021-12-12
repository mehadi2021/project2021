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
    //  Route::get('/', function () {
    //  return view('admin/layouts/home');
 //})->name('admin');
Route::get('/',[AdminProfileController::class,'dashboard'])->name('admin');






    Route::get('/image/mehadi.jpg',[AdminProfileController::class,'profile'])->name('admin.profile');
     Route::get('/image/mehadi.jpg/profile-edit',[AdminProfileController::class,'edit'])->name('admin.edit');







     Route::get('/members/member',[MemberController::class,'member_create'])->name('admin.members.add');
    Route::post('/members/member',[MemberController::class,'member_store'])->name('admin.members.store');
    Route::get('/members/member-list',[MemberController::class,'member_list'])->name('admin.members.list');
   Route::get('/members/member-list/details/{id}',[MemberController::class,'member_details'])->name('admin.members.details');
 Route::get('/members/member-list/delete/{id}',[MemberController::class,'member_delete'])->name('admin.members.delete');



    Route::get('/news pages/news',[NewsController::class,'news_create'])->name('admin.news.add');
    Route::post('/news pages/news',[NewsController::class,'news_store'])->name('admin.news.store');
    Route::get('/news pages/news details',[NewsController::class,'news_list'])->name('admin.news.list');



    Route::get('/loan/loan request',[LoanRequestController::class,'loan_add'])->name('admin.loan.add');
    Route::post('/loan/loan request',[LoanRequestController::class,'loan_store'])->name('admin.loan.store');
    Route::get('/loan/loan status',[LoanRequestController::class,'loan_list'])->name('admin.loan.list');


});








Route::get('/', function(){
    return  redirect()->route('user');

});

Route::group(['prefix'=>'user-portal'],function(){
    Route::get('/', function () {
        return view('website.user');
    })->name('user');
});
