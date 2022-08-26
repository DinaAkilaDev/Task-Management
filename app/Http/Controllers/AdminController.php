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

class AdminController extends Controller
{
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

    public function reportEmployer($id)
    {
        $employers=Employee::findOrFail($id);
        $projects=Project::where('team_leader_id' ,$id)->get();
        $completed_projects=Project::where('team_leader_id' ,$id)->where('status','completed')->get();
        $canceled_projects=Project::where('team_leader_id' ,$id)->where('status','canceled')->get();
        $progress_projects=Project::where('team_leader_id' ,$id)->where('status','progress')->get();
        $tasks=Task::where('employee_id' ,$id)->get();
        $completed_tasks=Task::where('employee_id' ,$id)->where('status','completed')->get();
        $canceled_tasks=Task::where('employee_id' ,$id)->where('status','canceled')->get();
        $progress_tasks=Task::where('employee_id' ,$id)->where('status','progress')->get();
        return view('admin.showReport',compact('employers','projects','tasks'
            ,'completed_projects','canceled_projects','progress_projects','completed_tasks','canceled_tasks','progress_tasks'));
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
        $user->password = Hash::make(request('password'));
        $user->photo = $this->storeImage('users','photo' );
        $user->type = 'employee';
        $user->save();

        $employer = new Employee();
        $employer->name = request('name');
        $employer->mobile = request('mobile');
        $employer->job_name = request('job_name');
        $employer->role = request('role');
        $employer->user_id = $user->id;
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

    public function profile()
    {
        return view('admin.editProfile');
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


    public function updateEmployer(Request $request)
    {
        $id = request('id');
        $employer = Employee::withTrashed()->findOrFail($id);

        $user = User::withTrashed()->findOrFail($employer->user_id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');
        $user->photo = $this->storeImage('users','photo' );
        $user->type = 'employee';
        $user->save();

        $employer->name = request('name');
        $employer->mobile = request('mobile');
        $employer->job_name = request('job_name');
        $employer->role = request('role');
        $employer->user_id = $user->id;
        $employer->save();


        return back()->with('success', 'Updated Successfully!');
    }


    public function createProject()
    {
        $teamLeader=Employee::where('role','team_leader')->get();
        $employees=Employee::where('role','member')->get();
        return view('admin.addProject',compact('teamLeader','employees'));
    }
    public function storeProject(Request $request)
    {
        $project = new Project();
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
        $employees=Employee::where('role','member')->get();
        return view('admin.editProject')->with(compact('project', 'teamLeader','employees'));
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



}
