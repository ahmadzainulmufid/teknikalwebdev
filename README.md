# Technical Test - Web Development (Product Management CRUD)

Aplikasi CRUD (Create, Read, Update, Delete) sederhana untuk mengelola data produk, dibangun dengan **Laravel 13**, **Tailwind CSS**, dan **MySQL** sebagai bagian dari pemenuhan kualifikasi _Technical Test Web Development_.

## 🚀 Fitur Utama

- **List Produk:** Menampilkan seluruh data produk yang tersimpan dalam database menggunakan representasi tabel yang rapi[cite: 51].
- **Tambah Produk:** Form interaktif untuk menambahkan produk baru dilengkapi dengan validasi input yang ketat (nama, harga, stok)[cite: 52].
- **Edit Produk:** Mengubah informasi detail dari produk yang sudah terdaftar sebelumnya[cite: 53].
- **Hapus Produk:** Menghapus data produk dari sistem dengan proteksi _pop-up_ konfirmasi sebelum eksekusi untuk menghindari salah klik[cite: 55].
- **Data Seeding:** Mengisi otomatis database dengan minimal 5 contoh data produk awal untuk keperluan pengujian.

---

## 🛠️ Spesifikasi & Tech Stack

- **Framework Utama:** Laravel 13 (Latest Version)
- **UI Framework:** Tailwind CSS
- **Database Engine:** MySQL via Laragon / Herd
- **Development Tooling:** DBeaver

---

## 🗄️ Struktur Database (`products`)

Tabel `products` dibuat dengan mengikuti spesifikasi teknis berikut:

| Nama Kolom    | Tipe Data         | Atribut / Keterangan                             |
| :------------ | :---------------- | :----------------------------------------------- |
| `id`          | `BIGINT UNSIGNED` | Primary Key, Auto Increment (Standar Laravel 13) |
| `name`        | `VARCHAR(100)`    | Not Null, Maksimal 100 Karakter                  |
| `description` | `TEXT`            | Nullable (Opsional)                              |
| `price`       | `DECIMAL(10, 2)`  | Not Null, Akurasi Keuangan                       |
| `stock`       | `INT`             | Default: 0, Not Null                             |
| `created_at`  | `TIMESTAMP`       | Otomatis terisi saat data dibuat                 |
| `updated_at`  | `TIMESTAMP`       | Otomatis terisi saat data diperbarui             |

---

## 💻 Langkah-Langkah Instalasi & Menjalankan Projek

Ikuti panduan berikut untuk memasang projek ini di lingkungan lokal (_local development_) Anda:

### 1. Klon Repositori

Clone projek ini dari repositori github:

```bash
git clone https://github.com/ahmadzainulmufid/teknikalwebdev.git
cd teknikalwebdev
```

### 2. Instalasi Depedency

Jalankan composer untuk mengunduh seluruh package vendor yang dibutuhkan:

```bash
composer install
```

### 3. Konfigurasi Environment (.env)

Salin file .env.example menjadi .env:

```bash
cp .env.example .env
```

Buka file .env yang baru dibuat, lalu sesuaikan pengaturan database Anda ke target database yang sudah dibuat di Laragon/DBeaver:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=teknikalwebdev
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Struktur Database & Seeding Data

Pastikan service MySQL di Laragon atau Herd Anda sudah aktif, kemudian buat struktur tabel products dan isi dengan 5 data contoh bawaan menggunakan perintah:

```bash
php artisan migrate

php artisan db:seed --class=ProductSeeder
```

### 6. Jalankan Server Lokal

Akses aplikasi melalui Laravel Herd dengan membuka domain lokal Anda (misal: http://teknikalwebdev.test) atau jika menggunakan server internal bawaan Laravel:

```bash
php artisan serve
```

Buka browser dan akses alamat http://127.0.0.1:8000
