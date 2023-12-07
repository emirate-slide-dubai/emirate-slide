<?php

namespace App\Http\Controllers\Web\Aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        return view('web.aboutus.aboutus');
    }
}
