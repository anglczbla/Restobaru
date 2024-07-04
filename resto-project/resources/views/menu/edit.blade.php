@extends('layout.main')

@section('title', 'Edit Menu')

@section('content')
<div class="container">
    <h1>Edit Menu</h1>
    
    @can('create', App\Models\Menu::class)
    <a href="{{ route('menu.create') }}" class="btn btn-rounded btn-primary">Tambah</a>
    @endcan

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('menu.update', $menu->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode">Kode Menu</label>
            <input type="text" class="form-control" name="kode" value="{{ $menu->kode }}">
            @error('kode')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="nama">Nama Menu</label>
            <input type="text" class="form-control" name="nama" value="{{ $menu->nama }}">
            @error('nama')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" value="{{ $menu->harga }}">
            @error('harga')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('menu.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
