<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('profile');
   });

   Route::get('/katalog', function () {
    return view('katalog');
   });

   Route::get('/bantuan', function () {
    return view('bantuan');
   });


use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EventController as EventAdminController;

// Rute User Area
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/event/1', [EventController::class,
'show'])->name('events.show');
Route::get('/checkout', [EventController::class,
'checkout'])->name('checkout');
Route::get('/my-ticket', [EventController::class, 'ticket'])->name('ticket');

// Rute Admin Area
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class,
    
    'index'])->name('dashboard');
    
    Route::get('/events', [EventController::class,
    
    'indexAdmin'])->name('events.index');
    // dan seterusnya...
    });



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('events', EventAdminController::class);
});


use App\Http\Controllers\PartnerController;

Route::get('/admin/partners', [PartnerController::class, 'index']);

Route::get('/admin/partners/create', [PartnerController::class, 'create']);
Route::post('/admin/partners', [PartnerController::class, 'store']);