<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    protected $guarded = [];

    public function subcategoryitem()
    {
        return $this->belongsTo(SubCategoryItem::class, 'subcategoryitem_id');
    }
}
