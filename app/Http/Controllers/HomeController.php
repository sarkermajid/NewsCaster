<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
    public function about()
    {
        return view ('website.about.index',['abouts'=>About::orderBy('id','desc')->get()]);
    }
}
