<?php

namespace App\Models;


class Formulir
{
    private static $isi_formulir = [
        [
            "judul" => "Formulir 1",
            "slug" => "formulir-1",
            "formulir" => "Form Data Hewan"
        ],
        [
            "judul" => "Formulir 2",
            "slug" => "formulir-2",
            "formulir" => "Form Data Tanaman"
        ],
        [
            "judul" => "Formulir 3",
            "slug" => "formulir-3",
            "formulir" => "Form Data"
        ],
        [
            "judul" => "Formulir 4",
            "slug" => "formulir-4",
            "formulir" => "Form Data"
        ],
        [
            "judul" => "Formulir 5",
            "slug" => "formulir-5",
            "formulir" => "Form Data"
        ],
        [
            "judul" => "Formulir 5",
            "slug" => "formulir-5",
            "formulir" => "Form Data"
        ],
    ];

    public static function all()
    {
        return collect(self::$isi_formulir);
    }

    public static function find($slug)
    {
        $formulir = static::all();
        // $form = [];
        // foreach ($formulir as $i) {
        //     if ($i["slug"] === $slug) {
        //         $form = $i;
        //     }
        // }

        return $formulir->firstWhere('slug', $slug);
    }
}
