<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function contact() {
        return view('contact');
    }
}
