@extends('layout.main')

@section('title', 'Order')

@section('content')
<div class="row">
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3"></h5>
                <h1 class="mb-0">Edit Order</h1>
            </div>
            <form method="POST" action="{{ route('order.store') }}" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="no_telp">No Telp</label>
                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp') }}">
                    @error('no_telp')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="menu_id">Menu</label>
                    <select name="menu_id" id="menu_id" class="form-control @error('menu_id') is-invalid @enderror">
                        <option value="" disabled selected>Pilih Menu</option>
                        @foreach ($menu as $item)
                        <option value="{{ $item->id }}" {{ old('menu_id') == $item->id ? 'selected' : '' }}>
                            {{ $item->kode }} - {{ $item->nama }} - {{ $item->harga }}
                        </option>
                        @endforeach
                    </select>
                    @error('menu_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jumblah">Jumlah</label>
                    <input type="number" class="form-control @error('jumblah') is-invalid @enderror" id="jumblah" name="jumblah" value="{{ old('jumblah') }}" placeholder="Jumlah">
                    @error('jumblah')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="time">Waktu</label>
                    <input type="time" class="form-control @error('waktu') is-invalid @enderror" id="waktu" name="waktu" value="{{ old('waktu') }}" placeholder="Waktu Pemesanan">
                    @error('waktu')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" placeholder="Tanggal Pemesanan">
                    @error('tanggal')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('order.index') }}" class="btn btn-light">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
