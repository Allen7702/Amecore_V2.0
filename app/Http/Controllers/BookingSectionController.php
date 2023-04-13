<?php

namespace App\Http\Controllers;

use App\Models\BookingSection;
use Illuminate\Http\Request;

class BookingSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingSections = BookingSection::all();
        return view('auth.home-page.booking-section.index', compact('bookingSections')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.home-page.booking-section.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bookingSection = new BookingSection([
            'section_title' => $request->input('section_title'),
            'section_subtitle' => $request->input('section_subtitle'),
            'section_description' => $request->input('section_description'),
            'icon_path' => $request->input('icon_path'),
            'icon_title' => $request->input('icon_title'),
            'icon_description' =>$request->input('icon_description'),
           
        ]);
    
      
       if ($request->hasFile('icon_path')) {
        $image = $request->file('icon_path');
        $name = time().'.'.$image->getClientOriginalName();
        $destinationPath = public_path('/website/icons');
        $image->move($destinationPath, $name);
        $bookingSection->icon_path = $name;
    }
    
        $bookingSection->save();
    
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('bookingSection.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bookingSection = BookingSection::findOrFail($id);
        return view('auth.home-page.booking-section.show', compact('bookingSection'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bookingSection = BookingSection::findOrFail($id);
    return view('auth.home-page.booking-section.edit', compact('bookingSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $request->validate([
        //     'title_white' => 'required',
        //     'title_red' => 'required',
        //     'description' => 'required',
        //     'image' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
        //     'button_text' => 'nullable|string',
        // ]);
    
        $bookingSection = BookingSection::findOrFail($id);
    
        $bookingSection->section_title = $request->input('section_title');
        $bookingSection->section_subtitle =$request->input('section_subtitle');
        $bookingSection->section_description = $request->input('section_description');
        $bookingSection->icon_path = $request->input('icon_path');
        $bookingSection->icon_title = $request->input('icon_title');
        $bookingSection->icon_description = $request->input('icon_description');

      
    
        if ($request->hasFile('icon_path')) {
            $image = $request->file('icon_path');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/website/icons');
            $image->move($destinationPath, $name);
            $bookingSection->icon_path = $name;
        }
    
        $bookingSection->save();
    
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('bookingSection.index');      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BookingSection::findOrFail($id)->delete();
        return redirect()->route('bookingSection.index');    }
}