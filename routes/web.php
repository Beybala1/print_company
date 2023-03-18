<?php

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\FaqController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProjectController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\admin\AboutAdminController;
use App\Http\Controllers\admin\SliderAdminController;
use App\Http\Controllers\admin\ContactAdminController;
use App\Http\Controllers\admin\FaqAdminController;
use App\Http\Controllers\admin\MessageAdminController;
use App\Http\Controllers\admin\NewsAdminController;
use App\Http\Controllers\admin\ProjectAdminController;
use App\Http\Controllers\admin\ServiceAdminController;
use App\Http\Controllers\admin\ProductAdminController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileAdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
    Route::get('/',[HomeController::class, 'index'])->name('home');
    Route::get('/service',[ServiceController::class, 'index'])->name('service');
    Route::get('/project',[ProjectController::class, 'index'])->name('project');
    Route::get('/project/{slug}',[ProjectController::class, 'show'])->name('project.show');
    Route::get('/about',[AboutController::class, 'index'])->name('about');
    Route::get('/contact',[ContactController::class, 'index'])->name('contact');
    Route::post('/contact',[ContactController::class, 'store'])->name('message');
    Route::get('/faq',[FaqController::class, 'index'])->name('faq');
    Route::get('/product',[ProductController::class, 'index'])->name('product');
    Route::get('/product/{slug}',[ProductController::class, 'show'])->name('show');
    Route::get('/news/{slug}',[NewsController::class, 'show'])->name('news.show');
});

Route::middleware([/* 'isAdmin','auth' */])->prefix('admin')->group(function () {
    Route::resource('/slider', SliderAdminController::class)->names('slider');
    Route::resource('/service', ServiceAdminController::class)->names('service');
    Route::resource('/project', ProjectAdminController::class)->except('show')->names('project');
    Route::resource('/about', AboutAdminController::class)->names('about');
    Route::resource('/contact', ContactAdminController::class)->names('contact');
    Route::resource('/message', MessageAdminController::class)->names('message');
    Route::resource('/faq', FaqAdminController::class)->names('faq');
    Route::resource('/product', ProductAdminController::class)->names('product');
    Route::resource('/news', NewsAdminController::class)->except('show')->names('news');
    Route::get('/product/create/{id}', [ProductAdminController::class, 'createSubProduct'])->name('subProduct.create');
    Route::get('/profile', [ProfileAdminController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileAdminController::class, 'updateProfile'])->name('profile.update');
});

Auth::routes();
