<?php

use Illuminate\Support\Facades\Route;


Route::get('/',             [App\Http\Controllers\Admin\TagController::class,'index'   ])->name('index');
Route::get('/show/{id}',    [App\Http\Controllers\Admin\TagController::class,'show'    ])->name('show');
Route::get('/create',       [App\Http\Controllers\Admin\TagController::class,'create'  ])->name('create');
Route::get('/edit/{id}',    [App\Http\Controllers\Admin\TagController::class,'edit'    ])->name('edit');
Route::post('/store',       [App\Http\Controllers\Admin\TagController::class,'store'   ])->name('store');
Route::post('/update/{id}', [App\Http\Controllers\Admin\TagController::class,'update'  ])->name('update');
Route::post('/destroy/{id}',[App\Http\Controllers\Admin\TagController::class,'destroy'])->name('destroy');
Route::post('/all/delete',[App\Http\Controllers\Admin\TagController::class,'all_delete'])->name('all_delete');

