@extends('Administrator.sidebar')
@section('content')
<link rel="stylesheet" href="{{asset('style/user.css')}}">
<!-- Modal Create Toko -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Toko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('toko.admin.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Nama Toko -->
                    <div class="mb-3">
                        <label for="nama_toko" class="form-label fw-semibold">Nama Toko <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                            <input type="text" class="form-control" id="nama_toko" name="nama_toko" required placeholder="Masukan Nama Toko">
                        </div>
                    </div>
                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label fw-semibold">Deskripsi <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-file-lines"></i></span>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required placeholder="Masukan Deskripsi Toko" rows="3"></textarea>
                        </div>
                    </div>
                    <!-- Gambar -->
                    <div class="mb-3">
                        <label for="gambar" class="form-label fw-semibold">Gambar Toko <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                            <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                        </div>
                    </div>
                    <!-- Kontak Toko -->
                    <div class="mb-3">
                        <label for="kontak_toko" class="form-label fw-semibold">Kontak Toko <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="text" class="form-control" id="kontak_toko" name="kontak_toko" maxlength="13" required placeholder="Masukan Nomor Telepon Toko">
                        </div>
                    </div>
                    <!-- Alamat -->
                    <div class="mb-3">
                        <label for="alamat" class="form-label fw-semibold">Alamat <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                            <textarea class="form-control" id="alamat" name="alamat" required placeholder="Masukan Alamat Toko" rows="3"></textarea>
                        </div>
                    </div>
                    <!-- User ID -->
                    <div class="mb-3">
                        <label for="users_id" class="form-label fw-semibold">Pilih User <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                            <select name="users_id" id="users_id" class="form-select" required>
                                <option value="">-- Pilih User --</option>
                                @foreach ($user as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->username }})</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Toko -->
@foreach ( $stores as $store )
    <div class="modal fade" id="editToko{{ $store->id }}" tabindex="-1" aria-labelledby="editTokoLabel{{ $store->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editTokoLabel{{ $store->id }}">Edit Toko</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('toko.admin-update', Crypt::encrypt($store->id)) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <!-- Nama Toko -->
                        <div class="mb-3">
                            <label for="nama_toko_{{ $store->id }}" class="form-label fw-semibold">Nama Toko <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-store"></i></span>
                                <input type="text" class="form-control" id="nama_toko_{{ $store->id }}" name="nama_toko" required
                                    value="{{ old('nama_toko', $store->nama_toko) }}" placeholder="Masukan Nama Toko">
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="mb-3">
                            <label for="deskripsi_{{ $store->id }}" class="form-label fw-semibold">Deskripsi <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-file-lines"></i></span>
                                <textarea class="form-control" id="deskripsi_{{ $store->id }}" name="deskripsi" required rows="3" placeholder="Masukan Deskripsi Toko">{{ old('deskripsi', $store->deskripsi) }}</textarea>
                            </div>
                        </div>
                        <!-- Gambar (opsional ganti) -->
                        <div class="mb-3">
                            <label for="gambar_{{ $store->id }}" class="form-label fw-semibold">Gambar Toko <small class="text-muted">(kosongkan jika tidak diganti)</small></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa-solid fa-image"></i></span>
                                <input type="file" class="form-control" id="gambar_{{ $store->id }}" name="gambar" accept="image/*">
                            </div>
                            @if($store->gambar)
                                <div class="mt-2">
                                    <small>Gambar saat ini:</small><br>
                                    <img src="{{ asset('storage/gambar-toko/' . $store->gambar) }}" alt="gambar toko" class="img-fluid" style="max-height:120px;">
                                </div>
                            @endif
                        </div>
                        <!-- Kontak Toko -->
                        <div class="mb-3">
                            <label for="kontak_toko_{{ $store->id }}" class="form-label fw-semibold">Kontak Toko <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                <input type="text" class="form-control" id="kontak_toko_{{ $store->id }}" name="kontak_toko" maxlength="15" required
                                    value="{{ old('kontak_toko', $store->kontak_toko) }}" placeholder="Masukan Nomor Telepon Toko">
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="alamat_{{ $store->id }}" class="form-label fw-semibold">Alamat <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt-fill"></i></span>
                                <textarea class="form-control" id="alamat_{{ $store->id }}" name="alamat" required rows="3" placeholder="Masukan Alamat Toko">{{ old('alamat', $store->alamat) }}</textarea>
                            </div>
                        </div>
                        <!-- User ID  -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Pemilik Toko</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" value="{{ $store->user->name ?? '—' }} ({{ $store->user->username ?? '' }})" disabled>
                                <input type="hidden" name="users_id" value="{{ $store->users_id }}">
                            </div>
                            <small class="text-muted">Pemilik toko tidak dapat diubah lewat form ini.</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
<!-- Alert -->
@if (Session::get('pesan'))
    <div class="alert alert-success alert-dismissible fade show mb-1 mt-2" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        {{ Session::get('pesan') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>  
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="d-flex justify-content-between">
        <h2 class="mt-4 fw-bold">Toko</h2>
        <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-4">Tambah Toko</a>
    </div>
    <hr>
    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>Nama Toko</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Kontak Toko</th>
                <th>Alamat</th>
                <th>Pemilik</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $stores as $item )
                <tr>
                    <td>{{ $item->nama_toko }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <img src="{{ asset('storage/gambar-toko/' . $item->gambar) }}" width="100" height="100" alt="">
                    </td>
                    <td>{{ $item->kontak_toko }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>
                        <a data-bs-toggle="modal" data-bs-target="#editToko{{ $item->id }}" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                        <a href="{{route('toko.admin.delete',Crypt::encrypt($item->id))}}" class="btn btn-sm btn-warning"><i class="bi bi-trash-fill"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            responsive: true
        });
    });
</script>
@endsection