<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program PHP Sederhana</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Form Input Data</h2>
        <form method="post">
            <div class="form-grup">
                <label for="nama">Nama</label>
                <input type="text" name="nama">
            </div>
            <div class="form-grup">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" id="tgl_lahir">
            </div>
            <div class="form-grup">
                <label for="pekerjaan">Pekerjaan</label>
                <select name="pekerjaan" id="pekerjaan">
                    <option value="Web developer">Web Developer</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                    <option value="Game Developer">Game Developer</option>
                </select>
            </div>
            <input type="submit" name="submit" value="Kirim" class="submit">
        </form>

        <?php
        if(isset($_POST['submit'])){ // Mengecek apakah tombol submit ditekan
            $nama = $_POST['nama'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $pekerjaan = $_POST['pekerjaan'];
        
            if(!empty($nama) && !empty($tgl_lahir) && !empty($pekerjaan)){ // Mengecek apakah data formulir tidak kosong
                $umur = 0;
                // Validasi dan hitung umur jika format tanggal sesuai
                if (strtotime($tgl_lahir)) {
                    $tanggal_lahir = new DateTime($tgl_lahir);
                    $today = new DateTime('today');
                    $umur = $tanggal_lahir->diff($today)->y;
                }
        
                // Menampilkan hasil
                echo "<div class='output'>";
                echo "<h3>Hasil Input Data</h3>";
                echo "<p>Nama: $nama </p>";
                echo "<p>Umur: $umur tahun </p>";
                echo "<p>Pekerjaan: $pekerjaan </p>";
        
                // Menampilkan gaji sesuai pekerjaan dengan format yang tepat
                switch ($pekerjaan) {
                    case 'Web developer':
                        $gaji = 17800000;
                        break;
                    case 'Desain Grafis':
                        $gaji = 8000000;
                        break;
                    case 'Game Developer':
                        $gaji = 8430000;
                        break;
                    default:
                        $gaji = 0;
                        break;
                }
                echo "<p>Gaji: Rp " . number_format($gaji, 0, ',', '.') . ",- per bulan</p>";
                echo "</div>";
            } else {
                echo "<div class='output'>";
                echo "<p>Silakan lengkapi semua data pada form.</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</body>
</html>