
@extends('layouts.main')

@section('isi')

<div class="container mt-4">    
  @if (session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
    <Center><h1>PAKTA INTEGRITAS
        <br>ANTI SPG, KETIDAKBERPIHAKAN DAN KERAHASIAAN</h1></Center>
        <h5>Saya yang bertanda tangan di bawah ini :
        </h5>
        <div class="container">
            <form method="post" action="/dashboard/formpernyataan">
              @csrf
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid
                  @enderror" id="nama" name="nama" value="{{ old('nama') }}">
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
                  @enderror" id="email" name="email" value="{{ old('email') }}">
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
                  @enderror" id="jabatan" name="jabatan" value="{{ old('jabatan') }}">
                  @error('jabatan')
                  <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
                <div class="mb-3">
                  <label for="instansi" class="form-label">Instansi</label>
                  <input type="text" class="form-select @error('instansi') is-invalid
                  @enderror" id="instansi" name="instansi" value="{{ old('instansi') }}">
                  @error('instansi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>
                  
                <p>Menyatakan bahwa saya dengan sungguh-sungguh dalam rangka pelaksanaan pemeriksaan dan pengujian di BPMSPH bersedia menjalankan dan mentaati hal-hal seperti yang tertulis dibawah ini :</p>
                <p>1. Berperan secara pro aktif dalam upaya pencegahan dan pemberantasan Korupsi, Kolusi dan Nepotisme (KKN) serta tidak melibatkan diri dalam perbuatan tercela;<br>
                    2. Berkomitmen tidak meminta pemberian secara langsung dan/atau tidak langsung berupa suap, hadiah, bantuan, atau bentuk lainnya yang tidak sesuai dengan ketentuan yang berlaku serta melaporkan pemberian tersebut apabila menerimanya;<br>
                    3. Berkomitmen bersikap transparan, jujur, objektif dan akuntabel untuk tidak terlibat atau terpengaruh terhadap tekanan komersial, keuangan yang dapat mempengaruhi hasil pengujian untuk menghindari benturan kepentingan (conflict of interest) dalam pelaksanaan tugas;<br>
                    4. Berkomitmen untuk bebas dari kegiatan lain, internal dan eksternal yang dapat mengurangi kepercayaan dalam kemandirian pertimbangan dan integritas dalam kegiatan pengujian, dan berpengaruh buruk terhadap mutu kerja;<br>
                    5. Berkomitmen untuk bekerja secara profesional, menjunjung tinggi aturan yang berlaku baik di lingkungan laboratorium pengujian;<br>
                    6. Berkomitmen untuk menjaga kerahasiaan informasi dan hak kepemilikan dari pelanggan Laboratorium sesuai dengan persyaratan dan ketentuan yang berlaku, termasuk informasi dalam bentuk elektronik;<br>
                    7. Berkomitmen memberi contoh dalam kepatuhan terhadap peraturan perundang-undangan dalam melaksanaan tugas terutama kepada pegawai yang berada di bawah pengawasan saya dan sesama pegawai di lingkungan kerja saya secara konsisten;<br>
                    8. Berkomitmen menyampaikan informasi penyimpangan integritas serta turut menjaga kerahasiaan atas pelanggaran peraturan yang dilaporkannya;<br>
                    9. Bila saya melanggar hal-hal tersebut di atas, saya siap menghadapi konsekuensi berdasarkan ketentuan dan perundang-undangan yang berlaku.</p>
    
                    <div class="mb-3">
                        <label for="kota" class="form-label">Kota</label>
                        <input type="text" class="form-select @error('kota') is-invalid
                        @enderror" id="kota" name="kota" value="{{ old('kota') }}">
                        @error('kota')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid
                        @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                      @enderror
                    </div>
                      <div class="mb-3">
                        <label for="ttd" class="form-label">TTD</label>
                        <input type="file" class="form-control @error('ttd') is-invalid
                        @enderror" id="ttd" name="ttd" value="{{ old('ttd') }}">
                        @error('ttd')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                        @enderror
                      </div>
                      <button type="submit" class="btn btn-success">Kirim</button>
                    </form>
          </div>
</div>
   
@endsection

