<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function login(){
        return view('login');
    }
    public function index(){
        return view('home.index');
    }
    public function register(){
        return view('home.register');
    }
}
