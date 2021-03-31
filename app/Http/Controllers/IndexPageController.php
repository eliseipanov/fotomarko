<?php

namespace App\Http\Controllers;
use App\Models\Blockabout as BlockAbout;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    //
    public function index () {
        $langnow = \App::getLocale();
        $blockabout = BlockAbout::withTranslation($langnow)->get();
    return view('layouts.index', compact('blockabout'));
        //return view('layouts.index');
    }
}
