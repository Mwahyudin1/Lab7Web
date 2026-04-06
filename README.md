# Praktikum Pemrograman Web 2
---
### Mata Kuliah: Pemrograman Web 2
### Nama: Mochamad Wahyudin Ardiansyah
### Nim: 312210148
### Kelas: I241B
### Dosen Pengampu: Agung Nugroho, S.Kom., M.Kom., S.Kom., M. Kom
---
## Langkah - Langkah Praktikum

*Praktikum 1 di update menjadi praktikum 2*.

### PRAKTIKUM 2: CRUD
### 1. Membuat Database dan Tabel
Langkah pertama adalah membuat database dengan nama ``` lab_ci4 ``` dan tabel ``` artikel ``` melalui **phpMyAdmin**.

<img width="448" height="305" alt="image" src="https://github.com/user-attachments/assets/52e9e8e9-4eea-4d13-85f7-ad626a19dfb2" />

### 2. Konfigurasi Database
Selanjutnya melakukan konfigurasi database untuk menghubungkan ke database server. Konfigurasi dilakukan pada file ``` .env ```, konfigurasi juga bisa dilakukan pada file ``` app/config/database.php ```.

<img width="531" height="185" alt="image" src="https://github.com/user-attachments/assets/bf2b74ab-0dd4-4c5e-bf34-b2a9d2d6ad11" />

### 3. Membuat Model
Selanjutnya membuat model untuk memproses data artikel. Buat file baru dengan nama ``` ArtikelModel.php ``` pada direktory ``` app/Models ```.

<img width="834" height="346" alt="image" src="https://github.com/user-attachments/assets/826cc0ac-fc75-4f7c-ac22-6dafc3487ebe" />

### 4. Membuat Controller
Selanjutnya buat Controller baru dengan nama ``` Artikel.php ``` pada direktory ``` app/Controllers ```.

<img width="787" height="420" alt="image" src="https://github.com/user-attachments/assets/e68cb20d-b13a-43fd-9682-e461aed16875" />

### 5. Membuat View
Selanjutnya buat direktory baru dengan nama ``` artikel ``` pada direktory ``` app/view ```, lalu buat file baru dengan nama ``` index.php ```.

<img width="1029" height="429" alt="image" src="https://github.com/user-attachments/assets/a407d469-1053-47ec-a4e6-ca82c837f633" />

Kemudian menambahkan beberapa data pada database.

<img width="1539" height="235" alt="image" src="https://github.com/user-attachments/assets/d00fb4f2-bec1-4e8a-90ca-b34c38907d0d" />

Lalu ubah jalur route pada ``` routes.php ``` menjadi ``` $routes->get('/artikel', 'Artikel::index'); ```.

<img width="1054" height="385" alt="image" src="https://github.com/user-attachments/assets/f5369118-1a40-4f09-8aea-e43bc41649f4" />

Kemudian buka browser dan lihat hasilnya.

<img width="1920" height="984" alt="image" src="https://github.com/user-attachments/assets/785c8f27-4b7a-4913-84a4-fe443ddbf258" />

### 6. Membuat Tampilan Detail Artikel
Selanjutnya, agar saat judul artikel di klik maka akan diarahkan ke halaman yang berbeda. Untuk membuatnya tambahkan fungsi baru pada file ``` Controller/Artikel.php ```.

<img width="797" height="618" alt="image" src="https://github.com/user-attachments/assets/c3ff9107-4ca7-40f3-be37-ff355ef86293" />

Kemudian buat view baru di direktory ``` app/View/artikel ``` dengan nama file ``` detail.php ```.

<img width="1051" height="253" alt="image" src="https://github.com/user-attachments/assets/db936ffc-d27d-46f3-9c2d-b0cb509f46c1" />

Kemudian tambahkan routing baru di direktory ``` app/Config/Routes.php ```

<img width="1044" height="393" alt="image" src="https://github.com/user-attachments/assets/22af6fa7-31a9-4393-9e1d-0100c3982253" />

Lalu klik pada judul artikel maka akan di arahkan he halaman yang berbeda.

<img width="1920" height="973" alt="image" src="https://github.com/user-attachments/assets/987b2218-bb01-4646-92f5-917ca39fd8d0" />

