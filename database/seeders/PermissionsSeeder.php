<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'admin']);
        $role3 = Role::create(['name' => 'writer']);

        // create permissions
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'read articles']);
        Permission::create(['name' => 'update articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // assign permissions to roles
        $role3->givepermissionto('create articles', 'read articles', 'update articles', 'delete articles');



        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),

        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($role2);
    }
}
