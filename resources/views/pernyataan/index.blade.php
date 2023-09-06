
@extends('layouts.main')

@section('isi')

<div class="container mt-4">
    <center>
        <h1>Table</h1>
    </center>
    <table class="table">
        <thead>
          <tr class="table-primary">
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Jabatan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Mark@gmail</td>
            <td>Pengajuan</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Jacob@gmail</td>
            <td>Pernyataan</td>
          </tr>
        </tbody>
      </table>
</div>
   
@endsection

