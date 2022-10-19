<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TechnologyController extends Controller
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
        $technologies = Technology::paginate(15);
        return view('dashboard.technologies.index', compact('technologies'));
    }


    public function create()
    {
        return view('dashboard.technologies.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:60',
            'description' => 'min:2|max:500',
            'discovery' => 'min:2|max:60',
            'text' => 'min:2|max:500',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        if($request->file('image')){
            $image_path = $request->file('image');
            $image_name = time() . '-' .$image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/technologies', $image_name);
        }

        $member = Technology::create([
            'name' => $request->name,
            'description' => $request->description,
            'discovery' => $request->discovery,
            'text' => $request->text,
            'image' => $image_name ?? null
        ]);
        if ($member){
            $request->session()->flash('success_message', 'Successfully created!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('technologies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $technology = Technology::find($id);
        return view('dashboard.technologies.show', compact('technology'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $technology = Technology::find($id);
        return view('dashboard.technologies.edit', compact('technology'));
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
            'name' => 'required|min:2|max:60',
            'description' => 'min:2|max:500',
            'discovery' => 'min:2|max:60',
            'text' => 'min:2|max:500',
            'image' => 'mimes:png,jpg,jpeg|max:2048',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'discovery' => $request->discovery,
            'text' => $request->text,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $image_name =  time().'_'.$imagePath->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/technologies', $image_name);
            $data['image'] = $image_name;
        }
        $technology = Technology::findOrFail($id);
        $technology->update($data);

        if ($technology){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('technologies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $technology = Technology::find($id);
        if($technology){
            $technology->delete();
        }
        return redirect()->route('technologies.index');
    }

    public function removeImage(Request $request)
    {
        if (Technology::where('id', $request->id)->update(['image' => null])){
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
