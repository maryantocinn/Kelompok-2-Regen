<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Ticket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {
        $user = Auth::user();
        $datas = User::find($user->id);
        $fCity = Ticket::pluck('fromCity')->unique();
        $dCity = Ticket::pluck('destinationCity')->unique();
        $bTime = Ticket::pluck('boardingTime')->unique();
        $lTime = Ticket::pluck('landingTime')->unique();
        return view('welcome',compact('datas','fCity','dCity','bTime','lTime'));
    }
     
    public function index()
    {
        return view('home');
    }
}
