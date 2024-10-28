<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $passengers = [
            [
                'name' => 'pippo',
                'lastname' => 'pluto',
                'age' => 53,
                'passenger_code' => 345354,
            ],

        ];

        foreach ($passengers as $passenger) {
            $newPassenger = new Passenger();
            $newPassenger->name = $passenger['name'];
            $newPassenger->lastname = $passenger['lastname'];
            $newPassenger->age = $passenger['age'];
            $newPassenger->passenger_code = $passenger['passenger_code'];
            $newPassenger->save();
        }
    }
}
