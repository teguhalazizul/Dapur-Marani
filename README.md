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

| **Istilah**                        | **Definisi**                                                                                                                                                     |
|------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| **SRS**                            | Software Requirement Specification, dokumen yang berisi spesifikasi kebutuhan perangkat lunak yang akan dibuat, serta sebagai alat komunikasi antara pembuat dan pengguna. |
| **Login**                          | Digunakan untuk mengakses aplikasi, terutama bagi admin untuk masuk ke sistem Dapur Marani untuk mengelola menu, artikel, dan data lainnya.                      |
| **Software Requirement Specification** | Dokumen yang menjelaskan perangkat lunak yang akan dikembangkan dan digunakan sebagai penyambung komunikasi antara pengembang dan pengguna.                      |
| **Use Case**                       | Situasi di mana sistem digunakan untuk memenuhi satu atau lebih kebutuhan pengguna atau admin dalam sistem Dapur Marani.                                         |
| **URL**                            | Uniform Resource Locator, alamat yang digunakan untuk mengakses halaman atau konten tertentu di website Dapur Marani.                                             |
| **Admin**                          | Pengguna yang memiliki akses penuh untuk mengelola dan mengatur konten dalam sistem, seperti input menu, artikel, dan pengelolaan pesan saran.                   |


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
- **View Halaman Utama**: Menampilkan Halaman Utama yang berisi informasi mengenai dapur marani.
- **Mengirim Pesan Saran**: Mengirim Pesan Saran oleh customer.

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
Sistem Dapur Marani adalah sebuah sistem informasi yang diaplikasikan pada website. Terdapat 2 aktor yaitu admin dan pengguna. Pengolahan data dilakukan oleh admin pada website dan pengguna hanya melihat informasi dan memeberikan komentar berupa pesan dan saran pada website.

