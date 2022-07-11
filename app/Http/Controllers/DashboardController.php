<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Task;

class DashboardController extends Controller
{
    public function Dashboard() {
        $ids = Category::query()->get()->pluck('id');
        $stmt = Task::query()->whereIn('categoryId',$ids)->get();
        return view('layouts.dashboard', ["tasks" => $stmt], ["category" => $ids]);
    }
}
