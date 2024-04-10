<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index(){

        $trains = Train::all();

        @dump($trains);
        
        return view('home', compact('trains'));
    }
}
