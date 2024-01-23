<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardsModels extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'heading', 'companyname', 'location', 'about'];
    protected $table = 'cards';


    public function categoryDetails()
    {
        return $this->hasOne(Category::class('id', 'category'));
    }

    public function linksData()
    {
        return $this->hasMany(Link::class('card_id', 'id'));
    }

    function cardPortfolio()
    {
        return $this->hasMany(Cardportfoilo::class, 'card_id', 'id');
    }
}
