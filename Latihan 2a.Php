<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .highlight {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Kolom 1</th>
                <th>Kolom 2</th>
                <th>Kolom 3</th>
                <th>Kolom 4</th>
                <th>Kolom 5</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 1; $i <= 15; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= 5; $j++) {
                    // Kolom 1 diberi highlight
                    $class = ($j == 1) ? "highlight" : "";
                    echo "<td class='$class'>Baris $i Kolom $j</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>