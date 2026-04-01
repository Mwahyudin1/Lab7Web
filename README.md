# Praktikum 1: PHP Framework (Codeigniter)

### Mata Kuliah: Pemrograman Web 2
### Nama: Mochamad Wahyudin Ardiansyah
### Nim: 312210148
### Kelas: I241B
### Dosen Pengampu: Agung Nugroho, S.Kom., M.Kom., S.Kom., M. Kom
---
## Langkah - Langkah Praktikum

### 1. Konfigurasi dan Installasi Codeigniter
Unduh Codeigniter melalui website https://codeigniter.com/download.

Lalu lakukan konfigurasi terlebih dahulu untuk mengaktifkan ekstensi PHP guna kebutuhan pengembangan Codeigniter 4.

Buka XAMPP, pada bagian Apache klik Config > PHP (php.ini)

<img width="940" height="551" alt="image" src="https://github.com/user-attachments/assets/ab7e7c87-37b5-47df-97fd-a0b5db252939" />

Lalu cari bagian extention, hilangkan tanda titik koma (;) untuk mengaktifkan ekstensi Codeigniter. Setelah titik koma dihapus simpan file dan kembali.

<img width="877" height="736" alt="image" src="https://github.com/user-attachments/assets/fe63735d-d5db-4f70-945e-e4126d412e37" />

Kemudian exstrak file zip Codeigniter yang telah di unduh ke dalam direktory **htdock/lab11_ci** dan ubah nama direktory **framework-4.x.xx** menjadi **c4**.

Kemudian buka browser untuk melihat apakah Codeigniter sudah berjalan melalui alamt http://localhost/lab11_ci/ci4/public/

<img width="1028" height="694" alt="image" src="https://github.com/user-attachments/assets/570b0e55-fa1b-43ef-9aca-22cc7972f709" />

### 2. Menjalankan CLI (Command Line Interface)
Buka shell pada XAMPP Control Panel, arahkan ke lokasi direktory kerja yang sudah dibuat sebelumnya **xampp/htdocs/lab11_ci/ci4**.

<img width="1864" height="535" alt="image" src="https://github.com/user-attachments/assets/e0b1064f-3f9b-4dc5-bd9f-11f795b58b98" />

Lakukan pemanggilan CLI dengan perintah ``` php spark ```.

<img width="1036" height="538" alt="image" src="https://github.com/user-attachments/assets/88e528dc-4fd9-4ff3-b095-f65897b78c3c" />

### 3. Mengaktifkan Mode Debuging
Cari nama file **env** di direktory **ci4** lalu ubah namanya menjadi **.env** kemudian buka file tersebut dan ubah nilai variabel **CI_ENVIRONMENT** menjadi **CI_ENVIRONMENT = development**. Nilai variabel diubah guna mengaktifkan mode debuging pada Codeigniter.

<img width="871" height="729" alt="image" src="https://github.com/user-attachments/assets/9671a9ac-799b-4092-8fb4-fd31a8e566cb" />

Setelah nilai variabel diubah, sekarang mencoba mode debuging. Ubah kode pada file **app/Controllers/Home.php**, kemudian hilangkan tanda titik koma (;) pada kode guna melihat mode debuging.

<img width="853" height="360" alt="image" src="https://github.com/user-attachments/assets/18b53397-a28d-485e-beda-fb3d82cbe46c" />

Lalu buka browser untuk melihatnya.

<img width="1028" height="696" alt="image" src="https://github.com/user-attachments/assets/81367aad-4efd-4572-9e2f-ecd912fb8423" />

Pesan error menujukan dimana letak kesalahan pada kode programnya, mode debuging ini berguna untuk para pengembang atau developer unutk mengetahui dimana letak kesalahan pada kode programnya.

### 4. Routing dan Controller
Router terletak pada file **app/config/Routes.php**, pada file tersebut dapat mendefinisikan rote untuk aplikasi yang akan dibuat.

Contoh kode yang mengarahkan rute ke halaman home. ``` $routes->get('/', 'Home::index'); ```.

<img width="853" height="263" alt="image" src="https://github.com/user-attachments/assets/d94b2ff2-0039-4a67-9c90-33971fec5858" />

Tambahkan kode berikut unutk membuat route baru di file **Routes.php**

``` $routes->get('/about', 'page::about'); ```

``` $routes->get('/contact', 'page::contact'); ```

``` $routes->get('/faqs', 'page::faqs'); ```

<img width="909" height="309" alt="image" src="https://github.com/user-attachments/assets/0d36f2f5-e83d-48cf-ac27-154884dde96f" />

Buka CLI dan jalankan perintah **php spark routes** untuk melihat route yang ditambahkan sudah benar atau tidak.

<img width="1107" height="636" alt="image" src="https://github.com/user-attachments/assets/bafb2e06-8753-4e95-b5f1-b1443af7159b" />

Setelah membuat route baru selanjutnya membuat controller page. Untuk membuat controller page, buat file baru dengan nama file **page.php** pada direktory **Controllers**.

<img width="886" height="732" alt="image" src="https://github.com/user-attachments/assets/422dd68f-4232-49b4-a463-23d3b772db00" />

Selanjutnya membuat view. Buat file baru dengan nama **about.php** pada direktory view **app/view/about.php** yang dimana nanti akan memanggil file **header.php** dan **footer.php** yang berada di direktory **app/view/template/**.

<img width="515" height="218" alt="image" src="https://github.com/user-attachments/assets/56aa74b4-d5a5-4ca8-b999-d534e5b6d9af" />

Lalu buat folder baru dengan nama **template** di direktory **app/view/** yang mana didalam folder ada file **header.php** dan **footer.php**.

Kemudian buat file **header.php** dan **footer.php**.

<img width="820" height="552" alt="image" src="https://github.com/user-attachments/assets/2dbd6d6e-a956-4696-9162-d7d307c28bd0" />

<img width="1417" height="563" alt="image" src="https://github.com/user-attachments/assets/f7ce3671-bc41-467f-b7dc-9cba2bb03aba" />

Selanjutnya buat file **style.css** pada direktory **app/public/**.

<img width="859" height="965" alt="image" src="https://github.com/user-attachments/assets/3ef4e216-7bbb-4e02-bf3e-9f49eaaaa6e7" />

Kemudian buka browser unutk menjalankannya.

<img width="1920" height="1031" alt="image" src="https://github.com/user-attachments/assets/e9d95cf2-f042-4989-a054-61bab194ce30" />



