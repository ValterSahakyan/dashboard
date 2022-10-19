<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Project;
use App\Models\TeamMembers;
use App\Models\Technology;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = TeamMembers::get()->count();
        $technologies = Technology::get()->count();
        $projects = Project::get()->count();
        $posts = Post::get()->count();
        return view('dashboard.homepage',  compact('members', 'technologies', 'projects', 'posts'));
    }

}
