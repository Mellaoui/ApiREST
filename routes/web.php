<?php

use App\Http\Controllers\EmailListController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\ClientOrdersController;
use App\Mail\CustomerEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('soon');
})->name('landing');

// Route::get('/ourtech', function () {
//     return view('ourtech');
// })->name('our-tech');

// Route::get('/quote', function () {
//     return view('quote');
// })->name('quote');

// Route::post('/email-list', [EmailListController::class, 'add'])
//     ->name('email-list');

// Route::middleware(['auth:sanctum', 'verified'])
//     ->get('/community', [IdeaController::class, 'index'])
//     ->name('community');

// Route::get('/overview', [IdeaController::class, 'index'])
//     ->name('overview');

// Route::get('/community/single/{idea:slug}', [IdeaController::class, 'show'])
//     ->name('showIdea');

// Route::get('/email', function () {

//     $details = [
//         'title' => 'Mail from me',
//         'description' => 'This is a test email'
//     ];

//     Mail::to('modijavelin@gmail.com')
//         ->send(new CustomerEmail($details));

//     dd('Sent');
// });

// Route::post('/client-order', [ClientOrdersController::class, 'store'])
//     ->name('client-order.store');
