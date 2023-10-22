<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home()
{

    return view('layouts.admin.pages.home');
}
public function AjoutProjet(){
    return view('layouts.admin.pages.AjoutProjet');
}
public function ListProjet(){
    return view('layouts.admin.pages.ListProjet');
}
public function AjoutMenu(){
    return view('layouts.admin.pages.AjoutMenu');
}
public function ListMenu(){
    return view('layouts.admin.pages.ListMenu');
}

}
