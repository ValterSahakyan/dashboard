<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Career;

class CareersController extends Controller
{
    public function index()
    {
        $careers = Career::paginate(10);
        return response()->json(compact('careers'));
    }

    public function careerById($id){
        $career = Career::find($id);
        return response()->json(compact('career'));
    }
}

