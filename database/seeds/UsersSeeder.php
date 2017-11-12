<?php

use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::truncate();
        $user = new User();
        $user->username = 'admin';
        $user->name = 'administrador';
        $user->email = 'linux.rlm@gmail.com';
        $user->password = bcrypt('2222');
        $user->save();
    }
}
