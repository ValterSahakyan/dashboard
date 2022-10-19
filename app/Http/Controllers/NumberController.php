<?php

namespace App\Http\Controllers;

use App\Models\Number;
use Illuminate\Http\Request;

class NumberController extends Controller
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
        $numbers = Number::paginate( 20 );
        return view('dashboard.numbers.index', compact('numbers'));
    }


    public function create()
    {
        return view('dashboard.numbers.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2|max:60',
            'description' => 'required|min:2|max:500',
            'percent' => 'required|min:2|max:100',
        ]);

        $number = Number::create([
            'title' => $request->title,
            'description' => $request->description,
            'percent' => $request->percent,
        ]);
        if ($number){
            $request->session()->flash('success_message', 'Successfully created!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('numbers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $number = Number::find($id);
        return view('dashboard.numbers.show', compact('number'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $number = Number::find($id);
        return view('dashboard.numbers.edit', compact('number'));
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
            'description' => 'required|min:2|max:500',
            'percent' => 'required|min:2|max:100',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'percent' => $request->percent,
        ];

        $number = Number::findOrFail($id);
        $number->update($data);

        if ($number){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('numbers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $number = Number::find($id);
        if($number){
            $number->delete();
        }
        return redirect()->route('numbers.index');
    }
}
