<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Collaboration;

class CollaborationsController extends Controller
{
    public function index()
    {
        $collaborations = Collaboration::get();
        return response()->json(compact('collaborations'));
    }
}

