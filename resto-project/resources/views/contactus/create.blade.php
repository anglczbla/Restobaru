@extends('layout.main')

@section('title', 'Tambah Pesan Kontak Baru')

@section('content')
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <h4 class="section-booking-title pe-3">Tambah Pesan Kontak Baru</h4>
        <form method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
                @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telp</label>
                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}" required>
                @error('no_telp')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" rows="3" required>{{ old('pesan') }}</textarea>
                @error('pesan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('contact.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
