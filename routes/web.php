<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\setting;
use App\Http\Controllers\settingController;
use SebastianBergmann\Type\NullType;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('profiles' , profileController::class);





Route::middleware('guest')->group(function()
{
    Route::get("/login", [LoginController::class, "show"])->name("login.show");
    Route::post("/login", [LoginController::class, "login"])->name("login");
    Route::get("/register" ,[LoginController::class , "create" ])->name("register.show");
    Route::post("/register" ,[LoginController::class , "store" ])->name("register.post");
});



    Route::get("/", [homeController::class, "index"])->name("homePage");
    Route::get("/logout", [LoginController::class, "logout"])->name("logout");
    Route::get("/settings", [settingController::class,"index"])->name("settings.index");


    Route::get("/route/{age?}" , function($age = NULL)
    {
    //    if(empty($age)){
    //     return "age inconu";
    //    }else
    //    {
    //     return 'age '.$age;
    //    }

    // dd(Route::current());
    // dd(Route::currentRouteName());
    dd(Route::currentRouteAction());
    }
)->name("route");

Route::get("/google" ,function()
{
    return redirect()->away("https://www.google.com");
});

// Route::view("/view" , )
