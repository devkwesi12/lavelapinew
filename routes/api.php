<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/hello',function(){
    return ["message" => "Hello Api"];
});


Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
Route::get('/posts/{id}',[PostController::class,'show'])->name('posts.show');


Route::prefix('v1')->group(function(){

    Route::apiResource('blogs',BlogController::class);

});
//Route::apiResource('blogs',BlogController::class);