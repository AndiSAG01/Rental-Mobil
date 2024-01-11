## Rental Mobil Berbasis Website (Laravel)

### Deskripsi

Rental Mobil adalah aplikasi web yang dibuat dengan menggunakan framework Laravel dan Bootstrap. Aplikasi ini bertujuan untuk memudahkan pengguna dalam Penyewaan Mobil secara online.

### Fitur

Beberapa fitur yang terdapat pada Rental Mobil antara lain:

-   Authentication (login, register, dan logout)
-   CRUD cars
-   Cart dan checkout
-   Riwayat transaksi
-   Cetak Laporan

### Instalasi

Untuk menginstal , ikuti langkah-langkah berikut:

1. Clone repository ini dengan menggunakan command `git clone https://github.com/AndiSAG01/Rental-Mobil.git`
2. Pindah ke direktori project dengan command `cd Rental-Mobil`
3. Install dependency yang dibutuhkan dengan command `composer install` dan `npm install`
4. Copy file `.env.example` dan ubah nama file menjadi `.env.
5. Generate key aplikasi dengan command `php artisan key:generate`
6. Migrasi database dengan command `php artisan migrate --seed`
7. Jalankan aplikasi dengan command `php artisan serve`

### Kontribusi

Anda dapat melakukan kontribusi pada repository ini dengan melakukan fork dan pull request. Pastikan untuk melakukan perubahan pada branch yang sesuai.

### Lisensi

Rental Mobil dilisensikan di bawah [MIT License](https://opensource.org/licenses/MIT).
