<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $AllTasks = Task::query()
            ->get()
            ->count();

        $AllCategories = Category::query()
            ->get()
            ->count();

        $DoneTasks = Task::query()
            ->where('done_at', '!=', '')
            ->get()
            ->count();

        $UnDoneTasks = Task::query()
            ->where('done_at', null)
            ->get()
            ->count();

        return view('layouts.dashboard', [
            "AllTasks" => $AllTasks,
            "AllCategories" => $AllCategories,
            "DoneTasks" => $DoneTasks,
            "UnDoneTasks" => $UnDoneTasks,
        ]);
    }
}
