<?php

use Illuminate\Database\Seeder;
use App\Ticket;
use Faker\Factory as Faker;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('en_US');

        for($i = 1; $i < 50 ; $i++){
            Ticket::create([
                'airline' => $faker->company,
                'fromCity' => $faker->city,
                'destinationCity' => $faker->city,
                'boardingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
                'landingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
                'class' => $faker->numberBetween(1,3)
            ]);
        }
    }
}
