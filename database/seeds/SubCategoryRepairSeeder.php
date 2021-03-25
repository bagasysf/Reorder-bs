<?php

use App\Model\SubCategoryRepair;
use Illuminate\Database\Seeder;

class SubCategoryRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Accu = SubCategoryRepair::create([
            'categoryrepair_id' => '1',
            'name' => 'Accu',
            'description' => '',
        ]);
    }
}
