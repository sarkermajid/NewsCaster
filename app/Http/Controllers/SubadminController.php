<?php

namespace App\Http\Controllers;
use App\Http\Controllers\toastr;
use App\Models\Subadmin;
use Illuminate\Http\Request;
use App\Http\Requests\SubadminRequest;

class SubadminController extends Controller
{
    public function index()
    {
        return view('admin.subadmin.index');
    }

    public function store(SubadminRequest $request)
    {
        Subadmin::addSubAdmin($request);
        return redirect()->back()->with('message','Sub admin added successfully!');
    }
}
