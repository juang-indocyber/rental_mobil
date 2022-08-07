# 📝 Aplikasi Rental Mobil Berbasis Web

Aplikasi ini menggunakan bahasa pemrograman Hypertext Preprocessor (PHP) Dengan Metode MVC(Model, View, Controller) yang terhubung dengan MySQL Database dengan relasi tabel master `Merk Mobil`, `Pemesanan`, `Jenis Mobil`, `Jenis Pembayaran`, dan tabel transaksi `Pesanan`

## Instalasi & Konfigurasi 🔑
1. Kalian download atau clone repositori ini
2. Selanjutnya kalian bisa buka file `config.php` 
3. Ubah isi dari konstanta `BASE_URL` dengan `http://localhost/namafolder/`
4. Untuk `namafolder` silahkan kalian ganti sesuai nama folder dari aplikasi ini di komputer atau laptop kalian
5. Ubah juga konfigurasi database di file `config.php` 
6. Untuk login kalian bisa register terlebih dahulu atau menggunakan username = `admin` dan password `admin`

## Fitur Aplikasi 📝
|   Nama Modul  |      Tipe     |        Fitur       |
| ------------- |:-------------:| -------------------|
| Data Mobil    | `Data Master` | Create, Read, Update, Delete |
| Data Pemesan    | `Data Master` | Create, Read, Update, Delete |
| Data Pesanan    | `Data Transaksi` | Create, Read, Update, Delete |
| User Management | `Data Master` | Create, Read, Update, Delete |