<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`id`, `title`, `description`, `status`, `duration`, `project_id`
        $task=new Task();
        $task->title='Laravel Build Project';
        $task->description='Build project , db and relations';
        $task->status='progress';
        $task->duration=5;
        $task->project_id=1;
        $task->save();


        $task1=new Task();
        $task1->title='Laravel Code Project';
        $task1->description='Start download libraries';
        $task1->status='progress';
        $task1->duration=5;
        $task1->project_id=1;
        $task1->save();
    }
}
