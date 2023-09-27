<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('layouts.pages.index');
    }
    public function services(){
        return view('layouts.pages.service');
    }
    public function about(){
        return view('layouts.pages.about');
    }
    public function publications(){
        return view('layouts.pages.publication');
    }
    public function contact(){
        return view('layouts.pages.conctact');
    }
    public function galery(){
        return view('layouts.pages.galerie');
    }
}
