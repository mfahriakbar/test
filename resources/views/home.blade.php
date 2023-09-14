@extends('layouts.main')

@section('isi')

<div class="container mt-4">
    <center><h1>{{ $judul }}</h1></center>
    @if (session()->has('success'))

    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <center>
    {{-- <h5><a href="/pernyataan/create"><img src="img/surat.png" alt=""></a></h5> --}}
  </center>
</div>
   
@endsection

