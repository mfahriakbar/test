<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('formulir', [
            "tittle" => "Formulir",
            "judul" => "Pilih Formulir",
            "formulir" => Formulir::all()
        ]);
    }

    public function open($slug)
    {
        return view('form', [
            "tittle" => "Isi Formulir",
            "formulir" => Formulir::find($slug)
        ]);
    }
}
