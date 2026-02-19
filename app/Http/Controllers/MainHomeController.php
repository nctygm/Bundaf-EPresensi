<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\PresensiChart;

class MainHomeController extends Controller
{
    public function index()
    {
     
        return view('main-home');
    }
}
