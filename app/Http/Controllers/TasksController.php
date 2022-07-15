<?php

namespace App\Http\Controllers;

use App\Http\Requests\TasksRequest;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TasksController extends Controller
{
    public function ListTasks()
    {
        $stmt = Category::query()->get()->all();
        $list = Task::query()->get()->all();
        return view('layouts.tasks', ["tasks" => $list, "category" => $stmt]);
    }

    public function StoreTasks()
    {
        $stmt = Category::query()->get()->all();
        return view('layouts.create-tasks', ["category" => $stmt]);
    }

    public function CreateTasks(TasksRequest $request)
    {
        $task = new Task();
        $task->title = $request->title;
        $task->category_id = $request->category;
        $task->description = $request->description;
        if ($task->save()) {
            return redirect()->route('listtasks');
        }
        return;
    }

    public function DeleteTasks(Task $id)
    {
        $id->delete();
        return redirect()->route('listtasks');
    }

    public function EditTasks(TasksRequest $request)
    {
        $id = $request->id;
        $stmt = Task::getID($id);
        if ($stmt) {
            $stmt->title = $request->title;
            $stmt->category_id = $request->category;
            $stmt->description = $request->description;
            if ($stmt->save()) {
                return redirect()->route('listtasks');
            }
        }
        return;
    }

    public function DoneTasks($id)
    {
        $stmt = Task::getID($id);
        if ($stmt) {
            $stmt->done_at = date("Y-m-d  h:i:s");
            if ($stmt->save()) {
                return redirect()->route('listtasks');
            }
        }
    }
}