### 7. Membuat Menu Admin
Selanjutnya membuat menu admin untuk melakukan proses ``` CRUD ``` pada artikel. Buat fungsi baru pada file ``` Artikel.php ```

<img width="818" height="692" alt="image" src="https://github.com/user-attachments/assets/c48a8ea7-4d4a-4b6d-989d-430be85e972e" />

Kemudian buat view baru untuk menampilkan tampilan admin dengan nama file ``` admin_index.php ``` pada direktory ``` app/View/artikel ```

<img width="1543" height="720" alt="image" src="https://github.com/user-attachments/assets/72d17753-0680-42ed-935d-d5629f29d793" />

<img width="1545" height="270" alt="image" src="https://github.com/user-attachments/assets/f9762a1b-1dea-4f22-8dcd-9bc6e5333851" />

Kemudian buat file ``` admin_header.php ``` pada direktory ``` app/View/template/ ```.

<img width="957" height="522" alt="image" src="https://github.com/user-attachments/assets/40f65404-25d1-4db9-974f-988b11f5cb71" />

Kemudian buat file ``` admin_footer.php ``` pada direktory ``` app/View/template/ ```.

<img width="1142" height="440" alt="image" src="https://github.com/user-attachments/assets/1fb337a0-9963-4e58-aae8-9e55dcc5ae01" />

Kemudian tambahkan routing baru pada file ``` routes.php ``` untuk menu admin.

<img width="1066" height="583" alt="image" src="https://github.com/user-attachments/assets/f3563ddf-17d6-4d54-8074-ca965b48bcec" />

Kemudian buka browser untuk melihat hasilnya.

<img width="1920" height="977" alt="image" src="https://github.com/user-attachments/assets/a0fef4e8-260b-467a-ab71-38348dd4fcfd" />

### 8. Menambah Data Artikel
Selanjutnya menambahkan fungsi baru pada direktory ``` app/Controllers/Artikel.php ``` untuk menambahkan artikel baru.

<img width="810" height="755" alt="image" src="https://github.com/user-attachments/assets/ec9ac2f4-fce0-4c83-aa63-9e95e3527721" />

Kemudian buat view baru untuk form tambah artikel dengan nama file ``` from_add.php ```.

<img width="766" height="286" alt="image" src="https://github.com/user-attachments/assets/fb54cb8b-f870-4b76-8cbb-f829923b1bfe" />

Kemudian buka browser untuk melihat hasilnya.

<img width="1920" height="974" alt="image" src="https://github.com/user-attachments/assets/f510bb8d-298f-4c3d-a3ad-49ffc394b13f" />

### 9. Mengubah Data
Selanjutnya menambahkan fungsi baru pada direktory ``` app/Controllers/Artikel ``` dengan nama ``` edit() ```.

<img width="777" height="580" alt="image" src="https://github.com/user-attachments/assets/9fa8963f-58bc-4a56-ba75-718b43cf8664" />

Kemudian buat view baru untuk form edit artikel dengan nama file ``` from_edit.php ```

<img width="888" height="250" alt="image" src="https://github.com/user-attachments/assets/19bb1188-332d-4e40-b655-f882bbd90e65" />

Kemudian buka browser untuk melihat hasilnya.

<img width="1920" height="977" alt="image" src="https://github.com/user-attachments/assets/89a8aa57-3dc1-4926-914f-713e68b8e8fb" />

### 10. Menghapus Data
Selanjutnya menambahkan fungsi baru untuk menghapus data pada direktory ``` app/Controllers/Artikel.php ``` dengan nama fungsi ``` delet() ```.

<img width="513" height="256" alt="image" src="https://github.com/user-attachments/assets/db2dcaf7-6994-46b5-a93d-91a4ee465073" />

Kemudian buka browser untuk melakukan hapus artikel.
- Before

<img width="1920" height="982" alt="image" src="https://github.com/user-attachments/assets/62621d74-982a-4527-95d6-69863b9994d4" />

- After

<img width="1920" height="972" alt="image" src="https://github.com/user-attachments/assets/7986e345-1c32-4e62-ad6f-77d552fed4a1" />

---

### PRAKTIKU 3: VIEW LAYOUT & VIEW CELL
### 1. Update Database
Update database terlebih dahulu di ``` phpMyAdmin ``` pada database ``` lab_ci4 ```.

