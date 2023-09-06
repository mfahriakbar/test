<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PernyataanController extends Controller
{
    public function index()
    {
        return view('/pernyataan/index', [
            "tittle" => "Tabel Formulir",
        ]);
    }

    public function create()
    {
        return view('/pernyataan/create', [
            "tittle" => "Formulir",
        ]);
    }
}
