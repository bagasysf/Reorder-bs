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
        $electrical = CategoryRepair::create([
            'name' => 'Electrical',
            'description' => '',
        ]);
        $machine = CategoryRepair::create([
            'name' => 'Machine',
            'description' => '',
        ]);
        $tire = CategoryRepair::create([
            'name' => 'Tire',
            'description' => '',
        ]);
    }
}
