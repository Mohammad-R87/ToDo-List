<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use App\Models\Task;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\ViewServiceProvider;

class CategoriesController extends Controller
{
    public function ListCategories()
    {
        $ListCategories = Category::getList();
        return view('admin.categories', ["ListCategories" => $ListCategories]);
    }

    public function CreateCategories(Category $Category, CategoriesRequest $request)
    {
        $user = Auth::user();

        $Category->name = $request->name;
        $Category->user_id = $user->id;
        if ($Category->save()) {
            return redirect()->route('listcategories')->with('success', 'Category added successfully');
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
        return redirect()->route('listcategories')->with('success', 'Category removed successfully');
    }

    public function EditCategories(CategoriesRequest $request)
    {
        $id = $request->id;
        $CategoryID = Category::getID($id);
        if ($CategoryID) {
            $CategoryID->name = $request->name;
            if ($CategoryID->save()) {
                return redirect()->route('listcategories')->with('success', 'Category edited successfully');
            }
        }
        return;
    }
}
