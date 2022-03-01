<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\SettingsComponent;
use App\Http\Livewire\Fuel\FuelComponent;
use App\Http\Livewire\HomeModuleComponent;
use App\Http\Livewire\Provider\ProviderComponent;
use App\Http\Livewire\Dispenser\DispenserComponent;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/home', HomeModuleComponent::class)->name('home');

// Modules routes
Route::middleware(['auth:sanctum', 'verified'])->get('/tank', ProviderComponent::class)->name('tank.module');
Route::middleware(['auth:sanctum', 'verified'])->get('/fuel', FuelComponent::class)->name('fuel.module');
Route::middleware(['auth:sanctum', 'verified'])->get('/settings', SettingsComponent::class)->name('settings.module');
Route::middleware(['auth:sanctum', 'verified'])->get('/provider', ProviderComponent::class)->name('provider.module');
Route::middleware(['auth:sanctum', 'verified'])->get('/dispenser', DispenserComponent::class)->name('dispenser.module');
