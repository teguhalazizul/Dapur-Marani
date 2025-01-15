<!-- resources/views/sejarahsingkats/create.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tambah Sejarah Singkat</title>
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('sejarahsingkats.store') }}" method="POST">
            @csrf
            
            <textarea name="konten" class="form-control mb-3" rows="5" placeholder="Masukkan Konten" required></textarea>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

        <a href="{{ route('sejarahsingkats.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>
</html>
