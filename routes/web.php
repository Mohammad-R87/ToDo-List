<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


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
Route::get('/dashboard', [DashboardController::class, 'Dashboard']);
Route::get('/categories', [CategoriesController::class, 'ListCategories'])->name('listcategories');
Route::post('/categories/store', [CategoriesController::class, "StoreCategories"])->name('storecategories');
Route::get('/categories/delete/{id}', [CategoriesController::class, "DeleteCategories"]);
Route::post('categories/edit', [CategoriesController::class, "EditCategories"])->name('editcategories');


