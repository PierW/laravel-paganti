<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function getHome()
    {
      return view('boolean.layout.home');
    }
}
