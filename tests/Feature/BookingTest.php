<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Service;
use Tests\TestCase;

class BookingTest extends TestCase
{
    public function test_booking_creation()
    {
        $service = Service::first();

        $response = $this->postJson('/api/bookings', [
            'customer_name' => 'John Doe',
            'phone' => '017xxxxxxxx',
            'service_id' => $service->id,
        ]);

        $response->assertStatus(200);
    }

    public function test_booking_status()
    {
        $booking = Booking::first();

        $response = $this->getJson("/api/bookings/{$booking->id}");

        $response->assertStatus(200);
    }
}
