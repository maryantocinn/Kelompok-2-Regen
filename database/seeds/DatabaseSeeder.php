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

        ///Penerbangan jam 09.00 - 12.00 Jakarta - Palembang Economy//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 300000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 250000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Economy',
'childPrice' => 150000,
    'adultPrice' => 450000
]);

//Penerbangan jam 09.00 - 12.00 Jakarta - Palembang Business//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Business',
    'childPrice' => 200000,
    'adultPrice' => 500000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Business',
'childPrice' => 200000,
    'adultPrice' => 400000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Business',
'childPrice' => 300000,
    'adultPrice' => 600000
]);

//Penerbangan jam 09.00 - 12.00 Jakarta - Palembang First//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'First',
'childPrice' => 300000,
    'adultPrice' => 600000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'First',
'childPrice' => 300000,
    'adultPrice' => 500000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'First',
'childPrice' => 400000,
    'adultPrice' => 800000
]);


//Penerbangan jam 12.00 - 15.00 Jakarta - Palembang Economy//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 300000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 250000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'Economy',
'childPrice' => 150000,
    'adultPrice' => 450000
]);


//Penerbangan jam 12.00 - 15.00 Jakarta - Palembang Business//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'Business',
'childPrice' => 200000,
    'adultPrice' => 500000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'Business',
'childPrice' => 200000,
    'adultPrice' => 400000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'Business',
'childPrice' => 300000,
    'adultPrice' => 600000
]);

//Penerbangan jam 12.00 - 15.00 Jakarta - Palembang First//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'First',
'childPrice' => 300000,
    'adultPrice' => 600000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'First',
'childPrice' => 300000,
    'adultPrice' => 500000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '12:00',
    'landingTime' => '15:00',
    'class' => 'First',
'childPrice' => 400000,
    'adultPrice' => 800000
]);

//Penerbangan jam 15.00 - 18.00 Jakarta - Palembang Economy//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 300000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 250000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'Economy',
'childPrice' => 150000,
    'adultPrice' => 450000
]);


//Penerbangan jam 15.00 - 18.00 Jakarta - Palembang Business//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'Business',
'childPrice' => 200000,
    'adultPrice' => 500000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'Business',
'childPrice' => 200000,
    'adultPrice' => 400000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'Business',
'childPrice' => 300000,
    'adultPrice' => 600000
]);

//Penerbangan jam 15.00 - 18.00 Jakarta - Palembang First//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'First',
'childPrice' => 300000,
    'adultPrice' => 600000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'First',
'childPrice' => 300000,
    'adultPrice' => 500000
]);

Ticket::create([
    'airline' => 'Garuda',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Palembang',
    'boardingTime' => '15:00',
    'landingTime' => '18:00',
    'class' => 'First',
'childPrice' => 400000,
    'adultPrice' => 800000
]);

//Penerbangan jam 09.00 - 12.00 Jakarta - Batam Economy//

Ticket::create([
    'airline' => 'Citilink',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Batam',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 300000
]);

Ticket::create([
    'airline' => 'Lion Air',
    'fromCity' => 'Jakarta',
    'destinationCity' => 'Batam',
    'boardingTime' => '09:00',
    'landingTime' => '12:00',
    'class' => 'Economy',
'childPrice' => 100000,
    'adultPrice' => 250000
]);

    }
}
