<?php

use Illuminate\Database\Seeder;
use App\Ticket;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'front_name' => 'test',
            'last_name' => 'test',
            'email' => 'asdasdasd@asd.com',
            'password' => Hash::make('asdasdasd')
        ]);

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '13:00',
            'landingTime' => '15:00',
            'class' => 'Ekonomi'
        ]);

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '17:00',
            'class' => 'Bisnis'
        ]);

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '17:00',
            'landingTime' => '19:00',
            'class' => 'Ekonomi'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '13:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);
    }
}
