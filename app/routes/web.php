<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ChangePassController   ;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/passwd', function () {
    return view('passwd');
})->name('passwd');

Route::get('/listing', function () {
    return view('listing');
})->name('listing');

Route::get('/changepasswd/{idpass}', function () {
    return view('changepasswd');
})->name('changepasswd');

Route::get('/team', function () {
    return view('team');
})->name('team');

Route::get('/jointeam', function () {
    return view('joinTeam');
})->name('jointeam');

Route::post('/PostController', [PostController::class, 'store'])->name('PostController');

Route::post('/TeamController', [TeamController::class, 'store'])->name('TeamController');

Route::post('/JoinTeamController', [TeamController::class, 'joinTeam'])->name('JoinTeamController');


Route::get('/ListingController', [ListingController::class, 'listing'])->name('ListingController');


Route::get('/ChangePassController/{idpass}', [ChangePassController::class, 'getID'])->name('ChangePassControllerID');

Route::post('/ChangePassController/{idpass}', [ChangePassController::class, 'store'])->name('ChangePassController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
