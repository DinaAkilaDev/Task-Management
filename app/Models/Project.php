<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function Tasks(){
        return $this->hasMany(Task::class,'project_id','id');
    }
    public function Employee(){
        return $this->hasMany(Employee::class,'employee_id','id');
    }
    public function Teamleader(){
        return $this->belongsTo(Employee::class,'team_leader_id','id');
    }
    public function EmployeeProject()
    {
        return $this->belongsToMany(Employee::class, 'employee_projects', 'employee_id', 'project_id');
    }
}
