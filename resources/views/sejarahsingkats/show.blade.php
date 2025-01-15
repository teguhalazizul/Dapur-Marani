<!-- resources/views/sejarahsingkats/show.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detail Sejarah Singkat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
       
        <p>{{ $sejarahsingkat->konten }}</p>

        <a href="{{ route('sejarahsingkats.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</body>
</html>
