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
        return view('dashboard.formpernyataan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns',
            'jabatan' => 'required',
            'instansi' => 'required',
            'kota' => 'required',
            'tanggal' => 'required',
        ]);
        FormPernyataan::create($validatedData);

        return redirect('/dashboard/formpernyataan')->with('success', 'Berhasil Mengirim!!');
        // return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('dashboard.formpernyataan.show', [
        //     'formpernyataan' => FormPernyataan::find('id'),
        //     'form' => $formPernyataan,
        // ]);
        $aturan = 'Menyatakan bahwa saya dengan sungguh-sungguh dalam rangka pelaksanaan pemeriksaan dan
        pengujian di BPMSPH bersedia menjalankan dan mentaati hal-hal seperti yang tertulis dibawah ini :';
        $aturan1 = '1. Berperan secara pro aktif dalam upaya pencegahan dan pemberantasan Korupsi, Kolusi dan Nepotisme (KKN) serta tidak melibatkan diri dalam perbuatan tercela;';
        $aturan2 = '2. Berkomitmen tidak meminta pemberian secara langsung dan/atau tidak langsung berupa suap, hadiah, bantuan, atau bentuk lainnya yang tidak sesuai dengan ketentuan yang berlaku serta melaporkan pemberian tersebut apabila menerimanya;';
        $aturan3 = '3. Berkomitmen bersikap transparan, jujur, objektif dan akuntabel untuk tidak terlibat atau terpengaruh terhadap tekanan komersial, keuangan yang dapat mempengaruhi hasil pengujian untuk menghindari benturan kepentingan (conflict of interest) dalam pelaksanaan tugas;';
        $aturan4 = '4. Berkomitmen untuk bebas dari kegiatan lain, internal dan eksternal yang dapat mengurangi kepercayaan dalam kemandirian pertimbangan dan integritas dalam kegiatan pengujian, dan berpengaruh buruk terhadap mutu kerja;';
        $aturan5 = '5. Berkomitmen untuk bekerja secara profesional, menjunjung tinggi aturan yang berlaku baik di lingkungan laboratorium pengujian;';
        $aturan6 = ' 6. Berkomitmen untuk menjaga kerahasiaan informasi dan hak kepemilikan dari pelanggan Laboratorium sesuai dengan persyaratan dan ketentuan yang berlaku, termasuk informasi dalam bentuk elektronik;';
        $aturan7 = ' 7. Berkomitmen memberi contoh dalam kepatuhan terhadap peraturan perundang-undangan dalam melaksanaan tugas terutama kepada pegawai yang berada di bawah pengawasan saya dan sesama pegawai di lingkungan kerja saya secara konsisten;';
        $aturan8 = ' 8. Berkomitmen menyampaikan informasi penyimpangan integritas serta turut menjaga kerahasiaan atas pelanggaran peraturan yang dilaporkannya;';
        $aturan9 = ' 9. Bila saya melanggar hal-hal tersebut di atas, saya siap menghadapi konsekuensi berdasarkan ketentuan dan perundang-undangan yang berlaku.';

        $show = FormPernyataan::find($id);
        return view('dashboard.formpernyataan.show', compact('show', 'aturan', 'aturan1', 'aturan2', 'aturan3', 'aturan4', 'aturan5', 'aturan6', 'aturan7', 'aturan8', 'aturan9'));
        // dd($show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formpernyataan = FormPernyataan::find($id);
        // dd($show);
        return view('dashboard.formpernyataan.edit', compact('formpernyataan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormPernyataan $formPernyataan, $id)
    {
        $formPernyataan = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|email:dns',
            'jabatan' => 'required',
            'instansi' => 'required',
            'kota' => 'required',
            'tanggal' => 'required',
        ]);
        $formPernyataan = FormPernyataan::find($id);
        $formPernyataan->update($request->all());

        return redirect('/dashboard/formpernyataan')->with('warning', 'Berhasil Mengedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormPernyataan  $formPernyataan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FormPernyataan::destroy($id);

        return redirect('/dashboard/formpernyataan')->with('danger', 'Berhasil Menghapus!!');
    }
}
