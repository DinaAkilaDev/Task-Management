<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //`id`, `name`, `email`, `mobile`, `password`, `job_name`, `role`, `created_at`, `updated_at`
        $employee=new Employee();
        $employee->name='Mohammed';
        $employee->mobile='0597501177';
        $employee->job_name='BackEnd Developer';
        $employee->role='team_leader';
        $employee->user_id=3;
        $employee->save();


        $employee1=new Employee();
        $employee1->name='Ahmed';
        $employee1->mobile='0598441177';
        $employee1->job_name='Laravel Developer';
        $employee1->role='member';
        $employee1->user_id=2;
        $employee1->save();


        $employee2=new Employee();
        $employee2->name='Foaud';
        $employee2->mobile='0598889977';
        $employee2->job_name='React Developer';
        $employee2->role='member';
        $employee2->user_id=4;
        $employee2->save();
    }
}
