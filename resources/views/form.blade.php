
@extends('layouts.main')

@section('isi')

<div class="container mt-4">
    <article>
        <h1>{{ $formulir["judul"] }}</h1>
        <h5>{{ $formulir["formulir"] }}</h5>
        <a href="/formulir" class="btn btn-primary">Kembali</a>
         
        <div class="container">
            <form>
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama">
                  <div id="emailHelp" class="form-text">Nama Lengkap</div>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email">
                  <div id="emailHelp" class="form-text">
                    example@example.com</div>
                </div>
                <div class="mb-3">
                  <label for="jabatan" class="form-label">Jabatan</label>
                  <input type="text" class="form-select" id="jabatan">
                </div>
                <div class="mb-3">
                  <label for="instansi" class="form-label">Instansi</label>
                  <input type="text" class="form-control" id="instansi">
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
                        <input type="text" class="form-select" id="kota">
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal">
                      </div>
                      <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanda Tangan</label>
                        <input type="canvas" class="form-control" id="tanggal">
                      </div>
            </form>
            </div>
        <button type="submit" class="btn btn-success">Kirim</button>
    </article>
</div>
   
@endsection

