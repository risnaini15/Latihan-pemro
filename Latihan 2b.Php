<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin: 20px;
        }
        .row {
            display: flex;
        }
        .box {
            width: 30px;
            height: 30px;
            border: 1px solid black;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 2px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        $rows = 5; // Jumlah baris
        for ($i = 1; $i <= $rows; $i++) {
            echo "<div class='row'>";
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='box'>$j</div>";
            }
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>