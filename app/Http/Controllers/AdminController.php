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
public function ajoutblog($blog){
    return view('layouts.admin.pages.ajoutblog',compact('blog'));
}
public function listblog(){
    return view('layouts.admin.pages.listblog');
}
// edit blog
public function editblog($blog){
    return view('layouts.admin.pages.ajoutblog', compact('blog'));
}

}
