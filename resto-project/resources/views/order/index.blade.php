@extends('layout.main')

@section('title', 'Daftar Order')

@section('content')
<div class="container">
    <h1>Daftar Order</h1>

    <a href="{{ route('order.create') }}" class="btn btn-rounded btn-primary">Tambah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Menu</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Waktu</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($order as $order)
            <tr>
                <td>{{ $order->nama }}</td>
                <td>{{ $order->no_telp }}</td>
                <td>{{ $order->menu ? $order->menu->nama : '-' }}</td>
                <td>{{ $order->jumlah }}</td>
                <td>{{ $order->harga }}</td>
                <td>{{ $order->waktu }}</td>
                <td>{{ $order->harga }}</td>
                <td>
                    <form action="{{route('order.destroy', $order->id)}}"method="post">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus order ini?')">Hapus</button>
                    <a href="{{ route('order.edit', $order->id) }}" class="btn btn-sm btn-primary">Edit</a>
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
    // SweetAlert untuk konfirmasi penghapusan pesanan
    $(document).ready(function () {
        $('.delete-order').on('click', function (event) {
            event.preventDefault();
            var form = $(this).parent('form');
            var order_id = form.attr('id').split('-')[2];

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
                    form.submit();
                }
            });
        });
    });
</script>
@endsection
