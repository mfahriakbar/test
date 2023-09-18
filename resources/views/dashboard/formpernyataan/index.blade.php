@extends('dashboard.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tabel Form</h1>
  </div>
  @if (session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('danger'))

  <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
    {{ session('danger') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if (session()->has('warning'))

  <div class="alert alert-warning alert-dismissible fade show mt-4" role="alert">
    {{ session('warning') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  <div class="table-responsive col-lg-10">
    <a href="/dashboard/formpernyataan/create" class="btn btn-info">Create</a>
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
        @foreach ($formpernyataan as $formpernyataan )
          
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $formpernyataan->nama }}</td>
          <td>{{ $formpernyataan->email }}</td>
          <td>{{ $formpernyataan->jabatan }}</td>
          <td>
            <a href="/dashboard/formpernyataan/{{ $formpernyataan->id }}" class="badge bg-primary"><span data-feather="file-text"></span></a>
            <a href="/dashboard/formpernyataan/{{ $formpernyataan->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/formpernyataan/{{ $formpernyataan->id }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Yakin Menghapus Ini?')"><span data-feather="trash-2"></span></button>
            <a href="/dashboard/exportpdf/{{ $formpernyataan->id }}" class="badge bg-info"><span data-feather="printer"></span></a>
            </form>
          </td>
        </tr>

        @endforeach
      </tbody>
    </table>
  </div>
@endsection