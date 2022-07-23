<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/categories', [CategoriesController::class, 'ListCategories'])->name('listcategories');
    Route::post('/categories/create', [CategoriesController::class, "CreateCategories"])->name('createcategories');
    Route::get('/categories/delete/{id}', [CategoriesController::class, "DeleteCategories"]);
    Route::post('categories/edit', [CategoriesController::class, "EditCategories"])->name('editcategories');

    Route::get('/tasks', [TasksController::class, 'ListTasks'])->name('listtasks');
    Route::get('/tasks/store', [TasksController::class, 'StoreTasks']);
    Route::post('/tasks/create', [TasksController::class, 'CreateTasks'])->name('createtasks');
    Route::get('/tasks/delete/{id}', [TasksController::class, "DeleteTasks"]);
    Route::post('tasks/edit', [TasksController::class, "EditTasks"])->name('edittasks');
    Route::get('tasks/done/{id}', [TasksController::class, "DoneTasks"]);
});

Route::get('/home', function() {
    return view('home');
});