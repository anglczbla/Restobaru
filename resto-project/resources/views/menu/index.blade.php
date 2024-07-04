@extends('layout.main')

@section('title', 'Daftar Menu')

@section('content')
<div class="container">
    <h1>Daftar Menu</h1>


    <a href="{{ route('menu.create') }}" class="btn btn-rounded btn-primary">Tambah</a>


    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menu as $menu_item)
            <tr>
                <td>{{ $menu_item->kode }}</td>
                <td>{{ $menu_item->nama }}</td>
                <td>{{ $menu_item->harga }}</td>
                <td>
                    <a href="{{ route('menu.edit', $menu_item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <form action="{{ route('menu.destroy', $menu_item->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus menu ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
<script>
    // SweetAlert untuk konfirmasi penghapusan menu
    $(document).ready(function () {
        $('.delete-menu').on('click', function () {
            var menu_id = $(this).data('id');

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
                    event.preventDefault();
                    document.getElementById('delete-form-' + menu_id).submit();
                }
            });
        });
    });
</script>
@endsection