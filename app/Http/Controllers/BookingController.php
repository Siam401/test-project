<?php

namespace App\Http\Controllers;

use App\Helpers\ApiUtil;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    public function store(BookingRequest $request)
    {
        $booking = Booking::create($request->validated());

        return ApiUtil::success('Service Booked Successfully', ['booking_id' => $booking->id]);
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);

        if (blank($booking)) {
            return ApiUtil::notFound();
        }

        return ApiUtil::success(data: ['booking_status' => $booking->status]);
    }
}
