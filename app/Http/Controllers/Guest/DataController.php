<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index(){
        
        return view('home');
    }
}
