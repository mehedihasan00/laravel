<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FecultyController;
use App\Http\Controllers\MultiImageController;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
    $feculties = DB::table('feculties')->get();
    $categories = DB::table('categories')->get();
    return view('home', compact('feculties', 'categories'));
});

// Category Controller
Route::get('/category/all', [CategoryController::class, 'AllCat'])->name('all.category');

Route::post('/category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('/category/edit/{id}', [CategoryController::class, 'Edit']);

Route::post('/category/update/{id}', [CategoryController::class, 'Update']);

Route::get('/softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);

Route::get('/category/restore/{id}', [CategoryController::class, 'Restore']);

Route::get('/pdelete/category/{id}', [CategoryController::class, 'Pdelete']);

// For Feculty Routes
Route::get('/feculty/all', [FecultyController::class, 'AllFeculty'])->name('all.feculty');

Route::post('/feculty/add', [FecultyController::class, 'StoreFeculty'])->name('store.feculty');

// For Multi Image routes
Route::get('/multi/image', [MultiImageController::class, 'multi'])->name('image.all');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    // $users = User::all();
    $users = DB::table('users')->get();
    return view('dashboard', compact('users'));
})->name('dashboard');
