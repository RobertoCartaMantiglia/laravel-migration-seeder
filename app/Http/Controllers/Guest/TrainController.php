<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{


    public function index()
    {
        $trains = Train::where('orario_partenza', '!=', '2023-02-11 10:36:57')->get();
        dump($trains);
        return view('home', compact('trains'));
    }
}
