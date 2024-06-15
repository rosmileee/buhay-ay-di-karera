<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        return view('bookings.index');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'checkin' => 'required|date',
            'checkout' => 'required|date',
            'room' => 'required|string|max:50',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
        ]);

        Booking::create($request->all());

        return redirect()->route('booking.index')->with('success', 'Booking created successfully.');
    }
}
