<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Mail\BookingConfirmed;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('service')->latest()->paginate(10);
        
        return view('bookings.index', compact('bookings'));
    }

    public function confirm(Booking $booking)
    {
        $booking->update(['status' => 'confirmed']);

        Mail::to($booking->email)->queue(new BookingConfirmed($booking));

        return redirect()->route('admin.bookings.index')->with('success', 'Booking confirmed and email queued.');
    }
}
