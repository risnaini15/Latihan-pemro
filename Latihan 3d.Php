<?php
function factorial($n) {
    // Base case
    if ($n == 0 || $n == 1) {
        return 1;
    }
    // Recursive case
    return $n * factorial($n - 1);
}

// Contoh penggunaan
$number = 5;
echo "Faktorial dari $number adalah " . factorial($number);
?>