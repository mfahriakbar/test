{{-- @dd($data) --}}
<link href="/css/dashboard.css" rel="stylesheet">
<div class="container" id="badan-surat">

{{-- <center><img src="/img/kop.jpg" alt=""></center> --}}
<center><img src="{{ storage_path('app/foto/kop.jpg') }}" style="margin-top: -5%" alt=""></center>
{{-- <center><img src="data:image/jpg;base64,'.base64_encode(file_get_content($imgpath))'" alt=""></center> --}}
    {{-- <img src="{{ public_path("/image/kop.jpg") }}" alt=""> --}}
    <h4 id="judul-surat" style="text-align:center;text-decoration: underline;">PAKTA INTEGRITAS<br>ANTI SPG, KETIDAKBERPIHAKAN DAN KERAHASIAAN</h5>
    <p>Saya yang bertanda tangan di bawah ini :</p>
    <table>
        <tr>
            <td style="width: 30%;">Nama</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $data->nama }}</td>
            </tr>
            
        <tr>
            <td style="width: 30%;">Email</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $data->email }}</td>
        </tr>
        
    <tr>
        <td style="width: 30%;">Jabatan</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $data->jabatan }}</td>
    </tr>
    
    <tr>
        <td style="width: 30%;">Instansi</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $data->instansi }}</td>
    </tr>
    </table>
    <p style="font-size: 12pt;">{{ $aturan }}</p>
    <p style="font-size: 10pt;">{{ $aturan1 }}</p>
    <p style="font-size: 10pt;">{{ $aturan2 }}</p>
    <p style="font-size: 10pt;">{{ $aturan3 }}</p>
    <p style="font-size: 10pt;">{{ $aturan4 }}</p>
    <p style="font-size: 10pt;">{{ $aturan5 }}</p>
    <p style="font-size: 10pt;">{{ $aturan6 }}</p>
    <p style="font-size: 10pt;">{{ $aturan7 }}</p>
    <p style="font-size: 10pt;">{{ $aturan8 }}</p>
    <p style="font-size: 10pt;">{{ $aturan9 }}</p>
    <table class="">
        <tr>
            <td style="width: 30%;">Kota</td>
            <td style="width: 5%;">:</td>
            <td style="width: 65%;">{{ $data->kota }}</td>
    </tr>
    <tr>
        <td style="width: 30%;">Tanggal</td>
        <td style="width: 5%;">:</td>
        <td style="width: 65%;">{{ $data->tanggal }}</td>
    </tr>

    {{-- <tr>
        <td id="judul-isi">Tanda Tangan&emsp;&emsp;&emsp;&emsp;&nbsp; :&emsp;&emsp; {{ $show->ttd }}</td>
        
    </tr>                 --}}


</table>
</div>