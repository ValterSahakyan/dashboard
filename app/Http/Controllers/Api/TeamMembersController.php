<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TeamMembers;

class TeamMembersController extends Controller
{
    public function index()
    {
        $members = TeamMembers::get();
        return response()->json(compact('members'));
    }

    public function memberById($id){
        $member = TeamMembers::find($id);
        return response()->json(compact('member'));
    }
}

