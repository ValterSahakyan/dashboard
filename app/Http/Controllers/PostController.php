<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $posts = Post::with('user')->paginate( 20 );
        return view('dashboard.posts.index', compact('posts'));
    }


    public function create()
    {
        return view('dashboard.posts.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:60|unique:posts',
            'description' => 'min:2',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        if($request->file('image')){
            $image_path = $request->file('image');
            $image_name = time() . '-' .$image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/posts', $image_name);
            $image = 'storage/uploads/posts/'.$image_name;
        }

        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
            'user_id' => auth()->user()->id,
            'image' => $image ?? null
        ]);
        if ($post){
            $request->session()->flash('success_message', 'Successfully created!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'title' => 'required|min:2|max:60|unique:posts,title,'.$id,
            'description' => 'min:2',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'type' => $request->type,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $image_name =  time().'_'.$imagePath->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/posts', $image_name);
            $data['image'] = 'storage/uploads/posts/'.$image_name;
        }

        $post = Post::findOrFail($id);
        $post->update($data);

        if ($post){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $post = Post::find($id);
        if($post){
            $post->delete();
        }
        return redirect()->route('posts.index');
    }


    public function removeImage(Request $request)
    {
        if (Post::where('id', $request->id)->update(['image' => null])){
            return response()->json([
                'alert' => 'success',
                'message' => 'Deleted!',
            ]);
        }else{
            return response()->json([
                'alert' => 'error',
                'message' => 'Something went wrong please try again!',
            ]);
        }
    }
}
