<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function showposts() {
        return view('layouts.blog.index');
    }
}
