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
/*
Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {

    //return Inertia::render('Dashboard');
    view('home');
});
*/
// Company

Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::post('/company/store', [CompanyController::class, 'store']);
Route::get('/company/{id}', [CompanyController::class, 'show'])->where('id', '[0-9]+');
Route::get('/company/edit',[CompanyController::class, 'edit']);
Route::post('/company/update',[CompanyController::class, 'update']);

// companyPresentations
Route::get('/companypresentation', [CompanyPresentationController::class, 'index']);
Route::get('/companypresentation/create', [CompanyPresentationController::class, 'create']);
Route::post('/companypresentation/store',[CompanyPresentationController::class, 'store']);
Route::get('/companypresentation/edit',[CompanyPresentationController::class, 'edit']);
Route::post('/companypresentation/update',[CompanyPresentationController::class, 'update']);

// pressReleases
Route::get('/pressreleases', [CompanyPressreleaseController::class, 'index']);
Route::get('/pressrelease/create', [CompanyPressReleaseController::class, 'create']);
Route::get('/pressreleases/{id}', [CompanyPressReleaseController::class, 'show']);
Route::post('/pressrelease/store',[CompanyPressReleaseController::class, 'store']);

// jobs
Route::get('/jobs', [CompanyJobController::class, 'index']);
Route::get('/job/create', [CompanyJobController::class, 'create']);

Route::post('/job/store',[CompanyJobController::class, 'store']);
Route::get('/jobs/{id}', [CompanyJobController::class, 'show']);
