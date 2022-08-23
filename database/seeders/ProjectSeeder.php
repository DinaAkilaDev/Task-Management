<?php

namespace Database\Seeders;

use App\Models\EmployeeProject;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`id`, `title`, `description`, `team_leader`, `created_at`, `updated_at`
        $project=new Project();
        $project->title='React & Laravel';
        $project->description='Website designing and development using react.js and LARAVEL , video player, user login, playlist creation for videos, etc ..';
        $project->team_leader_id=1;
        $project->save();

        $employeeProject=new EmployeeProject();
        $employeeProject->project_id=1;
        $employeeProject->employee_id=1;
        $employeeProject->save();



        $employeeProject1=new EmployeeProject();
        $employeeProject1->project_id=1;
        $employeeProject1->employee_id=2;
        $employeeProject1->save();



        $employeeProject2=new EmployeeProject();
        $employeeProject2->project_id=1;
        $employeeProject2->employee_id=3;
        $employeeProject2->save();

    }
}
