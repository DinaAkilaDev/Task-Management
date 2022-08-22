<?php

namespace Database\Seeders;

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
        $project->title='Website designing and development using react.js and LARAVEL';
        $project->description='Website designing and development using react.js and LARAVEL , video player, user login, playlist creation for videos, etc ..';
        $project->employee_id=1;
        $project->save();
    }
}
