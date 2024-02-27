<?php

namespace App\Http\Controllers\Web\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('web.categories.category');
    }

    public function categoryDetail($slug){
        return view('web.categories.category-detail');
    }



    // category static pages
    public function aluminumFolidingDoor(){
        return view('web.categories.staticCategoryDetail.aluminum-folding-door');
    } 
    public function slimlineSlidingDoor(){
        return view('web.categories.staticCategoryDetail.slimline-sliding-door');
    } 
    public function slimfoldingDoor(){
        return view('web.categories.staticCategoryDetail.slim-folding-door');
    } 
    public function pergolaForRestaurant(){
        return view('web.categories.staticCategoryDetail.pergola-for-restaurant');
    } 
    public function interactivePergola(){
        return view('web.categories.staticCategoryDetail.interactive-pergola');
    } 
    public function residentialPergola(){
        return view('web.categories.staticCategoryDetail.residential-pergola');
    } 
    public function verticalslidingDoors(){
        return view('web.categories.staticCategoryDetail.automatic-vertical-sliding-doors');
    } 
}
