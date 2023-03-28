<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\booking;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }

    public function about(){
        return view('about');
    }

    public function solution(){
        return view('solution');
    }

    public function homedb(){

     $home = new booking();
     $home->name = request('name');
     $home->email = request('email');
     $home->date = request('date');
     $home->time = request('time');
     $home->service = request('service');

     $home->save(); 
     return redirect('/contact');

    }
}
