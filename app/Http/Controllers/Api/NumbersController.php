<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Number;

class NumbersController extends Controller
{
    public function index()
    {
        $numbers = Number::paginate(20);
        return response()->json(compact('numbers'));
    }
}

