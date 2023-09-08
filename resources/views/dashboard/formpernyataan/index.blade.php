@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tabel Form</h1>
  </div>
  <div class="table-responsive col-lg-10">
    <a href="/pernyataan/create" class="btn btn-info">Create</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Email</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($formpernyataan as $f )
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $f->nama }}</td>
          <td>{{ $f->email }}</td>
          <td>{{ $f->jabatan }}</td>
          <td>
            <a href="/dashboard/formpernyataan/{{ $f->id }}" class="badge bg-primary"><span data-feather="file-text"></span></a>
            <a href="" class="badge bg-danger"><span data-feather="x-circle"></span></a>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
@endsection