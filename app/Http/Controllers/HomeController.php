<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index',
        ['categories'=> Category::where('status',1)->orderBy('id','desc')->get()]
    );
    }
    public function about()
    {
        return view ('website.about.index',['abouts'=>About::orderBy('id','desc')->get()]);
    }
}
