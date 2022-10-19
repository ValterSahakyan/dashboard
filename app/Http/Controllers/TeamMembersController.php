<?php

namespace App\Http\Controllers;

use App\Models\TeamMembers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMembersController extends Controller
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
        $members = TeamMembers::paginate(20);
        return view('dashboard.team-members.index', compact('members'));
    }


    public function create()
    {
        return view('dashboard.team-members.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:4|max:100',
            'last_name' => 'required|min:4|max:100',
            'position' => 'required|min:2|max:100',
            'image' => 'mimes:png,jpg,jpeg',
            'email' => 'required|email|unique:team_members'
        ]);

        if($request->file('image')){
            $image_path = $request->file('image');
            $image_name = time() . '-' .$image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/team_members', $image_name);
            $image = 'storage/uploads/team_members/'.$image_name;
        }

        $member = TeamMembers::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'about' => $request->about,
            'email' => $request->email,
            'image' => $image ?? null,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
        ]);
        if ($member){
            $request->session()->flash('success_message', 'Successfully added member information!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('team_members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $member = TeamMembers::find($id);
        return view('dashboard.team-members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $member = TeamMembers::find($id);
        return view('dashboard.team-members.edit', compact('member'));
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
            'first_name' => 'required|min:4|max:100',
            'last_name' => 'required|min:4|max:100',
            'position' => 'required|min:2|max:100',
            'image' => 'mimes:png,jpg,jpeg',
            'email' => 'required|email|unique:team_members,email,'.$id
        ]);

        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'position' => $request->position,
            'about' => $request->about,
            'email' => $request->email,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $image_name =  time().'_'.$imagePath->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/team_members', $image_name);
            $data['image'] = 'storage/uploads/team_members/'.$image_name;
        }
        $member = TeamMembers::findOrFail($id);
        $member->update($data);

        if ($member){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('team_members.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $member = TeamMembers::find($id);
        if($member){
            $member->delete();
        }
        return redirect()->route('team_members.index');
    }

    public function removeImage(Request $request)
    {
        if (TeamMembers::where('id', $request->id)->update(['image' => null])){
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
