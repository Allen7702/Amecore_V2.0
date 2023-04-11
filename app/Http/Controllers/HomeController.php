<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\FeatureSection;
use App\Models\post;
use App\Models\Service;
use App\Models\slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        $services = Service::all();
        $sliders= slider::all();
        $featureSections = FeatureSection::all();
        $featureHeading = $featureSections->first();
        $features = $featureSections->slice(1);

        return view('amecore.home',[
            'services' => $services,
            'sliders' => $sliders,
            'features' => $features,
            'featureHeading' => $featureHeading,
        ] );
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

    public function dashboard(){
        return view('auth.dashboard');
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
