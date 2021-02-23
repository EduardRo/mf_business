<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyPresentationController;
use App\Http\Controllers\CompanyPressReleaseController;
use App\Models\CompanyPressRelease;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
// Company

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/companies/create', [CompanyController::class, 'create']);
Route::post('/companies/store', [CompanyController::class, 'store']);
Route::get('/companies/{id}', [CompanyController::class, 'show'])->where('id', '[0-9]+');

// companyPresentations
Route::get('/companypresentations', [CompanypresentationController::class, 'index']);


// pressReleases
Route::get('/pressreleases', [CompanyPressreleaseController::class, 'index']);
Route::get('/pressrelease/create', [CompanyPressReleaseController::class, 'create']);
Route::get('/pressrelease/{id}', [CompanyPressReleaseController::class, 'show']);
Route::post('/pressrelease/create',[CompanyPressReleaseController::class, 'store']);

