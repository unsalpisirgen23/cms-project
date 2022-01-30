<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>"/admin",'as'=>"admin.","middleware"=>"auth"],base_path("routes/admin/index.php"));
