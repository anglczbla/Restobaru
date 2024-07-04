@extends('layout.main')

@section('title', 'Tambah Pesan Kontak Baru')

@section('content')
<div class="container-fluid booking py-5">
    <div class="container py-5">
        <h4 class="section-booking-title pe-3">Tambah Order Baru</h4>
        <form method="POST" action="{{ route('orders.store') }}">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
                @error('nama')
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
                <label for="menu_id" class="form-label">Menu</label>
                <select name="menu_id" id="menu_id" class="form-control @error('menu_id') is-invalid @enderror">
                    <option value="" disabled selected>Pilih Menu</option>
                    @foreach ($menus as $menu)
                    <option value="{{ $menu->id }}" {{ old('menu_id') == $menu->id ? 'selected' : '' }}>
                        {{ $menu->kode }} - {{ $menu->nama }} - {{ $menu->harga }}
                    </option>
                    @endforeach
                </select>
                @error('menu_id')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" value="{{ old('jumlah') }}" required>
                @error('jumlah')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu</label>
                <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
                @error('waktu')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                @error('tanggal')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('orders.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
