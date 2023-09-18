@extends('dashboard.layouts.main')
@section('container')

<a href="/dashboard/exportpdf/{{ $show->id }}" class="btn btn-info mt-4 mb-4"><span data-feather="file-text"></span> Cetak</a>

<div class="container" id="badan-surat">

    <center><img src="/img/kop.jpg" alt=""></center>
    {{-- <center><img src="/img/surat.png" alt=""></center> --}}

    <h3 id="judul-surat">PAKTA INTEGRITAS<br>ANTI SPG, KETIDAKBERPIHAKAN DAN KERAHASIAAN</h3>
    <p>Saya yang bertanda tangan di bawah ini :</p>
    <table>

    <tr>
        <td style="width: 30%;" id="judul-isi">Nama&ensp;&ensp;&ensp;&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; {{ $show->nama }}</td>
    </tr>
    <tr>
        <td style="width: 30%;" id="judul-isi">Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; {{ $show->email }}</td>
    </tr>
    <tr>
        <td style="width: 30%;" id="judul-isi">Jabatan &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; {{ $show->jabatan }}</td>
    </tr>
    <tr>
        <td style="width: 30%;" id="judul-isi">Instansi &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; {{ $show->instansi }}</td>
    </tr>
    </table>
    <br>
    {{ $aturan }}<br>
    {{ $aturan1 }}<br>
    {{ $aturan3 }}<br>
    {{ $aturan4 }}<br>
    {{ $aturan5 }}<br>
    {{ $aturan6 }}<br>
    {{ $aturan7 }}<br>
    {{ $aturan8 }}<br>
    {{ $aturan9 }}<br>
    <br>
    <table class="">
    <tr>
        <td style="" id="judul-isi">Kota &ensp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; {{ $show->kota }}</td>
    </tr>
    <tr>
        <td id="judul-isi">Tanggal &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:&emsp;&emsp; {{ $show->tanggal }}</td>
    </tr>
    {{-- <tr>
        <td id="judul-isi">Tanda Tangan&emsp;&emsp;&emsp;&emsp;&nbsp; :&emsp;&emsp; {{ $show->ttd }}</td>
        
    </tr>                 --}}
</table>
</div>

@endsection
