<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        //dd($tours);
        return view('tours.index',compact('tours'));
    }
    public function show(Tour $tour)
    {
        //dd($tour);
        return view('tours.show',compact('tour'));
    }
}
