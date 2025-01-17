<div align="center">
  <h2>SOFTWARE REQUIREMENTS SPECIFICATION</h2>
  <h2>FOR</h2>
  <h2>DAPUR MARANI</h2>
</div>


<br><br>

<div align="center">
  <h3>Prepared by</h3>
  <p>
    Muhammad Yudha .A. (2355301149)<br>
    Teguh Al Azizul (2355301197)<br>
    Tifani (2355301201)
  </p>

    
</div>
<br><br>




<div align="center">
  <h3>Supervisors</h3>
  <p>
    Muhammad Mahrus Zain, S.S.T., M.T.I.<br>
    Nur Mufida
  </p>
</div>

<br><br>


<div align="center">
    <h2>PROGRAM STUDI TEKNIK INFORMATIKA</h2>
  <h2>POLITEKNIK CALTEX RIAU</h2>
  <p>TA 2024/2025</p>
</div>

<br><br>

<br><br>


# BAB I Pendahuluan

## 1.1 Tujuan

Dokumen Software Requirement Specification (SRS) ini disusun untuk mendefinisikan dan menguraikan spesifikasi teknis dalam pengembangan “Sistem Dapur Marani”. Sistem ini dirancang untuk mendigitalisasi operasional Dapur Marani, sebuah kantin yang terletak di lingkungan kantor, dengan tujuan utama memperkenalkan dan mempermudah akses informasi mengenai menu makanan, harga, serta layanan lainnya bagi karyawan kantor.

Saat ini, Dapur Marani masih bergantung pada promosi melalui media sosial terbatas, seperti WhatsApp Story bahkan pengunjung yang datang langsung ke kantin yang dirasa kurang efektif untuk menjangkau pelanggan yang lebih luas. Oleh karena itu, pengembangan sistem informasi berbasis website ini diharapkan dapat menjadi solusi untuk meningkatkan serta memberikan pengalaman yang lebih baik dan efisien bagi para pengguna dalam mengakses informasi dan melakukan pemesanan.

Dokumen ini bertujuan untuk menjadi acuan dalam pembangunan perangkat lunak yang dapat mendukung Dapur Marani dalam memperluas jangkauan pasarnya, meningkatkan interaksi dengan pelanggan, dan meningkatkan kepuasan karyawan dengan menyediakan sistem yang lebih terorganisir dan mudah diakses.

## 1.2 Lingkup

Sistem Informasi Dapur Marani adalah aplikasi yang kami bangun untuk mendukung operasional dan promosi Dapur Marani, sebuah kantin yang berlokasi di lingkungan kantor. Sistem ini bertujuan untuk mempermudah karyawan dalam mengakses informasi mengenai menu yang tersedia, harga, serta proses pemesanan makanan secara digital. Selain itu, sistem ini juga diharapkan dapat meningkatkan jangkauan promosi Dapur Marani yang selama ini hanya dilakukan melalui WhatsApp story dan pengunjung yang datang langsung ke kantin.

## 1.3 Akronim, Singkatan, dan Definisi

| Istilah | Definisi |
| ------ | ------ |
|   SRS     |    Software Requirement Specification    |
|    Login    | Digunakan untuk mengakses aplikasi       |
|   Software Requirement Specification     | perangkat lunak yang akan dibuat dan sebagai penyembatani komunikasi pembuat dengan pengguna       |
|    Use Case    | situasi dimana sistem anda digunakan untuk memenuhi satu atau lebih kebutuhan pemakaian anda       |


## 1.4 Referensi

## 1.5 Overview

Bab selanjutnya dalam dokumen ini akan menjelaskan secara rinci mengenai sistem yang diterapkan pada aplikasi Dapur Marani. Aplikasi ini dirancang untuk mempermudah akses informasi mengenai menu makanan yang tersedia di kantin, harga, serta deskripsi makanan yang dapat dilihat oleh karyawan di lingkungan kantor. Melalui aplikasi ini, pengguna dapat mengetahui informasi terkini tentang menu yang ditawarkan tanpa perlu datang langsung ke kantin.

Selain itu, aplikasi ini juga menyediakan fitur yang mengarahkan pengguna ke saluran komunikasi WhatsApp dan Instagram milik Dapur Marani, untuk memudahkan interaksi lebih lanjut, baik itu untuk bertanya mengenai menu atau melakukan pemesanan secara langsung melalui platform yang sudah ada.

