<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleNames = ['publisher', 'editor', 'destroyer'];

        foreach ($roleNames as $roleName) {
            Role::create(['name' => $roleName]);
        }

        $user = User::create([
            'name'=>'Admin',
            'email'=>'serfelicap@gmail.com',
            'password'=>bcrypt('admin!'),
            'image'=>'backend/assets/img/avatars/profile.jpg',
            'role'=>1,
        ]);

        $user->assignRole($roleNames);
    }
}
