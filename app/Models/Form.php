<?php

namespace App\Models;


class Form
{
    private static $isi_formulir = [
        [
            "judul" => "Formulir 1",
            "slug" => "formulir-1",
            "formulir" => "ababababaabab"
        ],
        [
            "judul" => "Formulir 2",
            "slug" => "formulir-2",
            "formulir" => "ababababaabab"
        ]
    ];

    public static function all()
    {
        return self::$isi_formulir;
    }

    public static function find($slug)
    {
        $formulir = self::$isi_formulir;
        $formulir = [];
        foreach ($formulir as $i) {
            if ($i["slug"] === $slug) {
                $formulir = $i;
            }
        }

        return $formulir;
    }
}