<img width="636" height="148" alt="image" src="https://github.com/user-attachments/assets/ed02da60-b2f4-4916-9450-f561068e492d" />

Kemudian buat direktory ``` Models ``` pada direktory ``` app/ ``` lalu buat file baru dengan nama ``` ArtikelModel.php ``` di dalam direktory ``` app/Models/ ```.

<img width="814" height="338" alt="image" src="https://github.com/user-attachments/assets/09b8d07f-ba32-41c9-bed9-29b59d0e7b96" />

### 2. Buat Layout Utama
Buat folder baru dengan nama ``` layout ``` pada direktory ``` app/Views/ ``` kemudian buat file baru dengan nama ``` main.php ``` pada direktory ``` app/Views/layout/ ```.

<img width="1541" height="544" alt="image" src="https://github.com/user-attachments/assets/7fb1cdbd-8064-4f31-ac02-d1c4da3c4386" />

<img width="1543" height="528" alt="image" src="https://github.com/user-attachments/assets/60c6cebe-dd7a-4d35-83fe-f10e724d194e" />

### 3. Buat Sidebar (View Cell)
Buat folder ``` Cells ``` pada direktory ``` app/ ``` kemudian buat file ``` ArtikelTerkini.php ``` pada direktory ``` app/Cells/ ```.

<img width="875" height="334" alt="image" src="https://github.com/user-attachments/assets/614cd362-6c33-49bd-97b3-146f9bf491a9" />

Kemudian buat folder baru ``` Components ``` pada direktory ``` app/Views ``` lalu buat file dengan nama ``` artikel_terkini.php ```.

<img width="778" height="324" alt="image" src="https://github.com/user-attachments/assets/67011015-81c0-4b0f-807c-f1140f837b52" />

### 4. Membuat Halaman Daftar Artikel
Buat file baru pada direktory ``` app/Views/artikel ``` dengan nama file ``` index.php ```.

<img width="995" height="556" alt="image" src="https://github.com/user-attachments/assets/fd560a62-9a52-4291-838a-4766b47ca69e" />

Kemudian lakukan update pada file ``` home.php ```, ``` artikel.php ```, ``` about.php ```, dan ``` contact.php ```.

<img width="462" height="282" alt="image" src="https://github.com/user-attachments/assets/ff1f863a-eb36-485c-a4f4-8ca365ec9f1f" />

<img width="438" height="292" alt="image" src="https://github.com/user-attachments/assets/cb099f0d-26b6-41cc-b36d-67197748d6b3" />

<img width="451" height="289" alt="image" src="https://github.com/user-attachments/assets/004071a1-6f19-4ffa-9dea-16d19b256cbe" />

<img width="422" height="277" alt="image" src="https://github.com/user-attachments/assets/6eb375a4-6304-4762-9749-220bfbfdbe69" />

Kemudian buka browser untuk melihat hasilnya.
- Halaman Home

<img width="1920" height="981" alt="image" src="https://github.com/user-attachments/assets/9181c4a6-dba0-4950-8273-e4b29f73b70a" />

- Halaman Artikel

<img width="1920" height="975" alt="image" src="https://github.com/user-attachments/assets/80ed6b54-cf20-45d2-9826-ec89bfe773f3" />

- Halaman About

<img width="1920" height="975" alt="image" src="https://github.com/user-attachments/assets/450c62ab-cde9-4c35-9469-8755686f06f1" />

- Halaman Kontak

<img width="1920" height="974" alt="image" src="https://github.com/user-attachments/assets/9d4346d9-d473-4013-8de7-ca0938876e65" />

### 5. Jawaban Pertanyaan Tugas
**Manfaat utama dari penggunaan View Layout**
- **Efisiensi Kode (Reusability)**: Kita tidak perlu menulis ulang struktur HTML (Header, Navigasi, Footer) di setiap file View.
- **Kemudahan Maintenance**: Jika ada perubahan pada tampilan menu atau footer, kita cukup mengubah satu file saja (layout/main.php), maka seluruh halaman akan otomatis terupdate.
- **Konsistensi Tampilan**: Memastikan seluruh halaman website memiliki desain dan struktur yang seragam.

