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
        $employee->email='mohammed@gmail.com';
        $employee->mobile='0597501177';
        $employee->password=bcrypt(123456);
        $employee->job_name='BackEnd Developer';
        $employee->role='team_leader';
        $employee->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $employee->save();


        $employee1=new Employee();
        $employee1->name='Ahmed';
        $employee1->email='ahmed@gmail.com';
        $employee1->mobile='0598441177';
        $employee1->password=bcrypt(123456);
        $employee1->job_name='Laravel Developer';
        $employee1->role='member';
        $employee1->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $employee1->save();


        $employee2=new Employee();
        $employee2->name='Foaud';
        $employee2->email='foaud@gmail.com';
        $employee2->mobile='0598889977';
        $employee2->password=bcrypt(123456);
        $employee2->job_name='React Developer';
        $employee2->role='member';
        $employee2->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $employee2->save();
    }
}
