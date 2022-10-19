<?php

namespace App\Http\Controllers;

use App\Models\Collaboration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CollaborationController extends Controller
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
        $collaborations = Collaboration::paginate( 20 );
        return view('dashboard.collaborations.index', compact('collaborations'));
    }


    public function create()
    {
        return view('dashboard.collaborations.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2|max:60',
            'image' => 'required|mimes:png,jpg,jpeg',
            'url' => 'required|min:2|max:500',
        ]);

        if($request->file('image')){
            $image_path = $request->file('image');
            $image_name = time() . '-' .$image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/collaborations', $image_name);
            $image = 'storage/uploads/collaborations/'.$image_name;
        }

        if($request->file('second_image')){
            $second_image_path = $request->file('second_image');
            $second_image_name = time() . '-' .$second_image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $second_image_name = strtr($second_image_name, $trans);
            $request->file('second_image')->storeAs('public/uploads/collaborations', $second_image_name);
            $second_image = 'storage/uploads/collaborations/'.$second_image_name;
        }

        $collaboration = Collaboration::create([
            'name' => $request->name,
            'url' => $request->url,
            'image' => $image ?? null,
            'second_image' => $second_image ?? null
        ]);

        if ($collaboration){
            $request->session()->flash('success_message', 'Successfully created!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('collaborations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $collaboration = Collaboration::find($id);
        return view('dashboard.collaborations.show', compact('collaboration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $collaboration = Collaboration::find($id);
        return view('dashboard.collaborations.edit', compact('collaboration'));
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
            'url' => 'required|min:2|max:500',
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        $data = [
            'name' => $request->name,
            'url' => $request->url,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $image_name =  time().'_'.$imagePath->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/collaborations', $image_name);
            $data['image'] = 'storage/uploads/collaborations/'.$image_name;
        }

        if ($request->hasFile('second_image')) {
            $second_image_path = $request->file('second_image');
            $second_image_name =  time().'_'.$second_image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $second_image_name = strtr($second_image_name, $trans);
            $request->file('second_image')->storeAs('public/uploads/collaborations', $second_image_name);
            $data['second_image'] = 'storage/uploads/collaborations/'.$second_image_name;
        }

        $collaboration = Collaboration::where("id", $id)->update($data);

        if ($collaboration){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('collaborations.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $collaboration = Collaboration::find($id);
        if($collaboration){
            $collaboration->delete();
        }
        return redirect()->route('collaborations.index');
    }

    public function removeImage(Request $request)
    {
        try {
            if ($request->file_name == "image") {
                Collaboration::where('id', $request->id)->update(['image' => null]);
            } else if ($request->file_name == "second_image") {
                Collaboration::where('id', $request->id)->update(['second_image' => null]);
            }
            return response()->json([
                'alert' => 'success',
                'message' => 'Deleted!',
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'alert' => 'error',
                'message' => 'Something went wrong please try again!',
            ]);
        }
    }
}
