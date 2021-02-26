<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyPresentationController;
use App\Http\Controllers\CompanyPressReleaseController;
use App\Http\Controllers\CompanyJobController;
// use App\Models\CompanyPressRelease;

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
/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
/*
Route::get('/books/{id}', [BookController::class, 'show']);
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store']);
*/
// Home page

Route::get('/', function(){
    return view('home');
});

// Company

Route::get('/companies', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/companies/store', [CompanyController::class, 'store']);
Route::get('/companies/{id}', [CompanyController::class, 'show'])->where('id', '[0-9]+');

// companyPresentations
Route::get('/companypresentations', [CompanyPresentationController::class, 'index']);
Route::get('/companypresentation/create', [CompanyPresentationController::class, 'create']);
Route::post('/companypresentation/store',[CompanyController::class, 'store']);


// pressReleases
Route::get('/pressrelease', [CompanyPressreleaseController::class, 'index']);
Route::get('/pressrelease/create', [CompanyPressReleaseController::class, 'create']);
Route::get('/pressrelease/{id}', [CompanyPressReleaseController::class, 'show']);
Route::post('/pressrelease/store',[CompanyPressReleaseController::class, 'store']);

// jobs
Route::get('/job', [CompanyJobController::class, 'index']);
Route::get('/job/create', [CompanyJobController::class, 'create']);
Route::get('/job/{id}', [CompanyJobController::class, 'show']);
Route::post('/job/store',[CompanyJobController::class, 'store']);
