<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function Project(){
        return $this->belongsTo(Project::class,'project_id');
    }
    public function User(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Projectleader(){
        return $this->hasOne(Project::class,'team_leader_id','id');
    }
    public function Task(){
        return $this->hasOne(Task::class,'employee_id','id');
    }
}
