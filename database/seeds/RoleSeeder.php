<?php

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'user',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'warehouse',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'housekeeping',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'maintenance',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'mechanic',
            'guard_name' => 'web'
        ]);
    }
}
