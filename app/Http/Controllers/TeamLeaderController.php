<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamLeaderController extends Controller
{
    public function index()
    {
        $projects=Project::where('team_leader_id',Auth::user()->Employee->id)->get();
        return view('teamleader.dashboard',compact('projects'));
    }

    public function project()
    {
        $projects=Project::where('team_leader_id',Auth::user()->Employee->id)->get();
        return view('teamleader.project',compact('projects'));
    }


    public function employer()
    {
        $employers=Employee::all();
        return view('teamleader.employer',compact('employers'));
    }

    public function task()
    {
        $tasks=Task::where('employee_id',Auth::user()->Employee->id)->get();
        return view('teamleader.task',compact('tasks'));
    }

    public function reportEmployer()
    {
        $id=Auth::user()->Employee->id;
        $employers=Employee::findOrFail($id);
        $projects=Project::where('team_leader_id' ,$id)->get();
        $completed_projects=Project::where('team_leader_id' ,$id)->where('status','completed')->get();
        $canceled_projects=Project::where('team_leader_id' ,$id)->where('status','canceled')->get();
        $progress_projects=Project::where('team_leader_id' ,$id)->where('status','progress')->get();
        $tasks=Task::where('employee_id' ,$id)->get();
        $completed_tasks=Task::where('employee_id' ,$id)->where('status','completed')->get();
        $canceled_tasks=Task::where('employee_id' ,$id)->where('status','canceled')->get();
        $progress_tasks=Task::where('employee_id' ,$id)->where('status','progress')->get();
        return view('teamleader.showReport',compact('employers','projects','tasks'
            ,'completed_projects','canceled_projects','progress_projects','completed_tasks','canceled_tasks','progress_tasks'));
    }
}
