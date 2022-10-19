<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::with('collaboration')->paginate(9);
        return response()->json(compact('projects'));
    }

    public function projectByTitle($title){
        $project = Project::where("title", $title)->with('collaboration')->first();
        return response()->json(compact('project'));
    }
}

