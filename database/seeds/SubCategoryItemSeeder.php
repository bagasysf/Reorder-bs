<?php

use App\Model\SubCategoryItem;
use Illuminate\Database\Seeder;

class SubCategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $atk = SubCategoryItem::create([
            'categoryitem_id' => '1',
            'name' => 'ATK & Stationary Tools',
            'description' => '',
        ]);

        $packing = SubCategoryItem::create([
            'categoryitem_id' => '1',
            'name' => 'Packing & Printing Tools',
            'description' => '',
        ]);

        $repair = SubCategoryItem::create([
            'categoryitem_id' => '1',
            'name' => 'Repair & Maintenance Tools',
            'description' => '',
        ]);
    }
}
