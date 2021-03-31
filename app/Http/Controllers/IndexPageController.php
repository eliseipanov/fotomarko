<?php

namespace App\Http\Controllers;
use App\Http\Models\Blockabout;
use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    //
    public function index () {
        $langnow = \App::getLocale();
        $blockabout = Blockabout::withTranslations($langnow)->get();
    return view('layouts.index', compact('blockabout'));
        //return view('layouts.index');
    }
}
