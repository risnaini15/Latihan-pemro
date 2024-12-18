<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pola Angka</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            display: inline-block;
            margin: 2px;
        }
        .biru {
            background-color: navy;
            color: white;
        }
        .abu {
            background-color: lightgray;
            color: black;
        }
    </style>
</head>
<body>
    <?php
    for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "<div class='kotak biru'>$j</div>";
            } else {
                echo "<div class='kotak abu'>$j</div>";
            }
        }
        echo "<br>";
    }
    ?>
</body>
</html>