<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexPageController extends Controller
{
    //
public function index ($locale) {
    if !isset($locale) {
    $locale = 'en';
    }
    return view('index');

}
}
