<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $users = [
            [
                'name'=>'Beybala',
                'email'=>'beybalamuxtarov1@gmail.com',
                'password'=>bcrypt('admin1'),
                'image'=>'backend/assets/img/avatars/profile.jpg',
                'role'=>1,
            ],
            [
                'name'=>'Vaqif',
                'email'=>'vaqif@gmail.com',
                'password'=>bcrypt('admin1'),
                'image'=>'backend/assets/img/avatars/profile.jpg',
                'role'=>1,
            ],
        ];
    
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
