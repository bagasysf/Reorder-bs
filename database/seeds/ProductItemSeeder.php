<?php

use Illuminate\Database\Seeder;
use App\Model\ProductItem;

class ProductItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ballpoint = ProductItem::create([
            'categoryitem_id' => '1',
            'subcategoryitem_id' => '1',
            'name' => 'Ballpoint',
            'uom' => 'Pcs',
            'description' => '',
        ]);

        $kertasa4 = ProductItem::create([
            'categoryitem_id' => '1',
            'subcategoryitem_id' => '1',
            'name' => 'Kertas A4',
            'uom' => 'Rim',
            'description' => '',
        ]);
        $kertasburama4 = ProductItem::create([
            'categoryitem_id' => '1',
            'subcategoryitem_id' => '1',
            'name' => 'Kertas Buram A4',
            'uom' => 'Rim',
            'description' => '',
        ]);
    }
}
