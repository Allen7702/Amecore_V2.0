<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = slider::all();
        return view('auth.home-page.slider.index', compact('sliders')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.home-page.slider.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider([
            'title_white' => $request->input('title_white'),
            'title_red' => $request->input('title_red'),
            'description' => $request->input('description'),
            'show_button' => $request->input('show_button') == '1',
            'button_text' => $request->input('button_text'),
        ]);
    
        // Save the image
       // $imagePath = $request->file('image')->store('public/website/img');
       // $slider->image = Storage::url($imagePath);
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalName();
        $destinationPath = public_path('/website/img');
        $image->move($destinationPath, $name);
        $slider->image = $name;
    }
    
        $slider->save();
    
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('slider.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('auth.home-page.slider.show', compact('slider'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
    return view('auth.home-page.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title_white' => 'required',
            'title_red' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'button_text' => 'nullable|string',
        ]);
    
        $slider = Slider::findOrFail($id);
    
        $slider->title_white = $request->input('title_white');
        $slider->title_red = $request->input('title_red');
        $slider->description = $request->input('description');
        $slider->show_button = $request->input('show_button') ? true : false;
        $slider->button_text = $request->input('button_text');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/website/img');
            $image->move($destinationPath, $name);
            $slider->image = $name;
        }
    
        $slider->save();
    
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('slider.index');      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Slider::findOrFail($id)->delete();
        return redirect()->route('slider.index');    }
}
