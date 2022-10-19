<?php

namespace App\Http\Controllers;

use App\Models\DataRequest;
use App\Models\Project;

class DataRequestController extends Controller
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
        $data_requests = DataRequest::paginate(20);
        return view('dashboard.data_requests.index', compact('data_requests'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     */
    public function show($id)
    {
        $data_request = DataRequest::find($id);
        $data_request->update(['status' => 1]);
        return view('dashboard.data_requests.show', compact('data_request'));
    }

    public function send($id){
        $data['request'] = DataRequest::find($id);
        $data['project'] = Project::find($data['request']->project_id);
        $data['file'] =  public_path($data['project']->data_file);

        \Mail::to($data['request']->email)->send(new \App\Mail\DataRequest($data));

//        \Mail::send('emails.request', ["details"=>$data], function($message)use($data, $file) {
//            $message->from($address = 'noreply@denovosciences.ai', $name = 'Denovo Sciences')
//                ->to($data['request']->email, $data['request']->email)
//                ->subject($data["project"]->title);
//                $message->attach($file);
//        });
        if (!\Mail::failures()) {
            return redirect()->back()->with('success', 'Mail Send Successfully!');
        }else{
            return redirect()->back()->with('error', 'Something went wrong please try again!');
        }
    }

    public function delete($id)
    {
        $data_request = DataRequest::find($id);
        if($data_request){
            $data_request->delete();
        }
        return redirect()->route('data_request.index')->with('success', 'Successfully Deleted!');
    }

}
