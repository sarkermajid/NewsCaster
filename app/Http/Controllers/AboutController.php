<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Http\Requests\AboutRequest;

class AboutController extends Controller
{
    public function index()
    {
        return view('admin.aboutus.index');
    }
    public function store(AboutRequest $request)
    {
        About::addAboutContent($request);
        return redirect()->back()->with('message','Content added successfully!');
    }
    public function manage()
    {
        return view('admin.aboutus.manage',['abouts'=>About::orderBy('id','desc')->get()]);
    }
    public function edit($id)
    {
        return view('admin.aboutus.edit', ['about' => About::find($id)]);
    }
    public function update(AboutRequest $request, $id)
    {
        About::updateAboutContent($request, $id);
        return redirect('/aboutus/manage')->with('message', 'About Content update successfully');
    }

    public function delete($id)
    {
        About::deleteAboutContent($id);
        return redirect('/aboutus/manage')->with('message', 'About Content delete successfully');
    }
}
