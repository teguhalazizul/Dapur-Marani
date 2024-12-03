{{-- @extends('layouts.app')

@section('content')

<!-- Menu Header -->
<section class="menu-header" style="background-image: url('{{ asset('gambar-menu.jpg') }}');">
    <div class="overlay"></div>
    <div class="text">
        <h1>Menu Dapur Marani</h1>
        <p>Eksperimen Rasa yang Menggoda</p>
    </div>
</section>

<!-- Menu List -->
<section class="menu-content">
    <div class="container">
        <h2>Daftar Menu</h2>
        <div class="menu-grid">
            <div class="menu-item">
                <img src="{{ asset('images/batagor.jpg') }}" alt="Siomay Batagor" class="menu-image">
                <div class="menu-details">
                    <h3>Siomay Batagor</h3>
                    <p class="price">Rp15.000</p>
                    <p>Makanan ringan yang kaya rasa dan gurih, sempurna untuk makan siang.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/pecellele.jpg') }}" alt="Pecel Lele" class="menu-image">
                <div class="menu-details">
                    <h3>Pecel Lele</h3>
                    <p class="price">Rp25.000</p>
                    <p>Lele goreng dengan sambal khas yang pedas, disajikan dengan lalapan segar.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/ayam.jpg') }}" alt="Ayam Penyet" class="menu-image">
                <div class="menu-details">
                    <h3>Ayam Penyet</h3>
                    <p class="price">Rp20.000</p>
                    <p>Ayam goreng krispi dengan sambal pedas dan nasi hangat, lezat!</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/nila.jpg') }}" alt="Nila Goreng" class="menu-image">
                <div class="menu-details">
                    <h3>Nila Goreng</h3>
                    <p class="price">Rp30.000</p>
                    <p>Lezatnya ikan nila goreng dengan sambal segar, sempurna untuk makan siang.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/miebakso.jpg') }}" alt="Indomie Bakso" class="menu-image">
                <div class="menu-details">
                    <h3>Indomie Bakso</h3>
                    <p class="price">Rp12.000</p>
                    <p>Kombinasi mie instan dengan bakso yang gurih dan nikmat.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/pisang.jpg') }}" alt="Pisang Kipas" class="menu-image">
                <div class="menu-details">
                    <h3>Pisang Kipas</h3>
                    <p class="price">Rp10.000</p>
                    <p>Pisang goreng berbentuk kipas yang renyah di luar dan lembut di dalam.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/ubi.jpg') }}" alt="Singkong Goreng" class="menu-image">
                <div class="menu-details">
                    <h3>Singkong Goreng</h3>
                    <p class="price">Rp8.000</p>
                    <p>Singkong goreng renyah dengan rasa gurih, cocok sebagai camilan.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <div class="menu-item">
                <img src="{{ asset('images/nugget.jpg') }}" alt="Nugget Ayam" class="menu-image">
                <div class="menu-details">
                    <h3>Nugget Ayam</h3>
                    <p class="price">Rp15.000</p>
                    <p>Nugget ayam renyah di luar, lembut di dalam, selalu jadi favorit.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
            <!-- Menu Telor Dadar -->
            <div class="menu-item">
                <img src="{{ asset('images/dadar.jpg') }}" alt="Telor Dadar" class="menu-image">
                <div class="menu-details">
                    <h3>Telor Dadar</h3>
                    <p class="price">Rp10.000</p>
                    <p>Telur dadar dengan rasa gurih dan tekstur lembut, cocok untuk sarapan.</p>
                    <a href="#" class="order-button">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; 2024 Dapur Marani. All Rights Reserved.</p>
</footer>

<!-- CSS -->
<style>
    .menu-header {
        position: relative;
        height: 350px;
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

/* Mengubah background belakang teks menjadi merah ngejreng */
.menu-header .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(255, 87, 51, 0.7); /* Merah ngejreng */
    z-index: 1; /* Agar overlay berada di atas gambar */
}

    .menu-header .text {
        position: relative;
        z-index: 1;
    }

    .menu-header h1 {
    font-size: 3.5rem; /* Sesuaikan ukuran teks */
    font-family: 'Montserrat', sans-serif;
    color: #FFCC00; /* Warna tulisan */
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7); /* Memberi efek bayangan pada teks */
    margin-bottom: 10px; /* Mengurangi ruang bawah */
}

.menu-header {
    position: relative;
    height: 350px; /* Atur tinggi sesuai kebutuhan */
    background-image: url('{{ asset('gambar-menu.jpg') }}');
    background-size: cover; /* Gambar mengisi penuh area */
    background-position: center center; /* Fokus pada bagian tengah gambar */
    color: white;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 10%; /* Mengurangi padding agar lebih padat */
}

.menu-content {
    padding: 50px 20px;
    background-color: #FAF3E0;  /* Krem lembut */
}


    .menu-content .container {
        max-width: 1000px;
        margin: 0 auto;
        text-align: center;
    }

    .menu-content h2 {
    font-size: 2.8rem;
    color: #2C3E50;
    margin-bottom: 30px;
    font-family: 'Montserrat', sans-serif;
}

    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        margin-top: 20px;
    }

    .menu-item {
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease;
    }

    .menu-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }

    .menu-item img {
    width: 100%;
    height: 250px;  /* Ukuran gambar yang konsisten */
    object-fit: cover;  /* Gambar akan terpotong jika perlu untuk memenuhi area */
    border-radius: 10px;
    margin-bottom: 15px;
}


    .menu-details {
        text-align: left;
        color: #333;
    }

    .menu-item h3 {
    font-size: 1.8rem;
    color: #D35400;  /* Warna oranye tua */
    margin-bottom: 10px;
    font-family: 'Georgia', serif;
}

    .price {
        font-size: 1.5rem;
        color: #27AE60;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .menu-header p {
    font-size: 1.2rem; /* Menyesuaikan ukuran teks deskripsi */
    color: #f1f1f1;
    margin-top: 0;
    z-index: 2; /* Menjaga teks tetap terlihat jelas */
}
.order-button {
    background-color: #FFD700; /* Emas */
    color: #2C3E50;
    padding: 10px 20px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    font-family: 'Montserrat', sans-serif;
    transition: background-color 0.3s ease, transform 0.3s ease;
}
.order-button:hover {
    background-color: #C39BD3; /* Warna ungu lembut */
    transform: translateY(-3px);
}

/* Footer dengan background gelap dan teks terang */
footer {
    background-color: #2C3E50;
    color: white;
    padding: 20px;
    text-align: center;
    font-family: 'Montserrat', sans-serif;
}

footer p {
    margin: 0;
}




    .menu-item --}}


<!-- resources/views/menu.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Menu</h2>
    <!-- Tombol untuk Tambah Menu -->
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createMenuModal">Tambah Menu</button>

    <!-- Tabel Daftar Menu -->
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Menu</th>
                <th>Gambar</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <!-- Daftar menu akan ditampilkan di sini -->
            @foreach ($menus as $menu)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $menu->nama }}</td>
                <td><img src="{{ asset('blade/images/' . $menu->gambar) }}" alt="{{ $menu->nama }}" width="50"></td>
                <td>{{ $menu->deskripsi }}</td>
                <td>{{ $menu->harga }}</td>
                <td>
                    <!-- Aksi Edit dan Hapus -->
                    <a href="{{ route('menu.edit', $menu->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('menu.destroy', $menu->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Modal untuk Tambah atau Edit Menu -->
<div class="modal fade" id="createMenuModal" tabindex="-1" aria-labelledby="createMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="createMenuModalLabel">Tambah Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar Menu</label>
                        <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="number" class="form-control" id="harga" name="harga" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
