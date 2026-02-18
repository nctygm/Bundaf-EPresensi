<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\PresensiChart;

class MainHomeController extends Controller
{
    public function index(PresensiChart $chart)
    {
        $data ['chart'] = $chart->build(); 
        return view('main-home', $data);
    }
}
