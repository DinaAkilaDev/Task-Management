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

class TeamLeaderController extends Controller
{
    public function index()
    {
        $projects = Project::where('team_leader_id', Auth::user()->Employee->id)->get();
        return view('teamleader.dashboard', compact('projects'));
    }

    public function project()
    {
        $projects = Project::where('team_leader_id', Auth::user()->Employee->id)->get();
        return view('teamleader.project', compact('projects'));
    }


    public function employer()
    {
        $employers = Employee::where('role', 'member')->get();
//        $id = Auth::user()->Employee->id;
//        $projects = Project::where('team_leader_id', $id)->get();
//        dd($projects);
        return view('teamleader.employer', compact('employers'));
    }

    public function task()
    {
        $tasks = Task::where('employee_id', Auth::user()->Employee->id)->get();
        return view('teamleader.task', compact('tasks'));
    }

    public function destroyEmployer($id)
    {
        $employer=Employee::findOrFail($id);
        User::findOrFail($employer->user_id)->delete();
        $employer->delete();
        return back()->with('success','Deleted Successfully!');
    }

    public function reportEmployer()
    {
        $id = Auth::user()->Employee->id;
        $employers = Employee::findOrFail($id);
        $projects = Project::where('team_leader_id', $id)->get();
        $completed_projects = Project::where('team_leader_id', $id)->where('status', 'completed')->get();
        $canceled_projects = Project::where('team_leader_id', $id)->where('status', 'canceled')->get();
        $progress_projects = Project::where('team_leader_id', $id)->where('status', 'progress')->get();
        $tasks = Task::where('employee_id', $id)->get();
        $completed_tasks = Task::where('employee_id', $id)->where('status', 'completed')->get();
        $canceled_tasks = Task::where('employee_id', $id)->where('status', 'canceled')->get();
        $progress_tasks = Task::where('employee_id', $id)->where('status', 'progress')->get();
        return view('teamleader.showReport', compact('employers', 'projects', 'tasks'
            , 'completed_projects', 'canceled_projects', 'progress_projects', 'completed_tasks', 'canceled_tasks', 'progress_tasks'));
    }

    public function createTask()
//    public function createTask($id)
    {
//        $project=Project::findOrFail($id);
        $id = Auth::user()->Employee->id;
        $projects = Project::where('team_leader_id', $id)->get();
        $employees = Employee::all();
        return view('teamleader.addTask', compact('projects', 'employees'));
    }

    public function storeTask(Request $request)
    {
        $task = new Task();
        $task->title = request('title');
        $task->description = request('description');
        $task->duration = request('duration');
        $task->status = request('status');
        $task->project_id = request('project_id');
        $task->employee_id = request('employee_id');
        $task->save();
        return back()->with('success', 'Added Successfully!');

    }

    public function editProject($id)
    {
        $project = Project::withTrashed()->findOrFail($id);
        $teamLeader = Employee::where('role', 'team_leader')->get();
        $employees=Employee::where('role','member')->get();
        return view('teamleader.editProject')->with(compact('project', 'teamLeader','employees'));
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

        for ($x = 0; $x < count(request('employee_id')); $x++) {
            $projectemployees = new EmployeeProject();
            $projectemployees->project_id  = $project->id;
            $projectemployees->employee_id  =request('employee_id')[$x];
            $projectemployees->save();
        }
        return back()->with('success', 'Updated Successfully!');
    }

    public function destroyProject($id)
    {
        Project::findOrFail($id)->delete();
        return back()->with('success', 'Deleted Successfully!');
    }

    public function editTask($id)
    {
        $task= Task::withTrashed()->findOrFail($id);
        $id = Auth::user()->Employee->id;
        $projects = Project::where('team_leader_id', $id)->get();
        $employees = Employee::all();
        return view('teamleader.editTask')->with(compact('task','projects', 'employees'));
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
        return view('teamleader.editProfile');
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
