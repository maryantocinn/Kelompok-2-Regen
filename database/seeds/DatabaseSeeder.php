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

        //Penerbangan jam 09.00 - 12.00 Jakarta - Palembang Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy',
            'childPrice' => 800000,
            'adultPrice' => 1000000
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy',
            'childPrice' => 700000,
            'adultPrice' => 900000
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy',
            'childPrice' => 1000000,
            'adultPrice' => 1200000
        ]);

        //Penerbangan jam 09.00 - 12.00 Jakarta - Palembang Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 09.00 - 12.00 Jakarta - Palembang First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First',
            'childPrice' => 12345,
            'adultPrice' => 12334
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);


        //Penerbangan jam 12.00 - 15.00 Jakarta - Palembang Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 12.00 - 15.00 Jakarta - Palembang Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 12.00 - 15.00 Jakarta - Palembang First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 15.00 - 18.00 Jakarta - Palembang Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 15.00 - 18.00 Jakarta - Palembang Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 15.00 - 18.00 Jakarta - Palembang First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 09.00 - 12.00 Jakarta - Batam Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        //Penerbangan jam 09.00 - 12.00 Jakarta - Batam Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 09.00 - 12.00 Jakarta - Batam First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);


        //Penerbangan jam 12.00 - 15.00 Jakarta - Batam Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 12.00 - 15.00 Jakarta - Batam Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 12.00 - 15.00 Jakarta - Batam First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 15.00 - 18.00 Jakarta - Batam Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 15.00 - 18.00 Jakarta - Batam Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 15.00 - 18.00  Jakarta - Batam First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Jakarta',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 09.00 - 12.00 Palembang - Jakarta Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        //Penerbangan jam 09.00 - 12.00 Palembang - Jakarta Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 09.00 - 12.00 Palembang - Jakarta First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);


        //Penerbangan jam 12.00 - 15.00 Palembang - Jakarta Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 12.00 - 15.00 Palembang - Jakarta Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 12.00 - 15.00 Palembang - Jakarta First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 15.00 - 18.00 Palembang - Jakarta Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 15.00 - 18.00 Palembang - Jakarta Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 15.00 - 18.00 Palembang - Jakarta First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 09.00 - 12.00 Palembang - Batam Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        //Penerbangan jam 09.00 - 12.00 Palembang - Batam Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 09.00 - 12.00 Palembang - Batam First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);


        //Penerbangan jam 12.00 - 15.00 Palembang - Batam Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 12.00 - 15.00 Palembang - Batam Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 12.00 - 15.00 Palembang - Batam First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 15.00 - 18.00 Palembang - Batam Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 15.00 - 18.00 Palembang - Batam Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 15.00 - 18.00  Palembang - Batam First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Palembang',
            'destinationCity' => 'Batam',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 09.00 - 12.00 Batam - Palembang Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        //Penerbangan jam 09.00 - 12.00 Batam - Palembang Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 09.00 - 12.00 Batam - Palembang First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);


        //Penerbangan jam 12.00 - 15.00 Batam - Palembang Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 12.00 - 15.00 Batam - Palembang Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 12.00 - 15.00 Batam - Palembang First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 15.00 - 18.00 Batam - Palembang Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 15.00 - 18.00 Batam - Palembang Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 15.00 - 18.00 Batam - Palembang First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Palembang',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 09.00 - 12.00 Batam - Jakarta Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Economy'
        ]);

        //Penerbangan jam 09.00 - 12.00 Batam - Jakarta Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 09.00 - 12.00 Batam - Jakarta First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '09:00',
            'landingTime' => '12:00',
            'class' => 'First'
        ]);


        //Penerbangan jam 12.00 - 15.00 Batam - Jakarta Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 12.00 - 15.00 Batam - Jakarta Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 12.00 - 15.00 Batam - Jakarta First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '12:00',
            'landingTime' => '15:00',
            'class' => 'First'
        ]);

        //Penerbangan jam 15.00 - 18.00 Batam - Jakarta Economy//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Economy'
        ]);


        //Penerbangan jam 15.00 - 18.00 Batam - Jakarta Business//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'Business'
        ]);

        //Penerbangan jam 15.00 - 18.00 Batam - Jakarta First//

        Ticket::create([
            'airline' => 'Citilink',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Lion Air',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);

        Ticket::create([
            'airline' => 'Garuda',
            'fromCity' => 'Batam',
            'destinationCity' => 'Jakarta',
            'boardingTime' => '15:00',
            'landingTime' => '18:00',
            'class' => 'First'
        ]);
    }
}
