@extends('layout.main')

@section('title', 'Menu')

@section('content')
<div class="row">
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                <h5 class="section-title px-3">Tambah</h5>
                <h1 class="mb-0">Tambah Menu</h1>
            </div>
            <form method="POST" action="{{ route('menu.store') }}" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Menu</label>
                    <input type="text" class="form-control" name="kode" value="{{ old('kode') }}">
                    @error('kode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nama">Nama Menu</label>
                    <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                    @error('nama')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" class="form-control" name="harga" value="{{ old('harga') }}" placeholder="Harga">
                    @error('harga')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="{{ route('menu.index') }}" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
