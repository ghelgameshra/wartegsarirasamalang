<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index', [
            'title' => 'Warteg Sarirasa'
        ]);
    }

    public function daftarMenu(){
        return view('menu', [
            'title' => 'Daftar Menu'
        ]);
    }

    public function login(){
        return view('login', [
            'title' => 'Login'
        ]);
    }
}