Bab 2 dan 3 akan memberikan deskripsi lebih detail mengenai struktur aplikasi yang akan dibangun, termasuk penjelasan mengenai setiap fungsi teknis yang digunakan untuk mendukung operasional sistem Dapur Marani. Di bab ini juga akan dijelaskan alur sistem dan bagaimana aplikasi akan meningkatkan kenyamanan dan efisiensi dalam memperoleh informasi tentang kantin.

<br><br>

# BAB II Gambaran Umum

Dapur Marani merupakan sebuah usaha kuliner yang menyediakan berbagai pilihan makanan sehat, terjangkau, dan berkualitas. Dalam era digital yang berkembang pesat ini, teknologi menjadi faktor penting dalam meningkatkan efisiensi dan menjangkau pasar yang lebih luas. Oleh karena itu, Dapur Marani merancang sebuah Sistem Informasi Website yang bertujuan untuk memberikan kemudahan akses bagi pengunjung yang ingin mengetahui lebih lanjut mengenai menu, informasi tentang Dapur Marani, serta cara untuk melakukan pemesanan melalui platform digital.

Sistem ini dirancang agar pengunjung dapat mengakses informasi dengan mudah dan cepat, kapan saja dan di mana saja, baik untuk mengetahui lebih lanjut tentang menu yang disediakan atau untuk menghubungi Dapur Marani langsung. Dengan memanfaatkan website ini, Dapur Marani berusaha memperluas pengenalan dan jangkauan pasarnya.

## Fitur Utama

- **View Menu**: Menampilkan daftar menu yang tersedia, lengkap dengan harga dan deskripsi setiap menu.
- **View Tentang Kami**: Menyediakan informasi mengenai sejarah, visi, misi, dan informasi menarik tentang Dapur Marani.
- **View Kontak Kami**: Halaman untuk menghubungi Dapur Marani melalui email atau WhatsApp.
- **Link ke Instagram dan WhatsApp**: Memudahkan pengunjung untuk mengakses akun Instagram dan menghubungi melalui WhatsApp.

## Fitur Admin

Fitur-fitur yang dapat diakses oleh admin untuk mengelola konten website Dapur Marani:

- **Login**: Akses masuk untuk admin untuk mengelola konten website.
- **Input Menu**: Menambah dan mengelola menu yang tersedia di Dapur Marani.
- **Input Informasi Tentang Kami**: Menambahkan atau memperbarui informasi terkait sejarah, visi, misi, dan lainnya.
- **Input Kontak Dapur Marani**: Mengelola informasi kontak yang dapat dihubungi pengunjung.
- **Update Data**: Memperbarui data menu, informasi, dan kontak yang ada.
- **Delete Data**: Menghapus data yang tidak relevan atau sudah tidak diperlukan.
- **Edit Data**: Mengubah atau menyunting informasi yang telah ada untuk memperbarui konten sesuai kebutuhan.

## 2.1 Perspektif Produk
Sistem Dapur Marani adalah sebuah sistem informasi yang diaplikasikan pada website. Terdapat 2 jenis aktor yaitu admin dan pengguna. Pengolahan data dilakukan oleh admin pada website dan pengunjung hanya melihat informasi pada website.

