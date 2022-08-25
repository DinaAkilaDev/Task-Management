<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamLeaderController extends Controller
{
    public function index()
    {
        $projects=Project::where('team_leader_id',Auth::user()->Employee->id);
        return view('teamleader.dashboard',compact('projects'));
    }


    public function employer()
    {
        $employers=Employee::all();
        return view('teamleader.employer',compact('employers'));
    }
}
