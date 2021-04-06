<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Panoramas;

class PanoramaController extends Controller
{
    //
    public function showpano($pano) {
        if(!isset($pano)) {
        return redirect()->action('${App\Http\Controllers\IndexPagecontroller@index}', ['alert' => 'no panoramaslug!']);
        }
        else {
        return view('panos.panofull', compact('jsonconfig'));
        }
    }

    public function panoconfig(Request $request) {

        $jsonconfig->panoequi = "/Dnipro-01/pano/pano1_smola.jpg";
        return view('panos.configpano',compact('jsonconfig'));
    }
}
