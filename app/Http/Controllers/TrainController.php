<?php

namespace App\Http\Controllers;

use App\Train;


use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        # tutti i treni
        $trains = train::all();

        return view('pages.trains', compact('trains'));
    }
}
