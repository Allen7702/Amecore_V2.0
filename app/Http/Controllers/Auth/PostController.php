<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\gallery;
use App\Models\post;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = post::with(['gallery','category'])->get();
        return view('auth.posts.index',['posts'=>$posts]);
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

       /* $request->validate([
            'title' => 'required',
             'description' => 'required',
             'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);  
*/
        $gallery = new Gallery;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalName();
            $destinationPath = public_path('/website/img');
            $image->move($destinationPath, $name);
            $gallery->image = $name;
        }

        $gallery->save();

        $post = new Post;

        $post->category_id = $request->category;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->gallery_id = $gallery->id;

        $post->save();
         
        $request->session()->flash('alert-success','post created sussecfully');
        return to_route('post.index');


        // return redirect()->route('posts.create');
        // return 'success';
       /* $image = $request->image;
        if($image) {
            $extention = $image->getClientOriginalExtension();
            $imageName = time(). '.'.$extention;
            $image->move(public_path('images'), $imageName);

            $gallery = gallery::create([
                'image' => $imageName
         ]);
        }

        Post::create([
            'category_id' => $request->category,
            'title' => $request->title,
            'description' => $request->description,
            'is_publish' => $request->is_publish,
            'status' => 0,
            'gallery_id' => $gallery->id,

        ]);

        return $request->all();
*/




        /*
       if($request->hasFile('file')){
            $file = $request->file('file');
            $fileName = $file->getClientOriginalName();
            $file->storeAs('public/images', $fileName);
           // $filename = time(). $file->getClientOriginalName();
           // $imagePath = public_path(). 'images/posts/';
            //$file->store($imagePath);
           // dd($imagePath);

            'gallery_id' => $request->image ? $imageName:intval('0')

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
       return 'succes';
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
        Post::findOrFail($id)->delete();
        return redirect()->route('post.index');
    }
}
