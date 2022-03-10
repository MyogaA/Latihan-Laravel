<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Laravel\Passport\HasApiTokens; 

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::creat([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123456)
        ]);
        
        $admin->assingRole('admin');

        $user = User::creat([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => bcrypt(123456)
        ]);
        $user->assingRole('user');
    }
}
