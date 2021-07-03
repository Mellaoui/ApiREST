<?php

use App\Http\Controllers\IdeaController;
use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('landing');
})->name('main-page');
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/community',[IdeaController::class, 'index'])->name('community');

Route::get('/',[IdeaController::class,'index'])->name('overview');

Route::get('/community/single/{idea:slug}',[IdeaController::class,'show'])->name('showIdea');

