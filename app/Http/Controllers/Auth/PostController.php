<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\gallery;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        return view ('auth.posts.create',['categories'=> $categories]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

     
        

    
        if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName =time(). $file->getClientOriginalName();
            $imagePath = public_path('images');
            $file->move($imagePath, $fileName );

            $gallery = gallery::create([
                'image' => $fileName 
            ]);

        }
        post::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'gallery_id' =>  $gallery->id 
        ]);
   

        return 'success';

        /*
       if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
           // $filename = time(). $file->getClientOriginalName();
           // $imagePath = public_path(). 'images/posts/';
            //$file->store($imagePath);
           // dd($imagePath);


         $gallery = gallery::create([
                'image' => $fileName 
         ]);

         post::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'gallery_id' => $gallery->id,
        ]);
        return 'success';
       }
       else{
        post::create([
                'title' => $request->title,
                'description' => $request->description,
                'category_id' => $request->category,
                 'gallery_id' => $gallery->id,
            ]);
            
        return 'success';
       }
       */ 

       
      
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
