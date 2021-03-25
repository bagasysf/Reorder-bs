<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategoryRepair extends Model
{
    protected $guarded = [];
    public function categoryrepair()
    {
        return $this->belongsTo(CategoryRepair::class, 'categoryrepair_id');
    }
}
