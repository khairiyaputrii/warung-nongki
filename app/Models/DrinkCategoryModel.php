<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrinkCategoryModel extends Model
{
    use HasFactory;

    protected $table = 'drink_category';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];
}
