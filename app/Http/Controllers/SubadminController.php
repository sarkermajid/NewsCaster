<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubadminRequest;
use App\Models\Subadmin;

class SubadminController extends Controller
{
    public function index()
    {
        return view('admin.subadmin.index');
    }

    public function store(SubadminRequest $request)
    {
        Subadmin::addSubAdmin($request);

        return redirect()->back()->with('message', 'Sub admin added successfully!');
    }
}
