@extends('navbar')
@section('content')
<section class="container my-5">
  <!-- Profil Toko -->
  <div class="card border-0 shadow-sm mb-4">
    <div class="card-body d-flex flex-column flex-md-row align-items-center gap-3">
      <!-- Logo / Foto Toko -->
      <img src="{{ asset('asset/image/SkoolaAssets/3.jpg') }}" alt="Toko" class="rounded-circle border" width="100" height="100" style="object-fit: cover;">
      <!-- Info Toko -->
      <div>
        <h3 class="mb-1 fw-bold">Toko Kreatif</h3>
        <p class="mb-0"><i class="bi bi-whatsapp me-1"></i> 085712344321</p>
      </div>
      <!-- Tombol WhatsApp -->
      <div class="ms-md-auto">
        <a href="https://wa.me/6281234567890" target="_blank" style="background-color: #020202ff;" class="btn btn-success">
          <i class="bi bi-whatsapp me-1" style="color: #16DB65"></i> Hubungi via WhatsApp
        </a>
      </div>
    </div>
  </div>
  <!-- Deskripsi Toko -->
  <div class="mb-5">
    <h5 class="fw-semibold">Tentang Toko</h5>
    <p class="text-muted">
      Kami menyediakan berbagai kebutuhan sekolah — mulai dari alat tulis, seragam, buku pelajaran, hingga perlengkapan kelas. 
      Semua produk kami dijamin berkualitas dan siap dikirim ke seluruh Indonesia.
    </p>
  </div>
  <!-- Daftar Produk -->
  <div>
    <h5 class="fw-semibold mb-3">Produk dari Toko Kreatif</h5>
    <div class="row g-4">
      <!-- Produk -->
      <div class="col-6 col-md-3">
            <div class="card h-100 shadow-sm border-0">
                <img src="{{asset('asset/image/SkoolaAssets/2.jpg')}}" class="card-img-top" alt="Pulpen Gel Hitam">
                <div class="card-body">
                    <h6 class="card-title mb-1">Pulpen Gel Hitam</h6>
                    <p class="text-muted small mb-2">Toko Kreatif</p>
                    <strong class="text-dark">Rp5.000</strong>
                </div>
                <div class="d-flex p-2">
                    <a class="btn btn-primary w-100">
                        <i class="bi bi-whatsapp me-2" style="color: #16DB65"></i> Chat Penjual
                    </a>
                </div>
            </div>
        </div>
</section>

@endsection