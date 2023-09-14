
@extends('dashboard.layouts.main')

@section('container')

<div class="container mt-4">    
  @if (session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <Center><h1>Form Edit</h1></Center>
        <div class="container">
            <form method="post" action="/dashboard/formpernyataan/{{ $formpernyataan->id }}" enctype="multipart/form-data">
              @method('put')
              @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid
                  @enderror" id="nama" name="nama" value="{{ old('nama',$formpernyataan->nama) }}">
                  <div id="nama" class="form-text">Nama Lengkap</div>
                  @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control @error('email') is-invalid
                  @enderror" id="email" name="email" value="{{ old('email',$formpernyataan->email) }}">
                  <div id="email" class="form-text">
                    example@example.com</div>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
                <div class="mb-3">
                  <label for="jabatan" class="form-label">Jabatan</label>
                  <input type="text" class="form-select @error('jabatan') is-invalid
                  @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan',$formpernyataan->jabatan) }}">
                  @error('jabatan')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
                <div class="mb-3">
                  <label for="instansi" class="form-label">Instansi</label>
                  <input type="text" class="form-select @error('instansi') is-invalid
                  @enderror" id="instansi" name="instansi" value="{{ old('instansi',$formpernyataan->instansi) }}">
                  @error('instansi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-select @error('kota') is-invalid
                        @enderror" id="kota" name="kota" value="{{ old('kota',$formpernyataan->kota) }}">
                        @error('kota')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid
                        @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal',$formpernyataan->tanggal) }}">
                        @error('tanggal')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>

                      <button type="submit" class="btn btn-success mb-5">Kirim</button>
                    </form>
          </div>
</div>
   
@endsection

