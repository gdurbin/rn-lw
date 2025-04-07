<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
use Livewire\Volt\Volt;

Route::get('/', [ExampleController::class, "home"])->name('home');

Route::get('/unreal', [ExampleController::class, "unreal"]);

Route::get('/services', [ExampleController::class, "services"]);

Route::get('/about', [ExampleController::class, "about"]);

Route::get('/contact', [ExampleController::class, "contact"]);

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
