<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodCategoryModel;

class FoodCategoryController extends Controller
{
    public function getAll() {
        return FoodCategoryModel::all();
    }
}
