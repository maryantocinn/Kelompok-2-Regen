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
        // $faker = Faker::create('en_US');

        // for($i = 1; $i < 50 ; $i++){
        //     Ticket::create([
        //         'airline' => $faker->company,
        //         'fromCity' => $faker->city,
        //         'destinationCity' => $faker->city,
        //         'boardingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
        //         'landingTime' => $faker->time($format = 'H:i:s', $max = 'now'),
        //         'class' => $faker->numberBetween(1,3)
        //     ]);
        // }

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '13:00',
            'landingTime' => '15:00',
            'class' => 1
        ]);

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '17:00',
            'class' => 2
        ]);

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '17:00',
            'landingTime' => '19:00',
            'class' => 3
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '13:00',
            'landingTime' => '15:00',
            'class' => 1
        ]);
    }
}
