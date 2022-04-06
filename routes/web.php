<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BakeryController;
use Illuminate\Session\Middleware\AuthenticateSession;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware("auth")->group(function (){
    Route::get("/new-bakery", [BakeryController::class, "create"]);
    Route::get("/edit-bakery/{id}", [BakeryController::class, "edit"]);
    Route::get("/delete-bakery/{id}", [BakeryController::class, "destroy"]);
});

Route::get("/",[BakeryController::class, "index"]);
Route::post("/store-bakery", [BakeryController::class, "store"]);
Route::get("/update-bakery", [BakeryController::class, "update"]);
Route::get("/logout", [AuthenticatedSessionController::class, "destroy"]);
Route::get("/search-bakery", [BakeryController::class, "search"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
