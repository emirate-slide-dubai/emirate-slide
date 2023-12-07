<?php

use App\Http\Controllers\Web\Aboutus\AboutusController;
use App\Http\Controllers\Web\Blog\BlogController;
use App\Http\Controllers\Web\Contact\ContactController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\Portfolio\PortfolioController;
use App\Http\Controllers\Web\Service\ServiceController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index']);
Route::get('/contact-us',[ContactController::class,'index']);
Route::get('/about-us',[AboutusController::class,'index']);
Route::get('/services',[ServiceController::class,'index']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/blogs',[BlogController::class,'index']);

Route::get('/let-us-introduce-you-the-best-apps',function(){
    return view('web.blog.blog-detail');
});


