<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        `id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`
        $user=new User();
        $user->name='admin';
        $user->email='admin@admin.com';
        $user->password=123456;
        $user->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';

    }
}
