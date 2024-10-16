<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah tugas Tugas Persiapan Umroh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Tugas Persiapan Umroh</h1>
        <form action="{{ route('tugas_persiapan_umroh.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_tugas">nama__tugas</label>
                <input type="text" class="form-control" id="nama_tugas" name="nama_tugas" required>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                <div class="form-group">
                <label for="sudah">sudah</label>
                <input type="text" class="form-control" id="sudah" name="sudah" required>
                <div class="form-group">
                <label for="tidak terpenuhi">tidakTerpenuhi</label>
                <input type="text" class="form-control" id="tidak terpenuhi" name="tidak terpenuhi" required>
                <div class="form-group">
                <label for="dikerjakan Rekan">dikerjakanRekan</label>
                <input type="text" class="form-control" id="dikerjakan Rekan" name="dikerjakan Rekan" required>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
