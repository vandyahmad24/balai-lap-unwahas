<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('beranda.index');
    }
    public function admin()
    {
        echo 'halo admin';
    }
    public function user()
    {
        echo 'halo user';
    }
  
}
