<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{


    public function index()
    {
        $trains = Train::where('azienda', '=', 'trenitalia')->get();
        dump($trains);
        return view('home', compact('trains'));
    }
}
