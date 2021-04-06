{!!
{
    "story":
    {
        "uid": "simpliest-story",
        "name": "Simpliest Story",
        "slug": "simpliest-story",
        "description": "This is the simpliest story ever",
        "default": "scene-0",

        "scenes":
        [
            {
                "uid": "scene-0",
                "name": "First scene",
                "slug": "first-scene",
                "description": "This is the first and only scene",

                "media":
                {
                    "uid": "media-0",
                    "type": "image",

                    "source":
                    {
                        "format": "equi",
                        !!}"url": "{{ $jsonconfig[0]->panoequi ?? 'Dnipro-01/pano/pano1_smola.jpg' }}"{!!
                    }
                }
            }
        ]
    },

    "plugins":
    {
        "prefix": !!}"{{asset('assets')}}/plugins/",{!!

        "engines":
        [
            {
                "uid": "org.forgejs.webvrbutton",
                "url": "WebVRButton/"
            },

            {
                "uid": "org.forgejs.gyroscopebutton",
                "url": "GyroscopeButton/"
            }
        ],

        "instances":
        [
            {
                "uid": "webvrbutton",
                "engine": "org.forgejs.webvrbutton",

                "options":
                {
                    "bottom": 10,
                    "right": 10
                }
            },

            {
                "uid": "gyrobutton",
                "engine": "org.forgejs.gyroscopebutton",

                "options":
                {
                    "bottom": 10,
                    "left": 10
                }
            }
        ]
    }
}
!!}
