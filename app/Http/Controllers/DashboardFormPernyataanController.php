<?php

namespace App\Http\Controllers;

use App\Models\FormPernyataan;
use Illuminate\Http\Request;

class DashboardFormPernyataanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.formpernyataan.index', [
            'formpernyataan' => FormPernyataan::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pernyataan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nama' => 'required|max:255',
        //     'email' => ['required', 'max:255', 'unique:users', 'email:dns'],
        //     'jabatan' => 'required',
        //     'isntansi' => 'required',
        //     'kota' => 'required',
        //     'tanggal' => 'required',
        //     'ttd' => '0',
        // ]);
        // FormPernyataan::create();

        // return redirect('/')->with('success', 'Berhasil Mengirim!!');
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function show(FormPernyataan $formPernyataan)
    {
        return view('dashboard.formpernyataan.show', [
            'formpernyataan' => FormPernyataan::find('id'),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function edit(FormPernyataan $formPernyataan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormPernyataan $formPernyataan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormPernyataan $formPernyataan)
    {
        //
    }
}
