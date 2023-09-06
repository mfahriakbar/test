<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;

class FormulirController extends Controller
{
    public function index()
    {
        return view('formulir', [
            "tittle" => "Formulir",
            "judul" => "Pilih Formulir",
            "formulir" => Formulir::all()
        ]);
    }

    public function open(Formulir $formulir)
    {
        return view('form', [
            "tittle" => "Isi Formulir",
            "formulir" => $formulir
        ]);
    }
}