### 2.1.1 Antarmuka Sistem
![Screenshot 2025-01-16 163759](https://github.com/user-attachments/assets/f5561155-0a97-417c-b5a3-8424c172a90d)
<br><br>
Sistem Dapur Marani memiliki 2 aktor yaitu admin dan pengguna. Admin mempunyai fungsi mengelola data informasi dan Pengunjung bisa melihat informasi serta memberikan komentar berupa pesan dan saran pada website.

### 2.1.2 Antarmuka Pengguna

### 2.1.3 Antarmuka Perangkat Keras
![Screenshot 2025-01-16 163549](https://github.com/user-attachments/assets/c3eca814-7c4b-4df8-b794-51ea5eef19b7)
<br><br>
Antarmuka perangkat keras yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Dapur Marani antara lain PC maupun Laptop Untuk menjalankan Aplikasi ini.

Sistem Informasi Dapur Marani adalah aplikasi yang kami bangun untuk mendukung operasional dan promosi Dapur Marani, sebuah kantin yang berlokasi di lingkungan kantor. Sistem ini bertujuan untuk mempermudah karyawan dalam mengakses informasi mengenai menu yang tersedia, harga, serta proses pemesanan makanan secara digital. Selain itu, sistem ini juga diharapkan dapat meningkatkan jangkauan promosi Dapur Marani yang selama ini hanya dilakukan melalui WhatsApp story dan pengunjung yang datang langsung ke kantin.

### 2.1.4 Antarmuka Perangkat lunak

Berikut adalah beberapa antarmuka perangkat lunak dalam aplikasi Dapur Marani:

1. **Halaman Login Admin**
   - Admin melakukan login dengan memasukkan username, email dan password untuk mengakses dashboard admin.

2. **Halaman Input Menu (Makanan dan Frozen Food)**
   - Admin dapat menambah, mengedit, atau menghapus menu makanan dan frozen food.
   - Input yang tersedia: Judul, Deskripsi, Harga, Unggah Gambar.

3. **Halaman Input Artikel**
   - Admin dapat menambah, mengedit, atau menghapus artikel yang ditampilkan di website.
   - Input yang tersedia: Tanggal, Judul, Kategori, Status, Artikel, Unggah File.

4. **Halaman Input About Us**
   - Admin dapat mengedit informasi tentang Dapur Marani, termasuk sejarah, visi, misi, jam buka, dan lokasi.
   - Input yang tersedia: Judul, Deskripsi, Jam Buka, Lokasi, Visi dan Misi, Sejarah Singkat, Unggah File.

5. **Halaman Input Hero Section**
   - Admin dapat mengedit hero section yang ditampilkan di homepage.
   - Input yang tersedia: Tagline, Headline, Deskripsi, Gambar.

6. **Halaman Input Footer**
   - Admin dapat mengedit footer website.
   - Input yang tersedia: Judul, Deskripsi, URL WhatsApp, URL Instagram.

7. **Halaman Daftar Pesan dan Saran**
   - Admin dapat mengakses dan menghapus pesan atau saran yang dikirim oleh pengguna.
   - Input yang tersedia untuk Pengunjung : Nama, Email, Pesan.
     
### 2.1.5 Antarmuka Komunikasi

Antarmuka komunikasi yang digunakan untuk mengoperasikan Perangkat Lunak Sistem Dapur Marani melibatkan perangkat seperti PC atau laptop yang terhubung melalui jaringan Wi-Fi atau koneksi internet. Sistem ini memanfaatkan protokol komunikasi standar untuk memungkinkan interaksi antara pengguna dan aplikasi berbasis web.

### 2.1.6 Batasan Memory

Tidak ada batasan memori yang ditetapkan dalam sistem, karena aplikasi ini dirancang untuk berfungsi dengan baik pada perangkat dengan kapasitas memori yang standar dan dapat menyesuaikan dengan kebutuhan penggunaan.

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

1. **Kompatibilitas**  
   Sistem harus dapat berjalan dengan baik di berbagai perangkat, seperti komputer maupun ponsel.
2. **Aksesibilitas**  
   Sistem harus mudah digunakan oleh semua orang, termasuk mereka yang memiliki kebutuhan khusus.
3. **Kinerja**  
   Sistem harus tetap lancar meskipun ada banyak pengguna atau data yang diproses.
4. **Pembaruan**  
   Sistem harus mudah diperbarui atau ditingkatkan jika dibutuhkan di masa depan.
5. **Perawatan**  
   Sistem perlu dapat diperbaiki atau disesuaikan dengan mudah jika ada masalah atau perubahan yang perlu dilakukan.
   
## 2.2 Spesifikasi Kebutuhan Fungsional

### 2.2.1 Admin Login
![Screenshot 2025-01-16 164036](https://github.com/user-attachments/assets/88a8c9ac-57d7-4b0e-9dc6-17d2e3127bb2)
<br><br>
Admin melakukan login terlebih dahulu sebelum masuk ke tampilan home admin, apabila gagal login akan muncul pesan alert error login.
<br><br>
Deskripsi Langkah-Langkah
1. Admin melakukan login dengan username, eamail dan password.
2. Sistem melakukan validasi login.
3. Jika validasi berhasil, perubahan disimpan ke database.
4. Sistem menampilkan pesan sukses atau error sesuai hasil penyimpanan.
5. Admin wajib memasukkan password untuk konfirmasi sebelum menyimpan perubahan atau menghapus akun.
   
Xref: Bagian 2.2.1, Admin Login

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

Xref: Bagian 2.2.2, Admin Input Menu (Makanan dan Frozen Food)

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

Xref: Bagian 2.2.3, Admin Input Artikel

### 2.2.4 Admin Edit About us
![Screenshot 2025-01-16 164143](https://github.com/user-attachments/assets/70e44681-3d4f-42b3-b91a-47eadb19fdfa)
<br><br>
Sistem menampilkan halaman edit about us dan admin dapat mengedit judul, deskripsi, jam buka, lokasi, visi dan mis, sejarah singkat, dan mengunggah file.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan tampilan artikel dan dapat di edit berupa form dengan kolom  judul, deskripsi, jam buka, lokasi, visi dan mis, sejarah singkat, dan mengunggah file.
2. Admin dapat melihat, mengedit about us di tabel daftar about us.
3. Setiap perubahan (edit) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.
   
Xref: Bagian 2.2.4, Admin Input About Us

### 2.2.5 Admin Edit Footer
![Screenshot 2025-01-16 164354](https://github.com/user-attachments/assets/d2de54b3-0689-422e-8d00-144d47feeb2a)
<br><br>
Admin mengakses halaman daftar footer yang menampilkan semua footer yang sudah ada di dalam sistem.
<br><br>
Deskripsi Langkah- langkah:
1. Admin dapat mengklik tombol edit footer baru dan mengisi form yang berisi kolom judul, deskripsi, URL WhatsApp, dan URL Instagram.
2. Setelah mengedit form, admin dapat menyimpan, footer yang baru diedit. Sistem akan memvalidasi dan menyimpannya ke dalam database.
3. Setiap perubahan (edit) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.

Xref: Bagian 2.2.5, Admin Footer

### 2.2.6 Admin Mengelola Pesan Saran
![Screenshot 2025-01-16 164415](https://github.com/user-attachments/assets/3c1f9d83-2357-460b-9d2b-bbe3703e4144)
<br><br>
Sistem akan menampilkan daftar pesan dan saran yang telah diterima pada halaman index.
<br><br>
Deskripsi Langkah- langkah:
1. Pengguna dapat mengakses form untuk mengirim pesan dan saran, mengisi kolom nama, email, dan pesan, kemudian mengirimkannya.
2. Setelah pesan dan saran dikirim, sistem akan memvalidasi input yang diberikan. Jika valid, sistem akan menyimpan data ke dalam database.
3. Admin dapat mengakses halaman menghapus pesan saran yang sudah ada. 
4. Setelah setiap tindakan (hapus), sistem akan menampilkan  peringatan sukses maupun error.

Xref: Bagian 2.2.6, Admin Input Pesan Saran

### 2.2.7 Admin Edit Hero Section
![Screenshot 2025-01-16 165704](https://github.com/user-attachments/assets/d0717832-7dfe-497e-8038-123a8c6f22ab)
<br><br>
Sistem menampilkan daftar hero section yang telah tersedia, dengan opsi untuk mengedit.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem menampilkan form dengan kolom seperti tagline, headline, deskripsi, dan gambar.
2. Setelah mengisi form edit, admin dapat mengedit hero section yang baru dieditkan. Sistem akan memvalidasi dan menyimpannya ke dalam database.
3. Setiap perubahan (edit) akan langsung diperbarui di database.
4. Jika sudah disimpan sistem akan menampilkan peringatan sukses maupun error.

Xref: Bagian 2.2.7, Admin Input Hero Section

### 2.2.8 Pengguna mengunjungi website
![Screenshot 2025-01-16 164448](https://github.com/user-attachments/assets/9969e1c7-8d12-4aff-97fc-0109413c2181)
<br><br>
Pengguna mengunjungi website dan melihat informasi yang ada pada website serta dapat memberi komentar berupa pesan dan saran pada website.
<br><br>
Deskripsi Langkah- langkah:
1. Sistem akan menampilkan halaman-halaman konten yang ada pada website Dapur Marani.
2. Pengunjung dapat melihat informasi yang ada pada website seperti inrmasi menu dan melihat artikel profile.
3. Pengunjung dapat memberikan komentar, seperti menu makanan, untuk memberikan feedback atau saran yang terkait dengan produk atau pelayanan yang ada di Dapur Marani.

Xref: Bagian 2.2.8, Pengguna Mengunjungi Website

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
<br><br>

# BAB III Requirement Specification

## 3.1 Persyaratan Antarmuka Eksternal

1. **Akses Tanpa Login**  
   Pengguna dapat mengakses website Dapur Marani tanpa perlu login. Website menampilkan berbagai konten yang dapat diakses oleh semua pengunjung, seperti daftar menu makanan, artikel, dan informasi lainnya.

2. **Interaksi Pengguna**  
   Pengguna dapat memberikan komentar berupa pesan dan saran pada konten yang ada di website, seperti menu makanan atau artikel. Pengguna dapat mengisi kolom nama, email, dan pesan untuk mengirimkan saran atau feedback.

3. **Pengelolaan Konten (Admin)**  
   Admin memiliki akses untuk login ke dalam sistem dan mengelola konten website. Admin dapat menambah, mengedit, atau menghapus menu, artikel, dan informasi lainnya. Semua perubahan yang dilakukan oleh admin akan langsung diperbarui di database.

4. **Validasi dan Penyimpanan Data**  
   Data yang dikirim oleh pengunjung melalui form pesan dan saran akan divalidasi oleh sistem dan disimpan ke dalam database. Admin akan dapat mengelola data ini melalui sistem backend.
   
## 3.2 Functional Requirement
### 3.2.1 Login Admin

| **Nama Fungsi**   | Admin Login                                                                                           |
|-------------------|------------------------------------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.1, Admin Login                                                                              |
| **Trigger**       | Admin Membuka Website Sistem Informasi Parenting                                                      |
| **Precondition**  | Halaman login                                                                                         |
| **Basic Path**    | 1. Admin melakukan login dengan username, email, dan password.                                         |
|                   | 2. Sistem melakukan validasi login.                                                                    |
|                   | 3. Jika validasi berhasil, admin akan diarahkan ke halaman home admin.                                 |
|                   | 4. Jika login gagal, sistem akan menampilkan peringatan error login.                                   |
| **Alternative**    | Tidak Ada                                                                                             |
| **Post Condition**| Admin dapat login dan mengakses website sistem informasi parenting                                    |
| **Exception Push**| Username dan password salah                                                                            |

### 3.2.2 Admin Input Menu (Makanan dan Frozen Food)

| **Nama Fungsi**   | Admin Input Menu (Makanan dan Frozen Food)                                                            |
|-------------------|------------------------------------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.2, Admin Input Menu (Makanan dan Frozen Food)                                               |
| **Trigger**       | Admin Mengakses Halaman Input Menu                                                                     |
| **Precondition**  | Halaman input menu dengan kolom judul, deskripsi, harga, dan unggah file.                             |
| **Basic Path**    | 1. Sistem menampilkan tampilan menu berupa kolom judul, deskripsi, harga, dan unggah file.             |
|                   | 2. Admin dapat melihat, menambahkan, mengedit, atau menghapus menu yang ada.                           |
|                   | 3. Setiap perubahan (tambah, edit, atau hapus) langsung diperbarui di database.                        |
|                   | 4. Setelah disimpan, sistem menampilkan pesan sukses atau error sesuai hasil penyimpanan.              |
| **Alternative**    | Tidak Ada                                                                                             |
| **Post Condition**| Menu yang ditambahkan, diubah, atau dihapus akan langsung diperbarui di database.                     |
| **Exception Push**| Error saat penyimpanan data atau jika file unggahan gagal.                                            |

### 3.2.3 Admin Input Artikel

| **Nama Fungsi**   | Admin Input Artikel                                                                |
|-------------------|-----------------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.3, Admin Input Artikel                                                  |
| **Trigger**       | Admin Mengakses Halaman Input Artikel                                             |
| **Precondition**  | Halaman input artikel dengan kolom tanggal, judul, kategori, status, artikel, dan unggah file. |
| **Basic Path**    | 1. Sistem menampilkan tampilan input artikel berupa form dengan kolom yang sesuai. |
|                   | 2. Admin dapat melihat, mengedit, atau menghapus artikel di tabel daftar artikel. |
|                   | 3. Setiap perubahan (tambah, edit, atau hapus) langsung diperbarui di database.    |
|                   | 4. Setelah disimpan, sistem menampilkan pesan sukses atau error sesuai hasil penyimpanan. |
| **Alternative**    | Tidak Ada                                                                         |
| **Post Condition**| Artikel yang ditambahkan, diubah, atau dihapus akan langsung diperbarui di database. |
| **Exception Push**| Error saat penyimpanan data atau jika file unggahan gagal.                        |

### 3.2.4 Admin Edit About us

| **Nama Fungsi**   | Admin Edit About Us                                                            |
|-------------------|---------------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.4, Admin Edit About Us                                              |
| **Trigger**       | Admin Mengakses Halaman Edit About Us                                          |
| **Precondition**  | Halaman Edit About Us dengan kolom judul, deskripsi, jam buka, lokasi, visi, misi, sejarah singkat, dan unggah file. |
| **Basic Path**    | 1. Sistem menampilkan tampilan Edit About Us berupa form dengan kolom yang sesuai. |
|                   | 2. Admin dapat mengedit data About Us di tabel daftar About Us. |
|                   | 3. Setiap perubahan (edit) langsung diperbarui di database.  |
|                   | 4. Setelah disimpan, sistem menampilkan pesan sukses atau error sesuai hasil penyimpanan. |
| **Alternative**    | Tidak Ada                                                                       |
| **Post Condition**| Data About Us yang diubah akan langsung diperbarui di database. |
| **Exception Push**| Error saat penyimpanan data atau jika file unggahan gagal.                      |

### 3.2.5 Admin Edit Footer

| **Nama Fungsi**   | Admin Edit Footer                                                          |
|-------------------|-----------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.5, Admin Edit Footer                                            |
| **Trigger**       | Admin Mengakses Halaman Daftar Footer                                        |
| **Precondition**  | Halaman daftar footer yang menampilkan semua footer yang sudah ada di dalam sistem. |
| **Basic Path**    | 1. Admin mengklik tombol edit untuk edit footer yang di sediakan.                        |
|                   | 2. Admin mengubah form edit dengan kolom judul, deskripsi, URL WhatsApp, dan URL Instagram. |
|                   | 3. Setelah mengubah form, admin dapat menyimpan dan mengedit. |
|                   | 4. Setiap perubahan (edit) langsung diperbarui di database. |
|                   | 5. Setelah disimpan, sistem menampilkan pesan sukses atau error sesuai hasil penyimpanan. |
| **Alternative**    | Tidak Ada                                                                   |
| **Post Condition**| Footer baru diubah langsung diperbarui di database. |
| **Exception Push**| Error saat penyimpanan data atau jika URL tidak valid.                       |

### 3.2.6 Admin Mengelola Pesan Saran

| **Nama Fungsi**   | Admin Mengelola Pesan Saran                                                |
|-------------------|-----------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.6, Admin Mengelola Pesan Saran                                   |
| **Trigger**       | Admin Mengakses Halaman Daftar Pesan dan Saran yang Telah Diterima          |
| **Precondition**  | Halaman daftar pesan dan saran yang telah diterima yang ditampilkan dalam sistem. |
| **Basic Path**    | 1. Pengguna mengakses form untuk mengirim pesan dan saran.                  |
|                   | 2. Pengguna mengisi kolom nama, email, dan pesan, kemudian mengirimkannya.  |
|                   | 3. Setelah pesan dikirim, sistem memvalidasi input.                         |
|                   | 4. Jika valid, sistem menyimpan pesan ke dalam database.                    |
|                   | 5. Admin mengakses halaman untuk menghapus pesan saran yang ada. |
|                   |               |
|                   | 6. Setelah setiap tindakan (tambah, edit, hapus), sistem menampilkan pesan sukses atau error. |
| **Alternative**    | Tidak Ada                                                                   |
| **Post Condition**| Pesan dan saran yang dihapus akan diperbarui di database. |
| **Exception Push**| Error saat pengisian form atau jika data tidak valid.                       |

### 3.2.7 Admin Edit Hero Section

| **Nama Fungsi**   | Admin Edit Hero Section                                                  |
|-------------------|---------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.7, Admin Edit Hero Section                                    |
| **Trigger**       | Admin Mengakses Halaman Daftar Hero Section yang Telah Tersedia           |
| **Precondition**  | Halaman daftar hero section yang telah tersedia, dengan opsi untuk menambah, mengedit, atau menghapus. |
| **Basic Path**    | 1. Sistem menampilkan form Edit dengan kolom tagline, headline, deskripsi, dan gambar. |
|                   | 2. Admin mengisi form Edit dengan data yang relevan.                           |
|                   | 3. Setelah mengisi form, admin dapat menyimpan hero section yang baru di ubah. |
|                   | 4. Sistem memvalidasi data dan menyimpannya ke dalam database.            |
|                   | 5. Setiap perubahan (edit) langsung diperbarui di database. |
|                   | 6. Sistem menampilkan peringatan sukses atau error setelah proses selesai. |
| **Alternative**    | Tidak Ada                                                                  |
| **Post Condition**| Hero section yang baru diedit akan diperbarui di database. |
| **Exception Push**| Error saat pengisian form atau jika data tidak valid.                      |

### 3.2.8 Pengguna mengunjungi website

| **Nama Fungsi**   | Pengguna Mengunjungi Website                                               |
|-------------------|---------------------------------------------------------------------------|
| **Xref**          | Bagian 2.2.8, Pengguna Mengunjungi Website                                 |
| **Trigger**       | Pengguna Mengakses Website Dapur Marani                                    |
| **Precondition**  | Website Dapur Marani dapat diakses dan berfungsi dengan baik.              |
| **Basic Path**    | 1. Sistem menampilkan halaman-halaman konten yang ada pada website Dapur Marani. |
|                   | 2. Pengunjung dapat melihat informasi yang ada pada website seperti informasi menu dan artikel profil. |
|                   | 3. Pengunjung dapat memberikan komentar pada konten tertentu, seperti menu makanan, untuk memberikan feedback atau saran terkait produk atau pelayanan yang ada di Dapur Marani. |
| **Alternative**    | Tidak Ada                                                                  |
| **Post Condition**| Pengguna dapat melihat konten di website dan memberikan komentar atau saran. |
| **Exception Push**| Jika ada kesalahan tampilan atau masalah teknis pada website.              |

## 3.3 Struktur Detail Kebutuhan Non-Fungsional

### 3.3.1 Logika Struktur Data
Struktur data logika pada sistem Dapur Marani terdapat struktur Database yang dijelaskan menggunakan ERD.

### Tabel Admin
Berikut adalah deskripsi tabel `admin` yang digunakan untuk mengelola data admin pada sistem.
| **No** | **Data Item**   | **Tipe Data**  | **Deskripsi**                                                                                                         |
|--------|-----------------|----------------|---------------------------------------------------------------------------------------------------------------------|
| 1      | **Id_Admin**     | int            | Auto-increment untuk menyimpan ID unik setiap admin, digunakan sebagai primary key untuk identifikasi.               |
| 2      | **username**     | varchar(255)   | Menyimpan nama pengguna (username) admin yang digunakan untuk login ke sistem.                                       |
| 3      | **password**     | varchar(255)   | Menyimpan kata sandi (password) admin yang telah di-hash untuk autentikasi saat login.                               |
| 4      | **level**        | varchar(255)   | Menyimpan peran admin, misalnya "admin utama", atau perbedaan akses antara admin dan pengunjung saat login.          |
| 5      | **created_at**   | timestamp      | Mencatat waktu saat data admin pertama kali dibuat (otomatis diatur oleh sistem).                                    |
| 6      | **updated_at**   | timestamp      | Mencatat waktu saat data admin terakhir kali diperbarui (otomatis diatur oleh sistem).                               |
  
### Tabel Menu (Makanan dan Frozen Food)
Berikut adalah deskripsi tabel `menu` untuk makanan dan frozeen food yang digunakan untuk mengelola data menu pada sistem.
| **No** | **Data Item**   | **Tipe Data**    | **Deskripsi**                                                                 |
|--------|-----------------|------------------|-------------------------------------------------------------------------------|
| 1      | id              | bigint           | Auto-increment untuk menyimpan ID unik setiap item menu, digunakan sebagai primary key. |
| 2      | name            | varchar(255)     | Menyimpan nama item menu.                                                     |
| 3      | description     | text             | Menyimpan deskripsi detail tentang item menu.                                 |
| 4      | price           | decimal(10,2)    | Menyimpan harga item menu dengan format angka desimal.                        |
| 5      | image           | varchar(255)     | Menyimpan nama file atau path gambar yang terkait dengan item menu (opsional).|
| 6      | created_at      | timestamp        | Mencatat waktu saat item menu dibuat (otomatis diatur oleh sistem).           |
| 7      | updated_at      | timestamp        | Mencatat waktu saat item menu terakhir kali diperbarui (otomatis diatur oleh sistem). |


### Tabel Artikel
Berikut adalah deskripsi tabel `artikel` yang digunakan untuk mengelola artikel pada sistem.
| **No** | **Data Item** | **Tipe Data** | **Deskripsi**                                                                 |
|--------|---------------|---------------|-------------------------------------------------------------------------------|
| 1      | id            | int           | Auto-increment untuk menyimpan ID unik setiap artikel, digunakan sebagai primary key. |
| 2      | judul         | varchar(255)  | Menyimpan judul artikel.                                                      |
| 3      | tanggal       | date          | Menyimpan tanggal artikel dibuat atau diterbitkan.                            |
| 4      | kategori      | varchar(255)  | Menyimpan kategori artikel untuk pengelompokan konten.                        |
| 5      | status        | varchar(255)  | Menyimpan status artikel, seperti "Draft" atau "Published."                   |
| 6      | artikel       | varchar(255)  | Menyimpan isi atau ringkasan artikel.                                         |
| 7      | gambar        | text          | Menyimpan path atau nama file gambar yang terkait dengan artikel.             |


### Tabel About Us
Berikut adalah deskripsi tabel `about us` yang digunakan untuk mengelola about us pada sistem.
| **No** | **Data Item**       | **Tipe Data**  | **Deskripsi**                                                                     |
|--------|---------------------|----------------|-----------------------------------------------------------------------------------|
| 1      | id                  | bigint         | Auto-increment untuk menyimpan ID unik setiap informasi umum, digunakan sebagai primary key. |
| 2      | judul               | varchar(255)   | Menyimpan judul informasi umum.                                                  |
| 3      | deskripsi           | text           | Menyimpan deskripsi detail terkait informasi umum.                               |
| 4      | jam_buka            | varchar(255)   | Menyimpan jam operasional.                                                       |
| 5      | lokasi              | varchar(255)   | Menyimpan lokasi atau alamat.                                                    |
| 6      | visi                | text           | Menyimpan visi organisasi atau bisnis.                                           |
| 7      | misi                | text           | Menyimpan misi organisasi atau bisnis.                                           |
| 8      | sejarah_singkat     | text           | Menyimpan sejarah singkat tentang organisasi atau bisnis.                        |
| 9      | gambar              | varchar(255)   | Menyimpan nama file atau path gambar yang terkait dengan informasi umum.          |
| 10     | created_at          | timestamp      | Mencatat waktu saat data informasi umum dibuat (otomatis diatur oleh sistem).     |
| 11     | updated_at          | timestamp      | Mencatat waktu saat data informasi umum terakhir diperbarui (otomatis diatur oleh sistem). |


### Tabel Footer
Berikut adalah deskripsi tabel `footer` yang digunakan untuk mengelola footer pada sistem.
| **No** | **Data Item**    | **Tipe Data**    | **Deskripsi**                                                                         |
|--------|------------------|------------------|-------------------------------------------------------------------------------------|
| 1      | id               | bigint           | Auto-increment untuk menyimpan ID unik setiap footer, digunakan sebagai primary key. |
| 2      | judul            | varchar(255)     | Menyimpan judul untuk footer, biasanya berupa nama perusahaan atau slogan.           |
| 3      | deskripsi        | text             | Menyimpan deskripsi tambahan atau informasi singkat tentang footer.                 |
| 4      | whatsapp_url     | varchar(255)     | Menyimpan URL untuk kontak WhatsApp.                                                |
| 5      | instagram_url    | varchar(255)     | Menyimpan URL untuk halaman Instagram.                                              |


### Tabel Pesan Saran
Berikut adalah deskripsi tabel `pesan saran` yang digunakan untuk mengelola data pesan saran pada sistem.
| **No** | **Data Item**   | **Tipe Data**  | **Deskripsi**                                                                                   |
|--------|-----------------|----------------|-------------------------------------------------------------------------------------------------|
| 1      | **id**          | bigint         | Auto-increment untuk menyimpan ID unik setiap pesan atau saran, digunakan sebagai primary key.   |
| 2      | **nama**        | varchar(255)   | Menyimpan nama pengguna yang memberikan pesan atau saran.                                        |
| 3      | **email**       | varchar(255)   | Menyimpan email pengguna, bersifat opsional.                                                    |
| 4      | **pesan**       | text           | Menyimpan isi pesan atau saran yang diberikan oleh pengguna.                                     |
| 5      | **created_at**  | timestamp      | Mencatat waktu saat pesan atau saran dibuat (otomatis diatur oleh sistem).                      |
| 6      | **updated_at**  | timestamp      | Mencatat waktu saat pesan atau saran terakhir kali diperbarui (otomatis diatur oleh sistem).    |

### Tabel Hero Section
Berikut adalah deskripsi tabel `hero section` yang digunakan untuk mengelola data hero section pada sistem.
| **No** | **Data Item** | **Tipe Data**  | **Deskripsi**                                                                                     |
|--------|---------------|----------------|-------------------------------------------------------------------------------------------------|
| 1      | id            | bigint         | Auto-increment untuk menyimpan ID unik setiap hero section, digunakan sebagai primary key.       |
| 2      | tagline       | varchar(255)   | Menyimpan tagline pendek yang tampil di hero section.                                            |
| 3      | headline      | varchar(255)   | Menyimpan headline utama yang mencolok untuk menarik perhatian di hero section.                  |
| 4      | deskripsi     | text           | Menyimpan deskripsi yang memberikan detail tambahan terkait hero section.                        |
| 5      | gambar        | varchar(255)   | Menyimpan nama file atau path gambar yang digunakan untuk visual hero section.                   |

# Pembagian Tugas Proposal
Bab 1 -> Tifani
Bab 2 -> Teguh dan Tifani
Bab 3 -Yudha dan Tifani

# Pembagian Tugas Project
Yudha -> CRUD About US, CRUD Pesan Saran, Template Login, Nyusun Halaman Template
Tifani -> CRUD Menu, CRUD Frozen Food
Teguh -> Buat Login, CRUD Artikel, CRUD Hero Section , CRUD Footer, Dashboard Admin, 
Menampilkan Hero Section, About Us, Menu, Frozen Food, Artikel, Pesan Saran, Artikel yang sudah di CRUD kan pada Homepage


