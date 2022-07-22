<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksRequest;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function GuzzleHttp\Promise\all;

class TasksController extends Controller
{
    public function ListTasks()
    {
        $ListCategories = Category::getList();
        $ListTasks = Task::getList();
        return view('layouts.tasks', ["ListTasks" => $ListTasks, "ListCategories" => $ListCategories]);
    }

    public function StoreTasks()
    {
        $ListCategories = Category::getList();
        return view('layouts.create-tasks', ["ListCategories" => $ListCategories]);
    }

    public function CreateTasks(Task $Task ,TasksRequest $request)
    {
        $user = Auth::user();
        $Task->title = $request->title;
        $Task->category_id = $request->category;
        $Task->description = $request->description;
        $Task->user_id = $user->id;
        if ($Task->save()) {
            return redirect()->route('listtasks')->with('success', 'Task added successfully');
        }
        return;
    }

    public function DeleteTasks(Task $id)
    {
        $id->delete();
        return redirect()->route('listtasks')->with('success', 'Task removed successfully');
    }

    public function EditTasks(TasksRequest $request)
    {
        $id = $request->id;
        $TaskID = Task::getID($id);
        if ($TaskID) {
            $TaskID->title = $request->title;
            $TaskID->category_id = $request->category;
            $TaskID->description = $request->description;
            if ($TaskID->save()) {
                return redirect()->route('listtasks')->with('success', 'Task edited successfully');
            }
        }
        return;
    }

    public function DoneTasks($id)
    {
        $TaskID = Task::getID($id);
        if ($TaskID) {
            $TaskID->done_at = date("Y-m-d  h:i:s");
            if ($TaskID->save()) {
                return redirect()->route('listtasks');
            }
        }
    }
}
