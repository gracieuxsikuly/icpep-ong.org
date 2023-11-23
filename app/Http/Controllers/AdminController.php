<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
{

    return view('layouts.admin.pages.home');
}
public function ajoutprojet(){
    return view('layouts.admin.pages.ajoutprojet');
}
public function listprojet(){
    return view('layouts.admin.pages.listprojet');
}
public function ajoutblog(){
    return view('layouts.admin.pages.ajoutblog');
}
public function listblog(){
    return view('layouts.admin.pages.listblog');
}

}
