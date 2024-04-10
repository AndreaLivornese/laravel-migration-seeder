<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{

    public function index(){

        $trains = Train::where('Data', gmdate('Y-m-d'))->get();

        // @dump($trains);
        
        return view('home', compact('trains'));
    }
}
