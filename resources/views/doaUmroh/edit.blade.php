<!DOCTYPE html>
<html>
<head>
    <title>Edit doa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit doa</h1>
        <form action="{{ route('doaumroh.update', $doaumroh->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nama_doa">Nama Doa</label>
        <input type="text" class="form-control" id="nama_doa" name="nama_doa" value="{{ $doaumroh->nama_doa }}" required>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $doaumroh->deskripsi }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

    </div>
</body>
</html>
