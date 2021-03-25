<?php

use App\Model\CategoryRepair;
use Illuminate\Database\Seeder;

class CategoryRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $body = CategoryRepair::create([
            'name' => 'Body',
            'description' => '',
        ]);
        $machine = CategoryRepair::create([
            'name' => 'Machine',
            'description' => '',
        ]);
        $machine = CategoryRepair::create([
            'name' => 'Tire',
            'description' => '',
        ]);
    }
}
