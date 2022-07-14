<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TasksController;

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

/******************************** Routing Categories ********************************/
Route::get('/categories', [CategoriesController::class, 'ListCategories'])->name('listcategories');
Route::post('/categories/store', [CategoriesController::class, "StoreCategories"])->name('storecategories');
Route::get('/categories/delete/{id}', [CategoriesController::class, "DeleteCategories"]);
Route::post('categories/edit', [CategoriesController::class, "EditCategories"])->name('editcategories');
/******************************** Routing Tasks ********************************/
Route::get('/tasks', [TasksController::class, 'ListTasks'])->name('listtasks');
Route::post('/tasks/store', [TasksController::class, "StoreTasks"])->name('storetasks');
Route::get('/tasks/delete/{id}', [TasksController::class, "DeleteTasks"]);
Route::post('tasks/edit', [TasksController::class, "EditTasks"])->name('edittasks');
