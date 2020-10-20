<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');

        Role::create(['name' => 'user']);
        /** @var \App\User $user */
        $user = \App\Models\User::factory()->create([
            'name' => 'user',
            'email' => 'test@test.com'
        ]);

        $user->assignRole('user');

        Role::create(['name' => 'admin']);

        /** @var \App\User $user */
        $admin = \App\Models\User::factory()->create([
            'name'  => 'admin',
            'email' => 'admin@admin.com'
        ]);

        $admin->assignRole('admin');
    }
}
