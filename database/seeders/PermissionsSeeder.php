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

        $avatar = 'https://ui-avatars.com/api/?name=';
        $role1 = Role::create(['name' => 'user']);
        $role2 = Role::create(['name' => 'super-admin']);
        $role3 = Role::create(['name' => 'writer']);
        $role4 = Role::create(['name' => 'admin']);

        // create permissions
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'read articles']);
        Permission::create(['name' => 'update articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);
        // create permission for admin
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);
        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);
        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);


        // assign permissions to roles
        $role3->givepermissionto('create articles', 'read articles', 'update articles', 'delete articles');
        $role2->givepermissionto('create users', 'read users', 'update users', 'delete users', 'create roles', 'read roles', 'update roles', 'delete roles', 'create permissions', 'read permissions', 'update permissions', 'delete permissions');



        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
            // join string avatar

        ]);
        $user->assignRole($role1);
        // super admin
        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($role2);

        // writer
        $user = \App\Models\User::factory()->create([
            'name' => 'Writer',
            'email' => 'writer@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($role3);

        // admin
        $user = \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole($role4);
    }
}
