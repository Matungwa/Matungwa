<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\logginginController;
use App\Http\Controllers\registrationController;
use App\Http\Controllers\newhomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [homeController::class,'homeIndex']
);
Route::get('/login', [logginginController::class,'logginginIndex']
);
Route::get('/registration', [registrationController::class,'registrationIndex']
);
Route::get('/newhome', [newhomeController::class,'newhomeIndex']
);
