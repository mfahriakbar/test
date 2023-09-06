@extends('layouts.main')

@section('isi')

<div class="container mt-4">
    <center><h1>{{ $judul }}</h1></center>
    <table class="table">
        <thead>
          <tr class="table-primary">
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Tamu</td>
            <td>Tamu@gmail.com</td>
            <td>Pengajuan</td>
            <td>
                <a href="#" class="btn btn-primary">Detail</a>
            </td>
          </tr>
        </tbody>
      </table>
</div>
   
@endsection

