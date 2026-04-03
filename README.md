# Praktikum Pemrograman Web 2
---
### Mata Kuliah: Pemrograman Web 2
### Nama: Mochamad Wahyudin Ardiansyah
### Nim: 312210148
### Kelas: I241B
### Dosen Pengampu: Agung Nugroho, S.Kom., M.Kom., S.Kom., M. Kom
---
## Langkah - Langkah Praktikum

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
