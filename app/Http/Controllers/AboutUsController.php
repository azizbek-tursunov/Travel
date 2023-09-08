<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        $partners = \App\Models\Partner::all();
        $about = \App\Models\About::first();

        return view('about-us', compact('partners', 'about'));
    }
}
