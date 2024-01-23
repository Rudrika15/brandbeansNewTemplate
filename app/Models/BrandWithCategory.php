<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandWithCategory extends Model
{
    use HasFactory;


    function brandCategory()
    {
        return $this->belongsTo(BrandCategory::class, 'brandCategoryId', 'id');
    }
}
