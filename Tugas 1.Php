<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas1.php</title>
</head>
<body>
    <h1>Pengulangan untuk mencari kategori bilangan:</h1>
    <ul>
    <?php
    function isPrime($number) {
        if ($number < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }
        return true;
    }

    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            $type = "bilangan genap";
        } else {
            $type = "bilangan ganjil";
        }

        if (isPrime($i)) {
            $type .= " sekaligus bilangan prima";
        }

        echo "<li>Angka $i adalah $type</li>";
    }
    ?>
    </ul>
</body>
</html>