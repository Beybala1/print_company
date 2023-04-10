<?php

namespace Database\Seeders;

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
        // Reset cached roles and permissions
        /* app()[\Spatie\Permission\PermissionRegistrar::class]
            ->forgetCachedPermissions();

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo('create');
        $role->givePermissionTo('edit');
        $role->givePermissionTo('destroy'); */

        $roles = [
            'publisher',
            'editor',
            'destroyer',
            /* 'admin', */
        ]; 

        $permissions = [
            'create',
            'edit',
            'destroy',
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        foreach ($permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
            
        }
    }
}
