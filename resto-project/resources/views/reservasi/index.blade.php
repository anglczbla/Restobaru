@extends('layout.main')

@section('title', 'Daftar Reservasi')

@section('content')
<div class="container">
    <h1>Daftar Reservasi</h1>

    <a href="{{ route('reservasi.create') }}" class="btn btn-rounded btn-primary">Tambah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Jumlah Orang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservasi as $reservation)
                <tr>
                    <td>{{ $reservation->name }}</td>
                    <td>{{ $reservation->phone }}</td>
                    <td>{{ $reservation->date }}</td>
                    <td>{{ $reservation->time }}</td>
                    <td>{{ $reservation->number_of_people }}</td>
                    <td>
                        <a href="{{ route('reservasi.edit', $reservation->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservasi.destroy', $reservation->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus reservasi ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert untuk konfirmasi penghapusan reservasi
    $(document).ready(function () {
        $('.btn-danger').on('click', function (event) {
            event.preventDefault(); // Prevent the form from submitting

            var reservation_id = $(this).closest('form').attr('id').split('-')[2];

            Swal.fire({
                title: 'Anda yakin?',
                text: "Anda tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + reservation_id).submit();
                }
            });
        });
    });
</script>
@endsection
