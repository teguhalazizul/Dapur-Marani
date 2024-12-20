<!-- resources/views/sejarahsingkats/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Sejarah Singkat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Sejarah Singkat</h1>

        <form action="{{ route('sejarahsingkats.update', $sejarahsingkat) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="konten">Konten:</label>
                <textarea name="konten" id="konten" class="form-control" required>{{ $sejarahsingkat->konten }}</textarea>
            </div>
            <button type="submit" class="btn btn-warning">Update</button>
        </form>

        <a href="{{ route('sejarahsingkats.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
