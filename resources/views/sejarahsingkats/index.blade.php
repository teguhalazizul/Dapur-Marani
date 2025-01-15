<!-- resources/views/sejarahsingkats/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Sejarah Singkat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Sejarah Singkat</h1>
        <a href="{{ route('sejarahsingkats.create') }}" class="btn btn-primary mb-3">Tambah Sejarah Singkat</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>

                    <th>Konten</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sejarahsingkats as $sejarahsingkat)
                    <tr>

                        <td>{{ $sejarahsingkat->konten }}</td>
                        <td>
                            <a href="{{ route('sejarahsingkats.edit', $sejarahsingkat) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('sejarahsingkats.destroy', $sejarahsingkat) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
