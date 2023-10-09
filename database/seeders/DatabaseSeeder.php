<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::create([
        //     'name' => 'Sree',
        //     'email' => 'das_sreenath@gmail.com',
        //     'username' => '128238',
        //     'password' => bcrypt('sree5633')
        // ]);

        \App\Models\Configuration::create([
            'key' => 'units',
            'value' => ["Agartala", "Ahmedabad", "Ankleshwar", "Bokaro", "Cambay", "Chennai", "Dehradun", "Delhi", "Goa", "Hazira", "Jodhpur", "Jorhat", "Kakinada", "Karaikal", "Kolkata", "Mehsana", "Mumbai", "Nazira", "Rajahmundry", "Silchar", "Uran", "Vadodara"]
        ]);

        \App\Models\Document::create([
            'name' => 'ASTO Emergency CEC Resolution',
            'year' => '2023',
            'category' => 'Others',
            'document' => 'documents/resolution.pdf'
        ]);

        \App\Models\Document::create([
            'name' => 'ASTO CEC Resolution-Holding Election',
            'year' => '2023',
            'category' => 'Others',
            'document' => 'documents/election.pdf'
        ]);

        \App\Models\Document::create([
            'name' => 'ASTO MoU with Kotak-Regular Employee',
            'year' => '2023',
            'category' => 'Others',
            'document' => 'documents/kotak.pdf'
        ]);
    }
}
