@extends('navbar')
@section('content')
<div class="container">
    <div class="d-flex align-items-center mb-4 mt-4">
        <a href="{{ url()->previous() }}" class="btn btn-light me-3">
            <i class="fa-solid fa-arrow-left"></i>
        </a>
        <h2 class="mb-0">Hasil Pencarian Produk : <strong>{{ $keyword }}</strong></h2>
    </div>
    <div class="row g-4">
        @forelse ($products as $p)
            <div class="col-6 col-md-3">
                <div class="card h-100 shadow-sm border-0">
                    <a href="{{ route('produk.detail', Crypt::encrypt($p->id)) }}" class="nav-link">
                        <img src="{{ $p->imageProducts->first()
                                        ? asset('storage/gambar-produk/' . $p->imageProducts->first()->nama_gambar)
                                        : asset('asset/image/SkoolaAssets/no-image.png') }}"
                                class="card-img-top"
                                alt="{{ $p->nama_produk }}"
                                style="object-fit:cover; height:200px;">
                    </a>
                    <div class="card-body">
                        <h6 class="card-title mb-1">{{ Str::limit($p->nama_produk, 50, '...') }}</h6>
                        <p class="text-muted small mb-2">Stok : {{ $p->stok }}</p>
                        <strong class="text-dark">
                            Rp {{ number_format($p->harga, 0, ',', '.') }}
                        </strong>
                    </div>
                    <div class="d-flex p-2">
                        <a class="btn btn-primary w-100 me-2">
                            <i class="bi bi-whatsapp me-2" style="color: #16DB65"></i>
                            Chat Penjual
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">
                Belum ada produk di kategori ini.
            </div>
        @endforelse
    </div>
</div>
@endsection