### 2.1.1 Antarmuka Sistem
![Screenshot 2025-01-16 163759](https://github.com/user-attachments/assets/f5561155-0a97-417c-b5a3-8424c172a90d)

### 2.1.2 Antarmuka Pengguna

### 2.1.2 Antarmuka Perangkat Keras
![Screenshot 2025-01-16 163549](https://github.com/user-attachments/assets/c3eca814-7c4b-4df8-b794-51ea5eef19b7)
Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Dapur Marani antara lain PC maupun Laptop Untuk menjalankan Aplikasi ini.

Sistem Informasi Dapur Marani adalah aplikasi yang kami bangun untuk mendukung operasional dan promosi Dapur Marani, sebuah kantin yang berlokasi di lingkungan kantor. Sistem ini bertujuan untuk mempermudah karyawan dalam mengakses informasi mengenai menu yang tersedia, harga, serta proses pemesanan makanan secara digital. Selain itu, sistem ini juga diharapkan dapat meningkatkan jangkauan promosi Dapur Marani yang selama ini hanya dilakukan melalui WhatsApp story dan pengunjung yang datang langsung ke kantin.

### 2.1.4 Antarmuka Perangkat lunak
### 2.1.5 Antarmuka Komunikasi
Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Dapur Marani seperti PC/Laptop maupun Wifi/Jaringan.

### 2.1.6 Batasan Memory
Tidak Ada

### 2.1.7 Operasi Operasi
| No | Operasi | Fungsi |
|----|---------|--------|
| 1  | Login   | Digunakan untuk mengakses aplikasi |
| 2  | Input   | Digunakan untuk memasukkan data-data |
| 3  | Hapus   | Digunakan untuk menghapus data |
| 4  | Edit    | Digunakan untuk mengubah data |
| 5  | View    | Digunakan untuk menampilkan data |
| 6  | Simpan  | Digunakan untuk menyimpan data |
| 7  | Kembali | Digunakan untuk kembali ke halaman sebelumnya |


### 2.1.8 Kebutuhan adaptasi

## 2.2 Spesifikasi Kebutuhan Fungsional

### 2.2.1 Admin Login
![Screenshot 2025-01-16 164036](https://github.com/user-attachments/assets/88a8c9ac-57d7-4b0e-9dc6-17d2e3127bb2)
<br><br>
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login.
<br><br>
Deskripsi Langkah-Langkah
1. Admin mengakses halaman form edit profil dengan kolom nama, email, dan password.
2. Admin mengubah data dan sistem memvalidasi input (nama tidak kosong, email valid, password memenuhi aturan keamanan).
3. Jika validasi berhasil, perubahan disimpan ke database.
4. Sistem menampilkan pesan sukses atau error sesuai hasil penyimpanan.
5. Admin wajib memasukkan password untuk konfirmasi sebelum menyimpan perubahan atau menghapus akun.


### 2.2.2 Admin Input Menu (Makanan dan Frozen Food)
![Screenshot 2025-01-16 164056](https://github.com/user-attachments/assets/4414f352-2861-4fe6-b5f0-25d256e22fc4)
<br><br>
Sistem menampilkan halaman input menu dan admin menginputkan judul, deskripsi, harga dan unggah file.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan menu berupa judul, deskripsi, harga, dan unggah file.
2. Admin dapat melihat,menambahkan, mengedit bahkan menghapus menu yang ada di dalamnya.
3. Setiap perubahan (tambah, edit, atau hapus) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.

### 2.2.3 Admin Input Artikel
![Screenshot 2025-01-16 164122](https://github.com/user-attachments/assets/d2cc5885-eefa-4e16-a315-f0c8251e455a)
<br><br>
Sistem menampilkan halaman input artikel dan admin menginputkan tanggal, judul, ketegori, status, artikel dan mengunggah file.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan input artikel berupa form dengan kolom  tanggal, judul, ketegori, status, artikel dan mengunggah file.
2. Admin dapat melihat, mengedit, atau menghapus artikel di tabel daftar artikel.
3. Setiap perubahan (tambah, edit, atau hapus) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.

### 2.2.4 Admin Input About us
![Screenshot 2025-01-16 164143](https://github.com/user-attachments/assets/70e44681-3d4f-42b3-b91a-47eadb19fdfa)
<br><br>

### 2.2.5 Admin Input Footer
![Screenshot 2025-01-16 164354](https://github.com/user-attachments/assets/d2de54b3-0689-422e-8d00-144d47feeb2a)
<br><br>
Admin mengakses halaman daftar footer yang menampilkan semua footer yang sudah ada di dalam sistem.
<br><br>
Deskripsi Langkah- langkah:
1. Admin dapat mengklik tombol untuk menambah footer baru dan mengisi form yang berisi kolom judul, deskripsi, URL WhatsApp, dan URL Instagram.
2. Setelah mengisi form, admin dapat menyimpan, mengedit, dan menghapus footer yang baru ditambahkan. Sistem akan memvalidasi dan menyimpannya ke dalam database.
3. Setiap perubahan (tambah, edit, atau hapus) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.

### 2.2.6 Admin Mengelola Pesan Saran
![Screenshot 2025-01-16 164415](https://github.com/user-attachments/assets/3c1f9d83-2357-460b-9d2b-bbe3703e4144)
<br><br>
Sistem akan menampilkan daftar pesan dan saran yang telah diterima pada halaman index.
<br><br>
Deskripsi Langkah- langkah:
1. Pengguna dapat mengakses form untuk mengirim pesan dan saran, mengisi kolom nama, email, dan pesan, kemudian mengirimkannya.
2. Setelah pesan dan saran dikirim, sistem akan memvalidasi input yang diberikan. Jika valid, sistem akan menyimpan data ke dalam database.
3. Admin dapat mengakses halaman untuk mengedit dan menghapus pesan saran yang sudah ada. 
4. Sistem akan menampilkan form edit dengan data yang sudah ada berdasarkan ID.
5. Setelah setiap tindakan (tambah, edit, hapus), sistem akan menampilkan  peringatan sukses maupun error.

### 2.2.7 Admin Input Hero Section
![Screenshot 2025-01-16 165704](https://github.com/user-attachments/assets/d0717832-7dfe-497e-8038-123a8c6f22ab)
<br><br>
Sistem menampilkan daftar hero section yang telah tersedia, lengkap dengan opsi untuk menambah, mengedit, atau menghapus data.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem menampilkan form dengan kolom seperti tagline, headline, deskripsi, dan gambar.
2. Setelah mengisi form, admin dapat menyimpan, mengedit, dan menghapus hero section yang baru ditambahkan. Sistem akan memvalidasi dan menyimpannya ke dalam database.
3. Setiap perubahan (tambah, edit, atau hapus) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.

### 2.2.8 Pengguna mengunjungi website
![Screenshot 2025-01-16 164448](https://github.com/user-attachments/assets/9969e1c7-8d12-4aff-97fc-0109413c2181)
<br><br>
Pengguna mengunjungi website dan melihat informasi yang ada pada website serta dapat memberi komentar berupa pesan dan saran pada website.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan halaman-halaman konten yang ada pada website Dapur Marani.
2. Pengunjung dapat melihat informasi yang ada pada website seperti inrmasi menu dan melihat artikel profile.
3. Pengunjung dapat memberikan komentar pada konten tertentu, seperti menu makanan, untuk memberikan feedback atau saran yang terkait dengan produk atau pelayanan yang ada di Dapur Marani.

## 2.3 Spesifikasi Kebutuhan non Fungsional
Tabel kebutuhan non-fungsional

| No | Deskripsi                                                   |
|----|-------------------------------------------------------------|
| 1  | Semua interface dan fungsi menggunakan Bahasa Indonesia     |
| 2  | Perangkat Lunak dapat dipakai di semua platform OS (Admin, pengguna) |

## 2.4 Karakteristik Pengguna
Pengguna berinteraksi langsung dengan perangkat lunak melalui antarmuka, seperti melihat informasi atau melakukan tindakan yang telah disediakan oleh sistem. Pengguna hanya dapat melihat informasi dan melakukan tindakan terbatas, seperti memberikan pesan dan saran. Sedangkan admin memiliki hak akses lebih tinggi, dapat mengelola dan mengubah data di sistem, seperti menambah, mengedit, atau menghapus informasi. Sebelum melakukan tindakan lebih lanjut, pengguna harus melewati proses login untuk memverifikasi identitas mereka melalui username dan password. Autentikasi memastikan bahwa pengguna hanya dapat melakukan tindakan sesuai dengan hak akses yang dimiliki.

## 2.5 Batasan batasan
1. Sistem tidak mendukung pembayaran online.
2. Hanya admin yang dapat mengelola data, sedangkan pengguna biasa hanya dapat melihat informasi yang sudah tersedia.

## 2.6 Asumsi-asumsi
1. Pengguna memiliki koneksi internet yang stabil.
2. Admin memiliki pengetahuan dasar tentang cara menggunakan sistem.
3. Pengguna memiliki perangkat dengan browser yang mendukung sistem.

## 2.7 Kebutuhan Penyeimbang
1. Usability yaitu sistem harus mudah digunakan oleh admin dan pengguna, tanpa memerlukan pelatihan tambahan.
2. Memastikan kecepatan loading halaman website tetap cepat meskipun ada banyak pengunjung atau banyak informasi yang ditampilkan di website.
3. Desain website yang user-friendly, dengan navigasi yang mudah dipahami dan tombol yang jelas, sehingga pengunjung tidak kesulitan mencari informasi
4. Menambahkan fitur seperti pesan dan saran pada menu atau artikel, agar pengunjung dapat memberikan feedback atau pendapat mengenai produk yang mereka coba.

