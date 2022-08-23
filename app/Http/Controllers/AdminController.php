<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Project;
use App\Models\Task;
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


    public function createProject()
    {
        return view('admin.addProject');
    }

    public function createTask()
    {
        return view('admin.addTask');
    }


}
