<?php

namespace App\Http\Controllers;

use App\Models\Collaboration;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
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
        $projects = Project::paginate(15);
        return view('dashboard.projects.index', compact('projects'));
    }


    public function create()
    {
        $collaborations = Collaboration::get();
        return view('dashboard.projects.create', compact('collaborations'));
    }


    public function store(Request $request)
    {

        if($request->file('file')){
            $data_file_path = $request->file('file');
            $data_file_name = $data_file_path->getClientOriginalName();
            $request->merge([
                'data_file' => 'storage/uploads/projects/'.$data_file_name,
            ]);
        }

        $request->validate([
            'title' => 'required|min:2|max:60|unique:projects',
            'description' => 'min:2',
            'image' => 'mimes:png,jpg,jpeg',
            'data_file' => 'unique:projects',
        ]);

        if($request->file('file')){
            $data_file_path = $request->file('file');
            $data_file_name = $data_file_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $data_file_name = strtr($data_file_name, $trans);
            $request->file('file')->storeAs('public/uploads/projects', $data_file_name);
            $data_file = 'storage/uploads/projects/'.$data_file_name;
            $request->data_file = $data_file_name;
        }

        if($request->file('image')){
            $image_path = $request->file('image');
            $image_name = time() . '-' .$image_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/projects', $image_name);
            $image = 'storage/uploads/projects/'.$image_name;

        }

        $project = Project::create([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'collaboration_id' => $request->collaboration_id,
            'description' => $request->description,
            'disease_contagion' => $request->disease_contagion,
            'disease_mortality' => $request->disease_mortality,
            'existing_drugs' => $request->existing_drugs,
            'request_title' => $request->request_title,
            'request_sub_title' => $request->request_sub_title,
            'image' => $image ?? null,
            'data_file' => $data_file ?? null
        ]);
        if ($project){
            $request->session()->flash('success_message', 'Successfully created!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $project = Project::where('id', $id)->with('collaboration')->first();
        return view('dashboard.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     */
    public function edit(int $id)
    {
        $project = Project::find($id);
        $collaborations = Collaboration::get();
        return view('dashboard.projects.edit', compact('project', 'collaborations'));
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

        if ($request->hasFile('file')) {
            $data_file_path = $request->file('file');
            $data_file =  $data_file_path->getClientOriginalName();
            $request->merge([
                'data_file' => 'storage/uploads/projects/'.$data_file,
            ]);
        }

        $request->validate([
            'title' => 'required|min:2|max:60|unique:projects,title,'.$id. ',id',
            'description' => 'min:2',
            'image' => 'mimes:png,jpg,jpeg',
            'data_file' => 'nullable|unique:projects,data_file,'.$id. ',id',
        ]);

        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'collaboration_id' => $request->collaboration_id,
            'description' => $request->description,
            'disease_contagion' => $request->disease_contagion,
            'disease_mortality' => $request->disease_mortality,
            'existing_drugs' => $request->existing_drugs,
            'request_title' => $request->request_title,
            'request_sub_title' => $request->request_sub_title,
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image');
            $image_name =  time().'_'.$imagePath->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $image_name = strtr($image_name, $trans);
            $request->file('image')->storeAs('public/uploads/projects', $image_name);
            $data['image'] = 'storage/uploads/projects/'.$image_name;

        }

        if ($request->hasFile('file')) {
            $data_file_path = $request->file('file');
            $data_file =  $data_file_path->getClientOriginalName();
            $trans = array("(" => "_", ")" => "_");
            $data_file = strtr($data_file, $trans);
            $request->file('file')->storeAs('public/uploads/projects', $data_file);
            $data['data_file'] = 'storage/uploads/projects/'.$data_file;
        }

        $project = Project::findOrFail($id);
        $project->update($data);

        if ($project){
            $request->session()->flash('success_message', 'Successfully Updated!');
        }else{
            $request->session()->flash('message', 'Something went wrong please try again!');
        }
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function delete($id)
    {
        $project = Project::find($id);
        if($project){
            $project->delete();
        }
        return redirect()->route('projects.index');
    }

    public function removeFile(Request $request)
    {
        if ($request->type === 'data_file' ){
            $column = 'data_file';
        }else{
            $column = 'image';
        }

        if (Project::where('id', $request->id)->update([$column => null])){
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
