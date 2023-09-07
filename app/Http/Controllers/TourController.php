<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TourController extends Controller
{
    public function index()
    {

        // $tours = Tour::where('lang', App::getLocale())->paginate(10);
        
        // $destinations = Destination::where('lang', App::getLocale())->get();

        $tours = Tour::paginate(10);
        $destinations = Destination::all();

        return view('index', compact('tours', 'destinations'));
    }

    public function show(Tour $tour)
    {

        $destinations = Destination::where('lang', App::getLocale())->get();

        return view('show', compact('tour', 'destinations'));
    }
}
