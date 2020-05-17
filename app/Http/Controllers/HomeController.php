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
        $this->middleware('auth',['except'=>'welcome']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {
        $user = Auth::user();
        if($user!=NULL){
            $datas = User::find($user->id);
        }
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

    public function info()
    {
        $user = Auth::user();
        return view('registerInfo',compact('user'));
    }

    public function submitInfo(Request $request, User $user)
    {
        $user->update($request->all());
        $dob = $request->bdate.'-'.$request->bmonth.'-'.$request->byear;
        $user->update(['dob'=>$dob]);
        return redirect('/register/ktp');
    }

    public function ktp()
    {
        $user = Auth::user();
        return view('registerKTP',compact('user'));
    }

    public function submitKTP(Request $request, User $user)
    {
        $user->update($request->all());
        
        if(request()->hasFile('ktp')){
            $name = time()."_".request()->file('ktp')->getClientOriginalName();
            request()->file('ktp')->move('ktp',$name);
            $user->update(['ktp'=>$name]);
        }
        return redirect('/');
    }
}
