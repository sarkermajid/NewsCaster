<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Controllers\toastr;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index');
    }

    public function store(CategoryStoreRequest $request)
    {
        Category::addCategory($request);
        return redirect()->back()->with('message','Category added successfully!');
    }

    public function manage()
    {
        return view('admin.category.manage',['categories'=>Category::orderBy('id','desc')->get()]);
    }

    public function status($id)
    {
        Category::updateStatus($id);
        return redirect()->back()->with('message','Status change successfully');
    }

    public function edit($id)
    {
        return view('admin.category.edit',['category'=>Category::find($id)]);
    }

    public function delete($id)
    {
        Category::deleteCategory($id);
        return redirect()->back()->with('error','Category delete successfully');
    }
}
