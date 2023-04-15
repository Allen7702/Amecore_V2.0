<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\AboutSection;
use App\Models\booking;
use App\Models\BookingSection;
use App\Models\contact;
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
        $bookingSections = BookingSection::all();
        $aboutSections = AboutSection::all();

        return view('amecore.home',[
            'services' => $services,
            'sliders' => $sliders,
            'features' => $features,
            'featureHeading' => $featureHeading,
            'bookingSections' => $bookingSections,
            'aboutSections' => $aboutSections,
        ] );
    }

    public function contact(){
         $contacts = contact::all();
        $firstSection = $contacts->first();

        return view('amecore.contact',[
             'contacts' => $contacts,
            'firstSection' => $firstSection,
        ]);
    }

    public function about(){
        $abouts = About::all();
        $services = Service::all();
        $firstSection = $abouts->first();
        return view('amecore.about',[
            'services' => $services,
            'abouts'=> $abouts,
            'firstSection'=>$firstSection,

        ]);
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
