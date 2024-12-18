<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
</head>
<body>
    <h2>Menghitung Pangkat</h2>
    <?php
    // Fungsi untuk menghitung pangkat
    function pangkat($angka, $pangkat) {
        return pow($angka, $pangkat);
    }

    // Contoh penggunaan
    $angka = 5;
    $pangkat = 4;
    $hasil = pangkat($angka, $pangkat);

    // Menampilkan hasil
    echo "<p>$angka pangkat $pangkat = $hasil</p>";
    ?>
</body>
</html>
