<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Technology;

class TechnologiesController extends Controller
{
    public function index()
    {
        $technologies = Technology::paginate(20);
        return response()->json(compact('technologies'));
    }
}

