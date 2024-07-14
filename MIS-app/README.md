##Latar Belakang
Aplikasi Sistem Informasi Manajemen Klaim (MIS) ini dirancang untuk menyediakan laporan informasi terpadu bagi manajemen PT Jamkrindo. Aplikasi ini akan mendukung pengelolaan klaim berdasarkan lima kategori line of business (LOB): KUR, PEN, Produktif, Konsumtif, dan Suretyship. Data klaim per LOB akan diintegrasikan dengan perusahaan lain melalui database penampungan.

##Informasi Proyek
##Struktur Database
1. Database Aplikasi
    -Menampung data klaim per LOB.
2. Database Penampungan
    -Menyimpan rekap data klaim yang diintegrasikan.
##Tabel di Database Aplikasi
    -Tabel klaim_per_lob
    --id (INT, Primary Key)
    --lob (VARCHAR)
    --penyebab_klaim (VARCHAR)
    --periode (DATE)
    --nilai_beban_klaim (DECIMAL)
##Tabel di Database Penampungan
    --Tabel rekap_klaim
    --id (INT, Primary Key)
    --lob (VARCHAR)
    --penyebab_klaim (VARCHAR)
    --periode (DATE)
    --nilai_beban_klaim (DECIMAL)
   
##Fitur Aplikasi
Interface: Menampilkan data klaim per LOB dari file Excel.
Fungsi Pengiriman Data: Mengirim data klaim untuk LOB KUR dan PEN ke database penampungan melalui API.
Log Aktivitas Pengiriman: Mencatat tanggal proses pengiriman, jumlah data yang dikirim, status pengiriman, dan informasi relevan lainnya.
Unit Testing: Pengujian unit dilakukan untuk memastikan fungsi aplikasi berjalan dengan baik.

##Teknologi
Framework: PHP (Laravel)

##Instalasi
Clone repository ini ke lokal Anda.
PHP dan Composer (untuk PHP).
Buat database sesuai dengan struktur yang telah ditentukan.
Konfigurasi koneksi database dalam file konfigurasi aplikasi.
Jalankan aplikasi dengan perintah sesuai framework yang dipilih.

##Pengujian
Lakukan pengujian unit pada setiap komponen aplikasi untuk memastikan semua fungsi berjalan dengan baik dan sesuai harapan.

##Kontribusi
Jika Anda ingin berkontribusi pada proyek ini, silakan buat pull request atau buka issue untuk diskusi lebih lanjut.

##Lisensi
Proyek ini dilisensikan di bawah MIT License.

##Kontak
Jika ada pertanyaan lebih lanjut, silakan hubungi [rullyriel@gmail.com].


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
