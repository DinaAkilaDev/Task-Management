<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EmployeeProject extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function Project(){
        return $this->belongsTo(Project::class,'project_id');
    }
}
