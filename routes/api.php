<?php

use App\Http\Controllers\ExampleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/example",[ExampleController::class,"index"]);
Route::post("/example",[ExampleController::class,"store"]);
Route::put("/example/{id}",[ExampleController::class,"update"]);
Route::delete("/example/{id}",[ExampleController::class,"delete"]);
