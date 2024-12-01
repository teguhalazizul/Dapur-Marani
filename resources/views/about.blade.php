@extends('layouts.app')

@section('content')

<!-- About Us Header with Background Image -->
<section class="about-header" style="background-image: url('{{ asset('gambar1.jpg') }}');">
    <div class="overlay"></div>
    <div class="text">
        <h1>Dapur Marani</h1>
        <p>Pengalaman Kuliner yang Lezat dan Bergizi untuk Anda</p>
    </div>

</section>

<!-- About Us Content Section -->
<section class="about-content">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p>Dapur Marani adalah kantin yang berfokus pada penyediaan makanan sehat, lezat, dan bergizi untuk karyawan kantor. Kami hadir untuk memberikan pilihan makanan yang cepat saji, namun tetap terjaga kualitas dan kesehatannya. Dengan menu yang beragam dan bahan-bahan berkualitas, kami berkomitmen untuk terus memberikan pengalaman makan yang menyenangkan bagi pelanggan kami.</p>

        <h3>Menu Andalan Kami</h3>

            <ul>
                <li><i class="fas fa-burger"></i> <strong>Siomay Batagor</strong> – Makanan ringan yang kaya rasa dan gurih.</li>
                <li><i class="fas fa-utensils"></i> <strong>Ayam Penyet</strong> – Ayam goreng dengan sambal pedas yang menggugah selera.</li>
                <li><i class="fas fa-mug-hot"></i> <strong>Indomie Bakso</strong> – Kombinasi mie instan dengan bakso yang lezat dan gurih.</li>
                <li><i class="fas fa-fish"></i> <strong>Nila Goreng</strong> – Ikan nila yang digoreng renyah dengan sambal segar.</li>
            </ul>
        <p>Kami percaya bahwa makanan yang lezat dan sehat akan meningkatkan semangat kerja dan produktivitas di kantor. Dapur Marani hadir untuk memenuhi kebutuhan tersebut dengan menyediakan hidangan yang nikmat, cepat, dan terjangkau.</p>
    </div>
</section>

<!-- Footer Section -->
<footer>
    <p>&copy; 2024 Dapur Marani. All Rights Reserved.</p>
</footer>

<!-- CSS -->
<style>
    /* Styling for the About Us Header with background image */
    .about-header {
        position: relative;
        height: 450px;
        background-size: cover;
        background-position: center;
        color: white;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .about-header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5); /* Transparent black overlay */
    }

    .about-header .text {
        position: relative;
        z-index: 1;
    }

    .about-header h1 {
    font-size: 6rem; /* Memperbesar ukuran font */
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    color: #FFCC00;  /* Warna aksen emas */
    margin-bottom: 15px;
    text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.6); /* Efek bayangan (shading) */
}


    .about-header p {
        font-size: 1.5rem;
        font-family: 'Lora', serif;
        font-weight: 300;
        color: #f1f1f1;
        margin-top: 10px;
    }

    /* Styling for the About Us Content Section */
    .about-content {
        padding: 50px 20px;
        background-color: #F1F1F1;
    }

    .about-content .container {
        max-width: 900px;
        margin: 0 auto;
        text-align: center;
    }

    .about-content h2 {
        font-size: 2.8rem;
        font-family: 'Montserrat', sans-serif;
        color: #2C3E50;  /* Dark blue color */
        margin-bottom: 20px;
    }

    .about-content h3 {
        font-size: 2.2rem;
        font-family: 'Roboto Slab', serif;
        color: #FF6F61;
        margin-top: 30px;
    }

    .about-content p {
        font-size: 1.2rem;
        line-height: 1.9; /* Menambah jarak antar baris pada paragraf */
        color: #555;
        margin-bottom: 25px; /* Menambah jarak bawah */
        text-align: justify; /* Rata kanan-kiri untuk tampilan lebih rapi */
    }

    .about-content ul {
        list-style-type: none;
        padding-left: 0;
        margin-bottom: 30px; /* Menambahkan jarak bawah antara daftar dan elemen berikutnya */
    }


    .about-content ul li {
        font-size: 1.2rem; /* Sedikit memperbesar teks */
        line-height: 1.8; /* Memberikan jarak antar baris */
        color: #555;
        margin-bottom: 20px; /* Memberikan jarak antar item */
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }


    .about-content ul li i {
        margin-right: 15px;
        color: #FF6F61; /* Warna ikon */
    }

    /* Footer Section */
    footer {
        background-color: #2C3E50;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 50px;
    }

    /* Add Google Fonts */
    @import url('https://fonts.googleapis.com/css2?family=Lora:wght@400;700&family=Montserrat:wght@500;700&family=Roboto+Slab:wght@400;700&display=swap');
</style>

@endsection
