<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class CategoriesController extends Controller
{
    public function ListCategories()
    {
        $ListCategories = Category::getList();
        return view('layouts.categories', ["ListCategories" => $ListCategories]);
    }

    public function CreateCategories(CategoriesRequest $request)
    {
        $Category = new Category();
        $Category->name = $request->name;
        if ($Category->save()) {
            return redirect()->route('listcategories');
        }
        return;
    }

    public function DeleteCategories($id)
    {
        $CategoryID = Category::getID($id);
        Task::query()
            ->where('category_id', $CategoryID->id)
            ->delete();
        $CategoryID->delete();
        return redirect()->route('listcategories');
    }

    public function EditCategories(CategoriesRequest $request)
    {
        $id = $request->id;
        $CategoryID = Category::getID($id);
        if ($CategoryID) {
            $CategoryID->name = $request->name;
            if ($CategoryID->save()) {
                return redirect()->route('listcategories');
            }
        }
        return;
    }
}