**Perbedaan View cell dengan View biasa**
- **View Biasa**: Digunakan untuk menampilkan konten utama satu halaman penuh (misal: halaman About atau Daftar Artikel) dan biasanya dipanggil langsung oleh Controller.
- **View Cell**: Digunakan untuk menampilkan komponen UI kecil yang bersifat modular (seperti widget sidebar atau menu navigasi).
- **Kemandirian Data**: View Cell bisa mengambil datanya sendiri (melalui class Cell) tanpa harus dikirimkan data secara manual dari Controller utama, sehingga lebih praktis digunakan berulang kali di halaman mana saja.

---

### Praktikum 4
### 1. Membuat Tabel User
Lakukan pembuatan tabel melalui phpMyAdmin pada database ``` lab_ci4 ```. Tabel ini berfungsi untuk mennyimpan informasi login admin.

<img width="469" height="248" alt="image" src="https://github.com/user-attachments/assets/ade176a8-c7dd-497a-80d0-43929ab40c7a" />

### 2. Membuat Model User
Model user dibuat untuk menciptakan objek yang bertugas mengelola data pada tabel ``` users ```. Tanpa model, controller tidak akan bisa mengecek apakah username, email, dan password ada di database atau tidak.

Buat file baru di direktory ``` app/Models/ ``` dengan nama file ``` UserModel.php ```.

<img width="805" height="342" alt="image" src="https://github.com/user-attachments/assets/55ff3ed8-cd16-4092-8ea9-fbd87866b52a" />

### 3. Membuat Seeder
Seeder berfungsi untuk memasukkan data pengguna awal ke dalam tabel users secara otomatis tanpa harus mengisi manual lewat phpMyAdmin. Dengan menggunakan seeder, password admin ``` ("admin123") ``` akan diubah menjadi kode acak (hash) menggunakan fungsi ``` password_hash ``` agar tersimpan secara aman di database.

Buka terminal/CLI dan jalankan perintah ``` php spark make:seeder UserSeeder ``` untuk membuat seeder baru.

<img width="759" height="165" alt="image" src="https://github.com/user-attachments/assets/4a45ee5b-e435-4aeb-94f3-89ece990a9ce" />

Kemudian buka direktory ``` app/Database/Seeds/UserSeeder.php ``` lalu isi kode berikut.

<img width="818" height="463" alt="image" src="https://github.com/user-attachments/assets/5e07ee97-73a8-4ba4-9dd7-f00d9e6cbef8" />

Kemudian buka terminal dan jalankan perintah ``` php spark db:seed UserSeeder ```.

<img width="749" height="140" alt="image" src="https://github.com/user-attachments/assets/3ff5e0f0-3135-4a96-bb90-266449cfa5d1" />

Kemudian cek kembali tabel ``` users ``` pada phpMyAdmin untuk melihat apakah database berhasil di eksekusi atau tidak.

<img width="1093" height="77" alt="image" src="https://github.com/user-attachments/assets/fe806b6b-13ad-48da-8102-c7d39ec37564" />

Data berhasil di eksekusi dan password berhasil di has.

### 4. Membuat Controller User
Controller ini berfungsi sebagai pengatur alur masuk dan keluar pengguna. Saat user menginput data, Controller akan meminta ``` UserModel ``` untuk mencari email tersebut di database. Jika ditemukan, password akan dicocokkan. Jika sesuai, data pengguna disimpan ke dalam session agar sistem mengenali bahwa user tersebut sudah login. Jika salah, user akan dikembalikan ke halaman login dengan pesan kesalahan.

Buat file baru dengan nama ``` User.php ``` di dalam direktory ``` app/Controllers/ ```.

<img width="1543" height="678" alt="image" src="https://github.com/user-attachments/assets/30aa8b3f-7d79-4117-93d9-e4c62f218744" />

<img width="1542" height="632" alt="image" src="https://github.com/user-attachments/assets/c90d765a-52e0-4e13-98ea-017d90bc207a" />

### 5. Membuat View Login
Halaman ini berfungsi sebagai antarmuka pengguna untuk melakukan proses autentikasi. Form ini menggunakan metode ``` post ``` untuk mengirimkan data secara aman ke Controller. Di dalamnya terdapat pengecekan *session flashdata* untuk memberikan feedback jika pengguna salah memasukan email atau password salah.

