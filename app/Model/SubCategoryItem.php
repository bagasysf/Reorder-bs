<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategoryItem extends Model
{
    protected $guarded = [];
    public function categoryitem()
    {
        return $this->belongsTo(CategoryItem::class, 'categoryitem_id');
    }
}
