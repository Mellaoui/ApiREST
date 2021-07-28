<?php

use App\Http\Controllers\EmailistController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\QueryController;
use App\Mail\CustomerEmail;
use Illuminate\Support\Facades\Mail;
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

Route::get('/', function () {
    return view('landing');
})->name('main-page');

Route::get('/ourtech', function () {
    return view('ourtech');
})->name('our-tech');

Route::get('/quote', function () {
    return view('quote');
})->name('quote');


Route::post('/emailist', [EmailistController::class, 'add'])->name('email-list');


Route::middleware(['auth:sanctum', 'verified'])->get('/community',[IdeaController::class, 'index'])->name('community');

Route::get('/overview',[IdeaController::class,'index'])->name('overview');

Route::get('/community/single/{idea:slug}',[IdeaController::class,'show'])->name('showIdea');

Route::get('/email', function () {

    $details = [
        'title' => 'Mail from me',
        'description' => 'This is a test email'
    ];

        Mail::to('modijavelin@gmail.com')->send(new CustomerEmail($details));

        dd('Sent');

});


Route::post('/query',[QueryController::class,'store'])->name('query');
