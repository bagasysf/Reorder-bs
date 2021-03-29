<?php

use App\Model\CategoryItem;
use App\Model\CategoryRepair;
use Illuminate\Database\Seeder;

class CategoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inventory = CategoryItem::create([
            'name' => 'Inventory Goods',
            'description' => '',
        ]);
        $noninventory = CategoryItem::create([
            'name' => 'Non-inventory Goods',
            'description' => '',
        ]);
    }
}
