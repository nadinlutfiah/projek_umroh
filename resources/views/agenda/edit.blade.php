<!DOCTYPE html>
<html>
<head>
    <title>Edit agenda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit agenda</h1>
        <form action="{{ route('agenda.update', $agenda->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- form fields -->
</form>
            <div class="form-group">
                <label for="kegiatan">kegiatan</label>
                <input type="text" class="form-control" id="kegiatan" name="kegiatan" value="{{ $agenda->kegiatan }}" required>
            </div>

            <div class="form-group">
                <label for="tanggal">tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $agenda->tanggal }}" required>
            </div>

            <div class="form-group">
                <label for="waktu">waktu</label>
                <input type="waktu" class="form-control" id="waktu" name="waktu" value="{{ $agenda->waktu }}" required>
            </div>
          
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
