<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'User Role',
            'email' => 'user@role.test',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('user');

        $warehouse = User::create([
            'name' => 'Warehouse Role',
            'email' => 'warehouse@role.test',
            'password' => bcrypt('12345678')
        ]);

        $warehouse->assignRole('warehouse');

        $housekeeping = User::create([
            'name' => 'Housekeeping Role',
            'email' => 'housekeeping@role.test',
            'password' => bcrypt('12345678')
        ]);

        $housekeeping->assignRole('housekeeping');

        $maintenance = User::create([
            'name' => 'Maintenance Role',
            'email' => 'maintenance@role.test',
            'password' => bcrypt('12345678')
        ]);

        $maintenance->assignRole('maintenance');

        $mechanic = User::create([
            'name' => 'Mechanic Role',
            'email' => 'mechanic@role.test',
            'password' => bcrypt('12345678')
        ]);

        $mechanic->assignRole('mechanic');
    }
}
