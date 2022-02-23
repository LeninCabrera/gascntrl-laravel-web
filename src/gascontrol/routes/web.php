<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SettingsComponent;
use App\Http\Livewire\DispenserComponent;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
})->name('home');

Route::get('/settings', SettingsComponent::class)->name('settings.module');
Route::get('/dispenser', DispenserComponent::class)->name('dispenser.module');