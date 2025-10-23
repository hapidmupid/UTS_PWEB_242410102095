# Donutlicious - Dashboard Admin Sederhana (Laravel)

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5A429C?style=for-the-badge&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

Project "Donutlicious" adalah sebuah website dashboard admin sederhana yang dibangun menggunakan framework Laravel. Aplikasi ini mendemonstrasikan konsep-konsep inti Laravel, termasuk:

* **Routing**: Pengelolaan rute web yang bersih (`web.php`).
* **Controller**: Pemisahan logika bisnis (`PageController.php`).
* **Blade Templating**: Penggunaan layouts (`@extends`) dan components (`<x-navbar>`).
* **Session Management**: Sistem otentikasi (login/logout) sederhana menggunakan Session bawaan Laravel.

> **Catatan Penting:** Project ini **tidak** terhubung ke database. Semua data (produk, user) bersifat statis (*hardcoded*) di dalam `PageController` untuk tujuan demonstrasi.

## 🎨 Tampilan (Screenshot)

*(Sangat disarankan untuk menambahkan screenshot aplikasi Anda di sini untuk menarik perhatian)*

| Halaman Login | Halaman Dashboard |
| :---: | :---: |
| ![Tampilan Halaman Login](https://i.imgur.com/gYq8Q9v.png) | ![Tampilan Halaman Dashboard](https://i.imgur.com/fA7gN8P.png) |

*(Gantilah link di atas dengan link screenshot Anda sendiri)*

## ✨ Fitur Utama

* **Sistem Login & Logout**: Otentikasi pengguna sederhana berbasis **Session**.
* **Route Protection**: Halaman internal (Dashboard, Pengelolaan, Profil) tidak dapat diakses sebelum pengguna login.
* **Halaman Dashboard**: Menampilkan daftar produk donat (statis).
* **Halaman Pengelolaan**: Menampilkan tabel untuk manajemen produk (statis).
* **Halaman Profil**: Menampilkan detail profil pengguna (statis).
* **Struktur Blade yang Rapi**: Menggunakan *layout* terpisah untuk tamu (`guest.blade.php`) dan pengguna terotentikasi (`app.blade.php`).
* **Blade Components**: Menggunakan komponen Blade untuk bagian yang dapat digunakan kembali seperti `navbar` dan `footer`.

## 🚀 Teknologi yang Digunakan

* **Framework**: Laravel
* **Bahasa**: PHP
* **Frontend**: Bootstrap 5, HTML, CSS
* **Templating**: Blade

## 🛠️ Instalasi & Setup

Berikut adalah langkah-langkah untuk menjalankan project ini di komputer Anda:

1.  **Clone repositori ini:**
    ```bash
    git clone [https://github.com/](https://github.com/)[NAMA_USER_ANDA]/[NAMA_REPO_ANDA].git
    ```

2.  **Masuk ke direktori project:**
    ```bash
    cd [NAMA_REPO_ANDA]
    ```

3.  **Install dependencies Composer:**
    ```bash
    composer install
    ```

4.  **Salin file `.env.example` menjadi `.env`:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate application key Laravel:**
    ```bash
    php artisan key:generate
    ```

6.  **Jalankan server development:**
    ```bash
    php artisan serve
    ```

7.  **Buka di browser:**
    Buka `http://127.0.0.1:8000` di browser Anda.

## 🧑‍💻 Cara Menggunakan

Aplikasi ini tidak memiliki database. Sistem login hanya memvalidasi apakah field **Username** dan **Password** diisi atau tidak.

* **Username**: Isi dengan nama apa saja (misal: `admin`)
* **Password**: Isi dengan password apa saja (misal: `password`)

Selama kedua field tersebut tidak kosong, Anda akan berhasil login.
