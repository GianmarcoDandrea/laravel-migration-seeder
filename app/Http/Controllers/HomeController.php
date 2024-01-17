<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;
Use \Carbon\Carbon;

class HomeController extends Controller
{
    public function index() {
        $today = Carbon::today()->format('Y-m-d');
        $trains = Train::where('departure_date', '=', $today)->orderBy('departure_time')->get();
        return view('home', compact('trains'));
    }
};

