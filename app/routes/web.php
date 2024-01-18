<?php

use App\Http\Controllers\BasicController;
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

Route::get('/', [BasicController::class, 'welcome'])->name('welcome');

Route::get('/passwd', [BasicController::class, 'passwd'])->name('passwd');

Route::get('/listing', [BasicController::class, 'listing'])->name('listing');

Route::get('/listingTeam', [BasicController::class, 'listingTeam'])->name('listingTeam');

Route::get('/changepasswd/{idpass}', [BasicController::class, 'changepasswd'])->name('changepasswd');

Route::get('/changeTeamPwd', [BasicController::class, 'changeTeamPwd'])->name('changeTeamPwd');

Route::get('/team', [BasicController::class, 'team'])->name('team');

Route::get('/jointeam', [BasicController::class, 'jointeam'])->name('jointeam');

Route::post('/PostController', [PostController::class, 'store'])->name('PostController');

Route::post('/TeamController', [TeamController::class, 'store'])->name('TeamController');

Route::post('/JoinTeamController', [TeamController::class, 'joinTeam'])->name('JoinTeamController');

Route::get('/ListingController', [ListingController::class, 'listing'])->name('ListingController');

Route::get('/ListingControllerTeam', [ListingController::class, 'listingTeam'])->name('ListingControllerTeam');

Route::get('/ChangePassController/{idpass}', [ChangePassController::class, 'getID'])->name('ChangePassControllerID');

Route::post('/ChangePassController/{idpass}', [ChangePassController::class, 'store'])->name('ChangePassController');

Route::get('/dashboard', [BasicController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
