<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MenuModel extends Model
{
    use HasFactory;

    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'price', 'pic_file', 'food_category_id', 'drink_category_id'];

    public function foodCategory(): BelongsTo
    {
        return $this->belongsTo(FoodCategoryModel::class);
    }

    public function drinkCategory(): BelongsTo
    {
        return $this->belongsTo(DrinkCategoryModel::class);
    }
}
