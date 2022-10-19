<?php

namespace App\Http\Controllers;

use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
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
        $careers = Career::paginate(15);
        return view('dashboard.careers.index', compact('careers'));
    }


    public function create()
    {
        return view('dashboard.careers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:60',
            'deadline' => 'required',
            'location' => 'required',
            'level' => 'required',
            'term' => 'required',
            'description' => 'required',
        ]);

        $career = Career::create([
            'title' => $request->title,
            'deadline' => $request->deadline,
            'location' => $request->location,
            'level' => $request->level,
            'term' => $request->term,
            'description' => $request->description,
            'responsibilities' => $request->responsibilities,
            'qualifications' => $request->qualifications,
            'apply' => $request->apply,
        ]);

        if ($career){
            $request->session()->flash('success_message', 'Successfully created!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('careers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $career = Career::find($id);
        return view('dashboard.careers.show', compact('career'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $career = Career::find($id);
        return view('dashboard.careers.edit', compact('career'));
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
            'title' => 'required|min:2|max:60',
            'deadline' => 'required',
            'location' => 'required',
            'level' => 'required',
            'term' => 'required',
            'description' => 'required',
        ]);

        $career = Career::where('id', $id)->update([
            'title' => $request->title,
            'deadline' => $request->deadline,
            'location' => $request->location,
            'level' => $request->level,
            'term' => $request->term,
            'description' => $request->description,
            'responsibilities' => $request->responsibilities,
            'qualifications' => $request->qualifications,
            'apply' => $request->apply,
        ]);

        if ($career){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('careers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $career = Career::find($id);
        if($career){
            $career->delete();
        }
        return redirect()->route('careers.index');
    }

}
