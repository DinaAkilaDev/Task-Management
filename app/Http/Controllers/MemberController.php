<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeProject;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    public function index()
    {
        $projects = EmployeeProject::where('employee_id',Auth::user()->Employee->id)->get();
        return view('member.dashboard', compact('projects'));
    }

    public function project()
    {
        $projects = EmployeeProject::where('employee_id',Auth::user()->Employee->id)->get();
        return view('member.project', compact('projects'));
    }

    public function task()
    {
        $tasks = Task::where('employee_id', Auth::user()->Employee->id)->get();
        return view('member.task', compact('tasks'));
    }

//    public function createTask()
////    public function createTask($id)
//    {
////        $project=Project::findOrFail($id);
//        $id = Auth::user()->Employee->id;
//        $projects = Project::where('team_leader_id', $id)->get();
//        $employees = Employee::all();
//        return view('member.addTask', compact('projects', 'employees'));
//    }
//
//    public function storeTask(Request $request)
//    {
//        $task = new Task();
//        $task->title = request('title');
//        $task->description = request('description');
//        $task->duration = request('duration');
//        $task->status = request('status');
//        $task->project_id = request('project_id');
//        $task->employee_id = request('employee_id');
//        $task->save();
//        return back()->with('success', 'Added Successfully!');
//
//    }

    public function editTask($id)
    {
        $task= Task::withTrashed()->findOrFail($id);
        $id = Auth::user()->Employee->id;
        $projects = Project::where('team_leader_id', $id)->get();
        $employees = Employee::all();
        return view('member.editTask')->with(compact('task','projects', 'employees'));
    }


    public function updateTask(Request $request)
    {
        $id = request('id');
        $task =Task::withTrashed()->findOrFail($id);
        $task->title = request('title');
        $task->description = request('description');
        $task->duration = request('duration');
        $task->status = request('status');
        $task->project_id = request('project_id');
        $task->employee_id = request('employee_id');
        $task->save();
        return back()->with('success', 'Updated Successfully!');
    }

    public function destroyTask($id)
    {
        Task::findOrFail($id)->delete();
        return back()->with('success', 'Deleted Successfully!');
    }


    public function profile()
    {
        return view('member.editProfile');
    }

    public function relatedTask($id)
    {
        $project=Project::findorfail($id);
        $tasks=Task::where('project_id',$id)->where('employee_id',Auth::user()->Employee->id)->get();
        $employer=Auth::user()->name;
        return view('member.relatedTask' ,compact('project','employer','tasks'));
    }

    public function updateProfile(Request $request)
    {
        $id = request('id');
        $user = User::findOrFail($id);
        $user->name = request('name');
        $user->email  = request('email');
        $user->password  = Hash::make(request('password'));
        $user->photo = $this->storeImage('users','photo' );
        $user->type = Auth::user()->type == 'admin'? 'admin': 'employee';
        $user->save();
        return back()->with('success', 'Updated Successfully!');
    }

    function storeImage($folder, $file_name, $is_file = null)
    {
        if ($is_file) {
            $file = $file_name;
        } else {
            if (!request()->hasFile($file_name)) return null;

            $file = request()->file($file_name);
        }
        return Storage::disk('public')->put($folder, $file);
    }
}
