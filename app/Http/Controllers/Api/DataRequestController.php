<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataRequestController extends Controller
{
    public function request(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name'=>'required|min:4|max:60',
            'last_name'=>'required|min:4|max:60',
            'email'=>'required|email',
            'company_name'=>'required',
            'job_title'=>'required',
            'message'=>'required|min:4|max:600',
        ]);

        if ($validator->fails())
        {
            $message = $validator->messages();
            return response()->json([
                'statusCode'=>200,
                'success'=>false,
                'message'=>$message
            ], 200);
        }

        $data = [
            'project_id' => $request->project_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'job_title' => $request->job_title,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        try {
            DataRequest::create($data);
            $project = Project::find($request->project_id);
            $data['project_name'] = $project->name;

            \Mail::to('info@denovosciences.ai')->send(new \App\Mail\Mail($data));
            \Mail::to($request->email)->send(new \App\Mail\FeedbackMail($data));
            return response()->json([
                'statusCode' => 200,
                'success' => true,
                'res_message' => 'Successfully Sent!'
            ]);

        } catch (\Throwable $e) {
            return response()->json([
                'statusCode' => 200,
                'success' => false,
                'res_message' => 'Something went wrong please try again!'
            ]);
        }
    }
}

