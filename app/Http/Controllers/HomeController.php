<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->type =='admin'){
            $projects=Project::all();
            return view('home',compact('projects'));
        }
        else{
//            dd(Auth::user()->Employee->Project);
            if (Auth::user()->Employee->role == 'member'){
//                $projects=Project::where('team_leader_id',Auth::user()->Employee->Projectleader->id);
                return view('member.dashboard');
            }else{
//                $projects=Project::where('team_leader_id',Auth::user()->Employee->Projectleader->id);
                return view('teamleader.dashboard');
            }

        }

    }
}
