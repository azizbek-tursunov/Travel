<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class DestinationController extends Controller
{
    public function showByDestination(Destination $destination)
    {
        $destinations = Destination::all();
        $tours = $destination->tours()->paginate(10); // paginate with 10 items per page

        return view('index', compact('tours', 'destinations'));
    }
}
