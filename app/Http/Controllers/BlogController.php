<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function allposts() {
    return view('layouts.blog.index');
    }
}
