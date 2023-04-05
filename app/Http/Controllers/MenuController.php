<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;

class MenuController extends Controller
{
    public function getFoodByCategory($food_id){
        $food = MenuModel::where(['food_category_id' => $food_id])->get();
        return $food;
    }

    public function getDrinkByCategory($drink_id){
        $drink = MenuModel::where(['drink_category_id' => $drink_id])->get();
        return $drink;
    }
}
