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
            $panoconfig = [
                'panotitle' => 'This is Panorama',
                'panodescription' => 'Panodescription',
                'panosmmimage' => 'https://fotomarko.de/Dnipro-02/pano/pano1small.jpg'
            ];
        return view('panos.panofull', compact('panoconfig'));
        }
    }

    public function panoconfig($id) {

        $jsonconfig->panoequi = "/Dnipro-01/pano/pano1_smola.jpg";
        return view('panos.configpano',compact('jsonconfig'));
    }
}
