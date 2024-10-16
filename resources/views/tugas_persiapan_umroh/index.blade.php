<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas Persiapan Umroh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Tugas Persiapan Umroh</h1>
        <a href="{{ route('tugas_persiapan_umroh.create') }}" class="btn btn-success mb-3">Tambah Tugas</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Tugas</th>
                    <th>Deskripsi</th>
                    <th>Sudah</th>
                    <th>Tidak Terpenuhi</th>
                    <th>Dikerjakan Rekan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tugas as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_tugas }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>{{ $item->sudah ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $item->tidakTerpenuhi ? 'Ya' : 'Tidak' }}</td>
                        <td>{{ $item->dikerjakanRekan ? 'Ya' : 'Tidak' }}</td>
                        <td>
                            <a href="{{ route('tugas_persiapan_umroh.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('tugas_persiapan_umroh.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
