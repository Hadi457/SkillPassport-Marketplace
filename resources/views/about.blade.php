@extends('navbar')
@section('content')
<link rel="stylesheet" href="{{ asset('style/about.css') }}">
<section class="container-fluid text-center m-0 p-0">
    <div class="p-5 text-white"
        style="background: 
                linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), 
                url({{ asset('asset/image/SkoolaAssets/3.jpg') }}) center/cover no-repeat; height: 500px;">
        <div class="container d-flex flex-column justify-content-center align-items-start h-100">
            <h1 class="fw-semibold mb-3">Tentang Skoola</h1>
            <p class="mb-4 text-start w-50">Skoola adalah platform marketplace pendidikan yang menghubungkan penjual dan pembeli kebutuhan belajar dalam satu tempat.
Kami hadir untuk memudahkan setiap orang menemukan dan menjual perlengkapan pendidikan dengan cepat, aman, dan terpercaya.</p>
        </div>
    </div>
</section>
<section class="container my-5">

  <!-- Hero / Intro -->
  <div class="text-center mb-5">
    <h2 class="fw-bold">Skoola</h2>
    <p class="text-muted mx-auto" style="max-width: 700px;">
      Kami percaya bahwa belanja kebutuhan sekolah seharusnya mudah dan menyenangkan. 
      Skoola hadir sebagai solusi digital untuk menghubungkan sekolah, siswa, dan penjual perlengkapan pendidikan dalam satu platform yang aman dan efisien.
    </p>
  </div>

  <!-- 3 Columns - Keunggulan -->
  <div class="row text-center mb-5">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm p-4 h-100">
        <div class="mb-3">
          <i class="bi bi-bag-check fs-1 text-ijo"></i>
        </div>
        <h5 class="fw-semibold mb-2">Belanja Mudah</h5>
        <p class="text-muted small mb-0">Temukan ribuan produk sekolah hanya dalam beberapa klik. Tanpa ribet, tanpa keluar rumah.</p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm p-4 h-100">
        <div class="mb-3">
          <i class="bi bi-shield-check fs-1 text-ijo"></i>
        </div>
        <h5 class="fw-semibold mb-2">Aman & Terpercaya</h5>
        <p class="text-muted small mb-0">Setiap toko dan produk diverifikasi agar kamu bisa berbelanja dengan tenang dan nyaman.</p>
      </div>
    </div>

    <div class="col-md-4">
        <div class="card border-0 shadow-sm p-4 h-100">
            <div class="mb-3">
            <i class="bi bi-lightning-charge fs-1 text-ijo"></i>
            </div>
            <h5 class="fw-semibold mb-2">Efisien & Fleksibel</h5>
            <p class="text-muted small mb-0">
            Dengan sistem yang cepat dan tampilan yang sederhana, Skoola mempermudah semua proses belanja kebutuhan sekolah secara digital.
            </p>
        </div>
    </div>

  </div>

  <!-- Tentang Skoola -->
  <div class="row align-items-center gy-4 mb-5">
        <div class="col-md-6 text-center">
            <img 
            src="{{ asset('asset/image/SkoolaAssets/4.png') }}" 
            alt="Tentang Skoola" 
            class="img-fluid rounded-3" 
            style="max-width: 50%%; height: auto;">
        </div>

        <div class="col-md-6">
            <h4 class="fw-bold mb-3">Solusi Digital untuk Kebutuhan Sekolah</h4>

            <p class="text-muted mb-4">
            Skoola adalah platform marketplace pendidikan yang memudahkan siapa pun menemukan, membeli, 
            dan menjual perlengkapan sekolah secara online. Kami hadir untuk membangun ekosistem digital 
            yang menghubungkan siswa, guru, dan penjual dalam satu ruang yang aman dan terpercaya.
            </p>

            <ul class="list-unstyled text-muted small mb-0">
            <li class="mb-2">
                <i class="bi bi-check-circle text-ijo me-2"></i> Ribuan produk sekolah terdaftar
            </li>
            <li class="mb-2">
                <i class="bi bi-check-circle text-ijo me-2"></i> Penjual dan toko terpercaya
            </li>
            <li>
                <i class="bi bi-check-circle text-ijo me-2"></i> Sistem transaksi aman dan cepat
            </li>
            </ul>
        </div>
    </div>


  <!-- Statistik -->
  <div class="text-center mb-5">
    <div class="row justify-content-center">
      <div class="col-6 col-md-3">
        <h3 class="fw-bold text-ijo mb-0">10K+</h3>
        <p class="text-muted small">Produk Terdaftar</p>
      </div>
      <div class="col-6 col-md-3">
        <h3 class="fw-bold text-ijo mb-0">500+</h3>
        <p class="text-muted small">Toko Bergabung</p>
      </div>
      <div class="col-6 col-md-3">
        <h3 class="fw-bold text-ijo mb-0">400+</h3>
        <p class="text-muted small">Pengguna</p>
      </div>
    </div>
  </div>

</section>

@endsection