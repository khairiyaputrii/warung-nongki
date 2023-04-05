<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showRegister(){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        return view('content.registerPage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories
            ]);
    }

    function showLogin(){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        return view('content.loginPage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories
            ]);
    }

    function showHome(){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        $userController = new UserController;
        $userInformation = $userController->getUserInformation();

        return view('content.homePage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories,
                'userInformation' => $userInformation
            ]);
    }

    function showFood($food_id){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        $menuController = new MenuController;
        $menu = $menuController->getFoodByCategory($food_id);

        return view('content.foodPage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories,
                'menu' => $menu
            ]);
    }

    function showDrink($drink_id){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        $menuController = new MenuController;
        $menu = $menuController->getDrinkByCategory($drink_id);

        return view('content.drinkPage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories,
                'menu' => $menu
            ]);
    }

    function showProfile(){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        $userController = new UserController;
        $userInformation = $userController->getUserInformation();

        return view('content.profilePage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories,
                'userInformation' => $userInformation
            ]);
    }

    function showEditProfile(){
        $foodCategoryController = new FoodCategoryController;
        $foodCategories = $foodCategoryController->getAll();

        $drinkCategoryController = new DrinkCategoryController;
        $drinkCategories = $drinkCategoryController->getAll();

        $userController = new UserController;
        $userInformation = $userController->getUserInformation();

        return view('content.editProfilePage',[
                'foodCategories' => $foodCategories,
                'drinkCategories' => $drinkCategories,
                'userInformation' => $userInformation
            ]);
    }
}
