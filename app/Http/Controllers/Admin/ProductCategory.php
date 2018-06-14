<?php
/**
 * Created by PhpStorm.
 * User: dangnv
 * Date: 11/13/17
 * Time: 12:14 PM
 */

namespace App\Http\Controllers\Admin;


use App\Category;
use Illuminate\Http\Request;

class ProductCategory extends AdminController
{
    public function index(Request $request)
    {
        return view('admin.product.category.list', ['list' => Category::all()]);
    }

    public function add(Request $request)
    {
        if ($request->isMethod("GET")) {
            return view('admin.product.category.add');
        } else {
            $category = new Category();
            $category->name = $request->get('name');
            $category->desc = $request->get('description');
            $category->parent_id = $request->get('parent_id');
            $category->save();
            return back();
        }
    }

    public function edit(Request $request)
    {
        $category = Category::find($request->get('id'));
        if ($request->isMethod("GET")) {
            return view('admin.product.category.edit', ['item' => $category]);
        } else {
            $category->name = $request->get('name');
            $category->desc = $request->get('description');
            $category->parent_id = $request->get('parent_id');
            $category->save();
            return back();
        }
    }
}