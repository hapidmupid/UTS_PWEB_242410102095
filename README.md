# Donutlicious - Dashboard Admin Toko Donut Sederhana (Laravel)

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5A429C?style=for-the-badge&logo=bootstrap&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

Project "Donutlicious" adalah sebuah website dashboard admin sederhana yang dibangun menggunakan framework Laravel. Aplikasi ini mendemonstrasikan konsep-konsep inti Laravel, termasuk:

* **Routing**: Pengelolaan rute web yang bersih (`web.php`).
* **Controller**: Pemisahan logika bisnis (`PageController.php`).
* **Blade Templating**: Penggunaan layouts (`@extends`) dan components (`<x-navbar>`).
* **Session Management**: Sistem otentikasi (login/logout) sederhana menggunakan Session bawaan Laravel.



## 🎨 Tampilan (Screenshot)
<img width="1919" height="932" alt="image" src="https://github.com/user-attachments/assets/7e669890-62d2-4d4b-8f10-d40b64329c24" />
<img width="1919" height="930" alt="image" src="https://github.com/user-attachments/assets/91221690-6797-4d8b-ad4a-00acfe6e62b0" />


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

