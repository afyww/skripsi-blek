<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){

        return view('dashboard');
    }

    public function pemilih(){

        return view('pemilih');
    }
}
