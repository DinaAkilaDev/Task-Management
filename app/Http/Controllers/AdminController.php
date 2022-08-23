<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $projects=Project::all();
        return view('home',compact('projects'));
    }

    public function employer()
    {
        $employers=Employee::all();
        return view('admin.employer',compact('employers'));
    }

    public function project()
    {
        $projects=Project::all();
        return view('admin.project',compact('projects'));
    }

    public function task()
    {
        $tasks=Task::all();
        return view('admin.task',compact('tasks'));
    }

    public function createEmployer()
    {
        return view('admin.addEmployer');
    }

    public function storeEmployer(Request $request)
    {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->photo = storeImage('users','photo' );
        $user->type = 'employee';
        $user->save();

        $employer = new Employee();
        $employer->name = request('name');
        $employer->mobile = request('mobile');
        $employer->job_name = request('job_name');
        $employer->role = request('role');
        $employer->user_id = request('user_id');
        $employer->save();
        return back()->with('success','Added Successfully!');

    }
    public function destroyEmployer($id)
    {
        $employer=Employee::findOrFail($id);
        User::findOrFail($employer->user_id)->delete();
        $employer->delete();
        return back()->with('success','Deleted Successfully!');
    }

    public function editEmployer($id)
    {
        $employee = Employee::withTrashed()->findOrFail($id);
        return view('admin.editEmployer')->with(compact('employee'));
    }


    public function updateEmployer(Request $request)
    {
        $id = request('id');
        $employer = Employee::withTrashed()->findOrFail($id);
        $employer->name = request('name');
        $employer->mobile = request('mobile');
        $employer->job_name = request('job_name');
        $employer->role = request('role');
        $employer->user_id = request('user_id');
        $employer->save();

        $user = User::withTrashed()->findOrFail($employer->user_id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->photo = storeImage('users','photo' );
        $user->type = 'employee';
        $user->save();


        return back()->with('success', 'Updated Successfully!');
    }


    public function createProject()
    {
        $teamLeader=Employee::where('role','team_leader')->get();
        return view('admin.addProject',compact('teamLeader'));
    }
    public function storeProject(Request $request)
    {
        $project = new Project();
        $project->title = request('title');
        $project->description = request('description');
        $project->team_leader_id = request('team_leader_id');
        $project->status = request('status');
        $project->save();
        return back()->with('success','Added Successfully!');

    }

    public function createTask()
    {
        return view('admin.addTask');
    }
    public function destroyProject($id)
    {
        Project::findOrFail($id)->delete();
        return back()->with('success','Deleted Successfully!');
    }


    public function editProject($id)
    {
        $project = Project::withTrashed()->findOrFail($id);
        $teamLeader=Employee::where('role','team_leader')->get();
        return view('admin.editProject')->with(compact('project', 'teamLeader'));
    }


    public function updateProject(Request $request)
    {
        $id = request('id');
        $project = Project::withTrashed()->findOrFail($id);
        $project->title = request('title');
        $project->description = request('description');
        $project->team_leader_id = request('team_leader_id');
        $project->status = request('status');
        $project->save();
        return back()->with('success', 'Updated Successfully!');
    }



}
