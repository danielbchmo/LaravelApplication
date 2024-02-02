<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

//Change the folder where you'll see the index.
/*Route::get('/', function () {
    return view('task.index');
});*/

Route::get('/',[TaskController::class,'index']);
Route::post('/',[TaskController::class,'store']);