<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoriesRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\ViewServiceProvider;

class CategoriesController extends Controller
{
    public function ListCategories()
    {
        $list = Category::query()->get()->all();
        return view('layouts.categories', ["categories" => $list]);
    }

    public function StoreCategories(CategoriesRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        if ($category->save()) {
            return redirect()->route('listcategories');
        }
        return;
    }

    public function DeleteCategories(Category $id)
    {
        $id->delete();
        return redirect()->route('listcategories');
    }


    public function EditCategories(CategoriesRequest $request)
    {
        $id = $request->id;
        $stmt = Category::getID($id);
        if ($stmt) {
            $stmt->name = $request->name;
            if ($stmt->save()) {
                return redirect()->route('listcategories');
            }
        }
        return;
    }
}
