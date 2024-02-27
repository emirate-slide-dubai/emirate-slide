<?php

use App\Http\Controllers\Admin\Banner\BannerController;
use App\Http\Controllers\Admin\Contact\ContactController as AdminContactController;
use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\Aboutus\AboutusController;
use App\Http\Controllers\Web\Blog\BlogController;
use App\Http\Controllers\Web\Category\CategoryController;
use App\Http\Controllers\Web\Contact\ContactController;
use App\Http\Controllers\Web\Home\HomeController;
use App\Http\Controllers\Web\Portfolio\PortfolioController;
use App\Http\Controllers\Web\Service\ServiceController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::post('/store-contact',[ContactController::class,'store']);
Route::get('/about-us',[AboutusController::class,'index']);
Route::get('/terms-condition',[AboutusController::class,'termsCondition']);
Route::get('/portfolio',[PortfolioController::class,'index']);
Route::get('/blogs',[BlogController::class,'index']);

// Faqs
Route::get('/faqs',[ContactController::class,'faqs']);

// Category routes
Route::get('/categories',[CategoryController::class,'index']);
// Route::get('/category/{slug}',[CategoryController::class,'categoryDetail']);

// category static pages
Route::get('/category/aluminum-folding-door',[CategoryController::class,'aluminumFolidingDoor']);
Route::get('/category/slimline-sliding-door',[CategoryController::class,'slimlineSlidingDoor']);
Route::get('/category/slim-folding-door',[CategoryController::class,'slimfoldingDoor']);
Route::get('/category/pergola-for-restaurant',[CategoryController::class,'pergolaForRestaurant']);
Route::get('/category/interactive-pergola',[CategoryController::class,'interactivePergola']);
Route::get('/category/residential-pergola',[CategoryController::class,'residentialPergola']);
Route::get('/category/automatic-vertical-sliding-doors',[CategoryController::class,'verticalslidingDoors']);


// single blog page
Route::get('/let-us-introduce-you-the-best-apps',function(){
    return view('web.blog.blog-detail');
});


// optimize routes
Route::get('/optimize',function(){
    Artisan::call('optimize');
    return "Server optimized";
});
Route::get('/optimize-clear',function(){
    Artisan::call('optimize:clear');
    return "optimized:cleared";
});
Route::get('/config',function(){
    Artisan::call('config:cache');
    return "Config:cached";
});
Route::get('/config-clear',function(){
    Artisan::call('config:clear');
    return "Config:cleared";
});

Route::get('sitemap.xml',function(){
    $content = file_get_contents(public_path('sitemap.xml'));

    return response($content, 200, [
        'Content-Type' => 'text/plain',
    ]);

});
Route::get('robots.txt',function(){
    $content = file_get_contents(public_path('robots.txt'));

    return response($content, 200, [
        'Content-Type' => 'text/plain',
    ]);

});