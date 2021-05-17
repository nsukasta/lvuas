<?php

use App\Http\Controllers\PagesController;
use App\Http\Livewire\DetailMembers;
use App\Http\Livewire\Members;
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

Route::get('/', [PagesController::class, 'home']);

Route::get('/about', [PagesController::class, 'about']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('pengguna', Members::class)->name('pengguna');
    Route::get('/pengguna/{id}', DetailMembers::class)->name('show');
});
