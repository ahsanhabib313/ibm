<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Sewer Line Checkup','image' => 'sewer_line_checkup.jpg', 'slug' => str_replace(' ', '_', strtolower('Sewer Line Checkup')) , 'price' => 4, 'commission' => 2, 'commission_percentage' => 5, 'details' => 'We also do the sewer lines checkup works, Call us for checking at (818) 773-7599.'],
            ['name' => 'Drain Clean up','image' => 'drain_clean_up.jpg', 'slug' => str_replace(' ', '_', strtolower('Drain Clean up')), 'price' => 3, 'commission' => 1, 'commission_percentage' => 5, 'details' => 'We also do the septic tanks checkup works, Call us for checking at (818) 773-7599.'],
            ['name' => 'Residential Plumbing','image' => 'residential_plumbing.jpg', 'slug' => str_replace(' ', '_', strtolower('Residential Plumbing')), 'price' => 4, 'commission' => 2, 'commission_percentage' => 5, 'details' => 'Residential Plumbing is an important part of a healthy home. Use this advice to keep your place plumbing safe for your family.Plumbing includes all of the water supply and water waste lines. When the building’s foundation is built, a plumber runs a supply line from the street through the foundation wall or the slab. From that point, they run the lines that supply water to the home to rooms where sinks, bathtubs, showers and other fixtures will be installed.'],
            ['name' => 'Commercial Plumbing','image' => 'commercial_plumbing.jpg', 'slug' => str_replace(' ', '_', strtolower('Commercial Plumbing')), 'price' => 4, 'commission' => 2, 'commission_percentage' => 5, 'details' => 'Commercial Plumbing is an important part of a healthy place. Use this advice to keep your place plumbing safe for your family.Plumbing includes all of the water supply and water waste lines. When the building’s foundation is built, a plumber runs a supply line from the street through the foundation wall or the slab. From that point, they run the lines that supply water to the building to rooms where sinks, bathtubs, showers and other fixtures will be installed.'],
            ['name' => 'Sink Checkups','image' => 'sink_checkups.jpg', 'slug' => str_replace(' ', '_', strtolower('Sink Checkups')), 'price' => 5, 'commission' => 2, 'commission_percentage' => 5, 'details' => 'Besides providing installations and maintenance servicing for both the plumbing and plumbing rooter, we also offer repair services, under the standard warranties we issue. Also, if you want to negotiate a repair option then we will.'],
            ['name' => 'Pipe Checkups','image' => 'pipe_checkups.jpg', 'slug' => str_replace(' ', '_', strtolower('Pipe Checkups')), 'price' => 6, 'commission' => 3, 'commission_percentage' => 5, 'details' => 'The World of pipe is changing too fast to idly stand by and carry on paying all these pipes faults! As one of the leading expert companies in the plumbing market, we’re here to offer you…'],
            ['name' => 'Demolation Hauling','image' => 'demolation_hauling.jpg', 'slug' => str_replace(' ', '_', strtolower('Demolation Hauling')), 'price' => 4, 'commission' => 2, 'commission_percentage' => 5, 'details' => 'Mega Trash Removal does Demolation & Hauling services around Los Angeles County & San Fernando Valley.'],
        ];

        Service::insert($data);
    }
}
