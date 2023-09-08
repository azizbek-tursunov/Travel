<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HotelController extends Controller
{
    public function index()
    {
        $hotels = Hotel::paginate(10);

        return view('index', compact('hotels'));
    }

    public function show(Hotel $hotel)
    {

        $destinations = Destination::all();

        return view('show', compact('hotel', 'destinations'));
    }
}
