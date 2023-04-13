<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutSections = AboutSection::all();
        return view('auth.home-page.about-company.index', compact('aboutSections')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.home-page.about-company.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $aboutSection = new AboutSection([
            'title_primary' => $request->input('title_primary'),
            'title_sec' => $request->input('title_sec'),
            'description' => $request->input('description'),
           
        ]);
    
        // Save the image
       // $imagePath = $request->file('image')->store('public/website/img');
       // $aboutSection->image = Storage::url($imagePath);
       if ($request->hasFile('image')) {
        $image = $request->file('image');
        $name = time().'.'.$image->getClientOriginalName();
        $destinationPath = public_path('/website/img');
        $image->move($destinationPath, $name);
        $aboutSection->image = $name;
    }
    
        $aboutSection->save();
    
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('aboutSection.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $aboutSection = aboutSection::findOrFail($id);
        return view('auth.home-page.about-company.show', compact('aboutSection'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $aboutSection = aboutSection::findOrFail($id);
    return view('auth.home-page.about-company.edit', compact('aboutSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
        $aboutSection = aboutSection::findOrFail($id);
    
        $aboutSection->title_primary = $request->input('title_primary');
        $aboutSection->title_sec = $request->input('title_sec');
        $aboutSection->description = $request->input('description');
       
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/website/img');
            $image->move($destinationPath, $name);
            $aboutSection->image = $name;
        }
    
        $aboutSection->save();
    
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('aboutSection.index');      }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        aboutSection::findOrFail($id)->delete();
        return redirect()->route('aboutSection.index');    }
}
