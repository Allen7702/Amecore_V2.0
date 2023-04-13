<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = service::all();
        return view('auth.home-page.services.index',['services'=>$services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('auth.home-page.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Handle file upload
    $imageName = time() . '.' . $request->image->extension();
    $request->image->move(public_path('website/icons'), $imageName);

    // Create a new service
    Service::create([
        'title' => $request->title,
        'description' => $request->description,
        'image' => $imageName,
    ]);

    // Redirect to the services index
    return redirect()->route('service.index')->with('success', 'Service created successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // Validate input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        // Handle file upload (if a new image is uploaded)
        $imageName = $service->image;
        if ($request->hasFile('image')) {
            // Delete the old image file
            $oldImagePath = public_path('website/icons/' . $service->image);
            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
    
            // Store the new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('website/icons'), $imageName);
        }
    
        // Update the service
        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ]);
    
        // Redirect to the services index
        return redirect()->route('service.index')->with('success', 'Service updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        service::findOrFail($id)->delete();
        return redirect()->route('service.index');
    }
}
