<!DOCTYPE html>
<html>
<head>
    <title>Edit Tugas Persiapan Umroh</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit doa</h1>
        <form action="{{ route('tugas_persiapan_umroh.update', $tugas->id) }}" method="POST">
    @csrf
    @method('PUT')
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
    <button type="submit" class="btn btn-primary">Update</button>
</form>

    </div>
</body>
</html>
