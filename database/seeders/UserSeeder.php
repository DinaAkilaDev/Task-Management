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
        $user->password=bcrypt(123456);
        $user->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $user->type='admin';
        $user->save();


        $user1=new User();
        $user1->name='Ahmed';
        $user1->email='ahmed@gmail.com';
        $user1->password=bcrypt(123456);
        $user1->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $user1->type='employee';
        $user1->save();



        $user2=new User();
        $user2->name='Mohammed';
        $user2->email='mohammed@gmail.com';
        $user2->password=bcrypt(123456);
        $user2->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $user2->type='employee';
        $user2->save();



        $user3=new User();
        $user3->name='Foaud';
        $user3->email='foaud@gmail.com';
        $user3->password=bcrypt(123456);
        $user3->photo='https://cdn-icons-png.flaticon.com/512/219/219983.png';
        $user3->type='employee';
        $user3->save();

    }
}
