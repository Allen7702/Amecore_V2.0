<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\booking;

class HomeController extends Controller
{
    public function home(){
        return view('amecore.home');
    }

    public function contact(){
        return view('amecore.contact');
    }

    public function about(){
        return view('amecore.about');
    }

    public function solution(){
        return view('amecore.solution');
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
