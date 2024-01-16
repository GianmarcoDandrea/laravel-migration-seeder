<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $trains = Train::where('departure_date', '=', '2024-01-16')->get();
        return view('home', compact('trains'));
    }
};

