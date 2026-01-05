<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspireController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('itr_about');
    }
}