Buat direktory baru bernama ``` user ``` di dalam direktory ``` app/Views/ ```, kemudia buat file baru dengan nama ``` login.php ``` pada direktory ``` app/Views/user/ ```.

<img width="1325" height="666" alt="image" src="https://github.com/user-attachments/assets/9d85803d-602c-4059-a1df-ada1bbf78182" />

### 6. Konfigurasi Routing Login dan Logout
Konfigurasi ini berfungsi untuk mendaftarkan alamat URL ``` /user/login ``` dan ``` /user/logout ``` ke dalam sistem. Tanpa konfigurasi ini, browser akan menampilkan ``` Error 404 (Page Not Found) ``` karena sistem tidak tahu URL tersebut harus diarahkan ke Controller User.

Buka file ``` routes.php ``` untuk melakukan update atau konfigurasi dan tambahkan kode berikut.

<img width="525" height="135" alt="image" src="https://github.com/user-attachments/assets/0c0ee7f9-e4a9-4333-97d4-69b30487cee7" />

Kemudian buka browser untuk melihat halaman login.

<img width="1044" height="666" alt="image" src="https://github.com/user-attachments/assets/391184b3-e2c4-4f99-a992-abcc77d1d982" />

### 7. Membuat Auth Filter
Auth filter berfungsi untuk menciptakan sistem keamanan ``` (middleware) ```. Filter ini akan memeriksa apakah pengunjung sudah login atau belum. Jika belum, filter secara otomatis akan menolak akses dan mengarahkan kembali pengunjung ke halaman login, sehingga folder admin tidak bisa diakses sembarangan.

Buat file dengan nama ``` Auth.php ``` pada direktory ``` app/Fillters/ ``` lalu isi dengan kode berikut.

<img width="1086" height="456" alt="image" src="https://github.com/user-attachments/assets/67c745c8-c2bf-493c-a5ad-362edbfb8eda" />

### 8. Aktivasi Filter
Aktivasi filter ini dilakukan untuk menghidupkan sistem keamanan yang telah dibuat. Dengan mendaftarkan rute ``` admin/* ``` ke dalam filter ``` before ```, maka setiap kali ada permintaan akses ke halaman admin (seperti tambah, edit, atau hapus artikel), sistem akan otomatis menjalankan pengecekan login terlebih dahulu. Jika pengguna belum login, maka akan diarahkan kembali ke halaman login.

Buka file ``` app/Config/Fillters.php ``` cari ``` public arry $aliases ``` lalu tambahkan kode ``` 'auth' => \App\Filters\Auth::class, ```.

<img width="806" height="290" alt="image" src="https://github.com/user-attachments/assets/885b5869-7bac-4d9d-980d-788151340c46" />

Masih di file yang sama cari bagian ``` public $globals ``` kemudian tambahkan kode ``` 'auth' => ['except' => ['user/login', 'user/logout', '/']], ```.

<img width="1078" height="290" alt="image" src="https://github.com/user-attachments/assets/b076e282-cc42-4886-959a-964a84af679f" />

### 9. Melakukan Uji Coba (Testing)
Pengujian dilakuakn untuk mengetahui apakah sistem yang di buat sudah berjalan dengan baik atau belum. Dalam Pengujian ini dilakukan beberapa tahapan untuk pengujiannya.
- Tahap 1: Uji Coba Fillter Keamnana

Untuk melakukannya ketik manual di browser ``` localhost:8080/admin/artikel ```, jika di lempar kembali ke halaman login berarti fillter keamanan berhasil diterapkan.

- Tahap 2: Uji Coba Login Gagal

Masukan email dan password asal - asalan untuk melakukan uji coba login gagal.

<img width="1042" height="669" alt="image" src="https://github.com/user-attachments/assets/1db443cc-3ae5-4f17-b5f6-04b804218653" />

- Tahap 3: Uji Coba Login Sukses

Untuk melakukan masukan email dan password dengan benar. Maka akan di arahkan ke halaman admin.

<img width="1043" height="665" alt="image" src="https://github.com/user-attachments/assets/7af05a53-1ffe-4ae3-83f0-a4550de29e2a" />

<img width="1919" height="971" alt="image" src="https://github.com/user-attachments/assets/97f1d6ac-5b2c-48f6-bed1-7645cdbc1450" />

---
