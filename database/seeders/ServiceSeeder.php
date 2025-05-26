<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Service 1
        Service::create([
            'name' => 'AC Repair',
            'category' => 'Home Services',
            'price' => 1200,
            'description' => 'Fix all types of ACs, including split and window units.',
        ]);

        // Service 2
        Service::create([
            'name' => 'Plumbing Installation',
            'category' => 'Home Services',
            'price' => 1500,
            'description' => 'Installation of new pipes, faucets, and water heaters.',
        ]);

        // Service 3
        Service::create([
            'name' => 'Electrical Wiring',
            'category' => 'Home Services',
            'price' => 2000,
            'description' => 'Complete house electrical wiring and fault finding.',
        ]);

        // Service 4
        Service::create([
            'name' => 'Car Oil Change',
            'category' => 'Automotive',
            'price' => 800,
            'description' => 'Standard engine oil and filter replacement for all car models.',
        ]);

        // Service 5
        Service::create([
            'name' => 'Laptop Screen Replacement',
            'category' => 'Electronics Repair',
            'price' => 3500,
            'description' => 'Replacement of cracked or non-functional laptop screens.',
        ]);

        // Service 6
        Service::create([
            'name' => 'Deep Cleaning (Residential)',
            'category' => 'Cleaning Services',
            'price' => 2500,
            'description' => 'Thorough cleaning for homes, including kitchen and bathrooms.',
        ]);

        // Service 7
        Service::create([
            'name' => 'Photography Session',
            'category' => 'Creative Services',
            'price' => 5000,
            'description' => 'Professional photography for events, portraits, or products.',
        ]);

        // Service 8
        Service::create([
            'name' => 'Mobile Phone Repair',
            'category' => 'Electronics Repair',
            'price' => 1000,
            'description' => 'Fixing common issues like screen damage, battery replacement, and software problems.',
        ]);

        // Service 9
        Service::create([
            'name' => 'Gardening & Landscaping',
            'category' => 'Outdoor Services',
            'price' => 1800,
            'description' => 'Lawn mowing, tree pruning, and garden design services.',
        ]);

        // Service 10
        Service::create([
            'name' => 'Web Design & Development',
            'category' => 'Digital Services',
            'price' => 15000,
            'description' => 'Custom website design and full-stack development for businesses.',
        ]);
    }
}
