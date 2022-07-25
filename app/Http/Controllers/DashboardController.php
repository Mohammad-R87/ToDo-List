<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $AllTasks = Task::getList()->count();

        $AllCategories = Category::getList()->count();

        $DoneTasks = Task::query()
            ->where('user_id', $user->id)
            ->where('done_at', '!=', '')
            ->get()
            ->count();

        $UnDoneTasks = Task::query()
            ->where('user_id', $user->id)
            ->where('done_at', null)
            ->get()
            ->count();

        return view('admin.dashboard', [
            "AllTasks" => $AllTasks,
            "AllCategories" => $AllCategories,
            "DoneTasks" => $DoneTasks,
            "UnDoneTasks" => $UnDoneTasks,
        ]);
    }
}
