<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Tour;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'tour_id' => 'required',
        ]);

        $tour = Tour::find($request->tour_id);

        $order = new Order();
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->addition = $request->addition;
        $order->tour()->associate($tour);

        $order->save();

        return redirect()->route('tours')->with('success', 'Order created successfully.');
    }
}
