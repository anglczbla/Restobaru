@extends('layout.main')

@section('title', 'Reservation')

@section('content')
<div class="row">
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                a<h1 class="mb-0">Buat Reservasi</h1>
            </div>
            <form method="POST" action="{{ route('reservasi.store') }}" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">No Telp</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date">Tanggal</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" required>
                    @error('date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="time">Waktu</label>
                    <input type="time" class="form-control" id="time" name="time" value="{{ old('time') }}" required>
                    @error('time')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number_of_people">Jumlah Orang</label>
                    <input type="number" class="form-control" id="number_of_people" name="number_of_people" value="{{ old('number_of_people') }}" required>
                    @error('number_of_people')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ route('reservasi.index') }}" class="btn btn-light">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
