<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DrinkCategoryModel;

class DrinkCategoryController extends Controller
{
    public function getAll() {
        return DrinkCategoryModel::all();
    }
}
