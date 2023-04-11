<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use App\Models\FeatureSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featureSections = FeatureSection::all();
        return view('auth.home-page.features.index', compact('featureSections'));    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('auth.home-page.features.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

          // Create a new FeatureSection instance and fill in the data
    $feature_section = new FeatureSection; 

    $feature_section->heading = $request->heading;
    $feature_section->subheading =$request->subheading;
    $feature_section->description = $request->description;
    $feature_section->title = $request->title;
       
 
    if ($request->hasFile('main_image'||'second_image')) {
        // Save the main_image and second_image
        $main_image = $request->file('main_image');
        $main_name = time().'.'.$main_image->getClientOriginalName();
        $main_image->move(public_path('/website/img'), $main_name);

        $second_image = $request->file('second_image');
        $second_name = time().'.'.$second_image->getClientOriginalName();
        $second_image->move(public_path('/website/img'), $second_name);

         // Set the image paths to the FeatureSection instance
        $feature_section->main_image = $main_name;
        $feature_section->second_image = $second_name;
    }
    // Save the FeatureSection instance to the database
    $feature_section->save();

    // Loop through the icons, save them, and associate them with the FeatureSection
    if ($request->has('icons')) {
      foreach ($request->input('icons') as $iconData) {
        $icon = new Feature([
            'title' => $iconData['title'],
        ]);

        // Save the icon image
        $iconImage = $request->file('icons.' . $iconData['icon'])->store('public/website/icons');
        $icon->icon = Storage::url($iconImage);

        // Associate the icon with the FeatureSection and save it
        $feature_section->icons()->save($icon);
      }
    }
    // Redirect the admin back to the FeatureSection index page with a success message
    return redirect()->route('featureSection.index')->with('success', 'Feature section created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('auth.home-page.features.create',compact('featureSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        FeatureSection::findOrFail($id)->delete();
        return redirect()->route('featureSection.index');
    }
}
