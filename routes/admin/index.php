<?php

use Illuminate\Support\Facades\Route;


Route::get("/",[\App\Http\Controllers\Admin\AdminController::class,"index"]);


Route::group(['prefix'=>"/users",'as'=>"users.","middleware"=>"auth"],base_path("routes/admin/users.php"));

Route::group(['prefix'=>"/categories",'as'=>"categories.","middleware"=>"auth"],base_path("routes/admin/categories.php"));

Route::group(['prefix'=>"/posts",'as'=>"posts.","middleware"=>"auth"],base_path("routes/admin/posts.php"));

Route::group(['prefix'=>"/users",'as'=>"users.","middleware"=>"auth"],base_path("routes/admin/tags.php"));



