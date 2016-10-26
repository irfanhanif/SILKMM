@extends('pendaftaran.master.temp')

@section('title', 'HALAMAN UTAMA')

@section('body')
<div class="section">
  <!--   Icon Section   -->
  <div class="row">
    <h4 class="center">Pilih Pelatihan</h4><hr>

  	@for($i=0; $i<6; $i++)-->
    <div class="col s12 m4 l4">
      <div class="card">
        <div class="card-content">
          <i><strong>PP LKMM IX FTIf</strong></i><br>
          <strong>Penyelenggara</strong>   : BEM FTIf<br>
          <strong>Tgl Pendaftaran</strong>      : 8-10 Agustus 2016
        </div>
        <div class="card-action">
          <a href="#">Status</a>
          <a href="#">Daftar</a>
        </div>
      </div>
    </div>
    @endfor
    
  </div>
</div>

<div class="section">
  <div class="row">
    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">no_sim</i></h2>
        <h5 class="center"><strong>PAPERLESS</strong></h5>

        <p class="center-align">LKMM adalah pelatihan yang melibatkan ribuan mahasiswa setiap tahunnya. Banyak sekali kertas-kertas yang digunakan dan akhirnya menjadi sampah. Kami membangun web ini untuk mengurangi sebanyak-banyaknya sampah kertas.</p>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">offline_pin</i></h2>
        <h5 class="center"><strong>EASIER</strong></h5>

        <p class="center-align">Banyak sekali dokumen yang harus dijaga dan direkap saat pelatihan. Web ini dibangun agar semua proses perhitungan dan rekap dikerjakan otomatis oleh komputer.</p>
      </div>
    </div>

    <div class="col s12 m4">
      <div class="icon-block">
        <h2 class="center light-blue-text"><i class="material-icons">stars</i></h2>
        <h5 class="center"><strong>PROUD</strong></h5>

        <p class="center-align">ITS merupakan salah satu institut teknologi terbaik di Indonesia. Sudah sewajarnya jika berbagai kegiatan mahasiswa menjadi kesempatan kita untuk menerapkan teknologi-teknologi terbaik. Salah satunya melalui web ini.</p>
      </div>
    </div>
  </div>
</div>
@endsection