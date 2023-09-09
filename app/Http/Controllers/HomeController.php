<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Destination;
use App\Models\HomePage;
use App\Models\Tour;

class HomeController extends Controller
{
    public function home()
    {
//        $banners = Banner::all();
        $home = HomePage::first();
        $destinations = Destination::take(3)->get();
        $tours = Tour::take(4)->get();

        return view('home', compact('home', 'destinations', 'tours'));
    }
}
