<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            PermissionsSeeder::class,
            PostSeeder::class,
        ]);
        $user = User::factory(30)->create();
        $user->each(function ($user) {
            $user->assignRole('user');
        });
    }
}
