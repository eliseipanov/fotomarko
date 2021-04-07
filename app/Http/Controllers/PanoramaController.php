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
        return view('panos.panofull', compact(['panoconfig','pano']));
        }
    }

    public function config($slug) {
        $slug = '';
        $jsonconfig->panoequi = "/Dnipro-01/pano/pano1_smola.jpg";
        $data = [
            'story' => [],
            'plugins' => [],
        ];
        $data['story'] = [
            'uid' => '',
            "name" => "Simpliest Story",
            "slug" => "simpliest-story",
            "description" => "This is the simpliest story ever",
            "default" => "scene-0",
            "scenes" => [],
        ];
        $data['story']['scenes'] = [
            "uid" => "scene-0",
                "name" => "First scene",
                "slug" => "first-scene",
                "description" => "This is the first and only scene",
                "media" => [],
        ];
        $data['story']['scenes']['media'] = [
            "uid" => "media-0",
            "type" => "image",
            "source" => [],
        ];
        $data['story']['scenes']['media']['source'] = [
            "format" => "equi",
            "url" => "assets/Dnipro-01/pano/pano1_smola.jpg",
        ];
        $data['plugins'] = [
            "prefix" => "plugins/",
            "engines" => [],
            "instances"=> [],
        ];
        $data['plugins']['engines'][0] = [
            "uid" => "org.forgejs.webvrbutton",
            "url" => "WebVRButton/"
        ];
        $data['plugins']['engines'][1] = [
            "uid"=> "org.forgejs.gyroscopebutton",
                "url"=> "GyroscopeButton/",
        ];
        $data['plugins']['instances'][0] = [
            "uid" => "webvrbutton",
            "engine" => "org.forgejs.webvrbutton",
            "options"=> [
                "bottom"=> 10,
                "right"=> 10,
                ],
        ];
        $data['plugins']['instances'][1] = [
            "uid" => "gyrobutton",
            "engine" => "org.forgejs.gyroscopebutton",
            "options" => [
                "bottom"=> 10,
                "left" => 10
            ],
        ];
        return response()->json($data);
    }
}
