<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view ('welcome');
    }
    public function home(){
        return view ('index');
    }

    public function product(){
        return view ('product');
    }

    public function login(){
        return view ('login');
    }

    public function register(){
        return view ('register');
    }

    public function detail(){
        return view ('detail');
    }
    public function contactus(){
        return view ('contactus');
    }
}
