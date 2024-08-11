# Proyek Web Arsitektur

Selamat datang di proyek Web Arsitektur ini! Proyek ini adalah aplikasi berbasis web yang dibangun menggunakan CodeIgniter 4 (CI4), sebuah framework PHP yang cepat dan fleksibel. Aplikasi ini dirancang untuk memberikan solusi lengkap dalam manajemen dan presentasi proyek arsitektur.

## Fitur Utama

- **Dashboard**: Tampilan ringkasan proyek dan data penting.
- **Manajemen Proyek**: Tambah, edit, dan hapus proyek arsitektur.
- **Galeri**: Unggah dan kelola gambar serta dokumen proyek.
- **Pencarian**: Temukan proyek berdasarkan kriteria tertentu.
- **Notifikasi**: Pemberitahuan tentang pembaruan proyek dan perubahan.

## Prasyarat

Sebelum memulai, pastikan Anda memiliki hal-hal berikut:

- PHP 7.4 atau lebih tinggi
- Composer
- Database MySQL/MariaDB
- Web server (misalnya Apache atau Nginx)

## Instalasi

1. **Clone Repository**

    ```bash
    gh repo clone ilydev-openproject/Arga-arsitek
    ```

2. **Masuk ke Direktori Proyek**

    ```bash
    cd ilydev-openproject/Arga-arsitek
    ```

3. **Instal Dependensi**

    ```bash
    composer install
    ```

4. **Konfigurasi Database**

    Salin file `.env.example` menjadi `.env` dan sesuaikan pengaturan database Anda di file `.env`.

5. **Jalankan Migrasi Database**

    ```bash
    php spark migrate
    ```

6. **Jalankan Server**

    ```bash
    php spark serve
    ```

    Akses aplikasi Anda di `http://localhost:8080`.

## Penggunaan

Setelah aplikasi berjalan, Anda dapat:

- Mengakses dashboard untuk melihat ringkasan proyek.
- Mengelola proyek dari panel admin.
- Menambahkan dan mengelola gambar serta dokumen proyek.

## Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan buat issue atau pull request. Pastikan untuk mengikuti pedoman kontribusi yang ada di [CONTRIBUTING.md](CONTRIBUTING.md).

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Jika Anda memiliki pertanyaan atau memerlukan dukungan lebih lanjut, jangan ragu untuk menghubungi saya di [azok.agcenna.com](mailto:azok@agcenna.com).

---

Terima kasih telah menggunakan proyek ini! Semoga bermanfaat untuk kebutuhan arsitektur Anda.
