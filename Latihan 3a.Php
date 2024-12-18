<?php
function ganti_style($tulisan, $kelas) {
    return "<p class='$kelas'>$tulisan</p>";
}

$tulisan = "Hello World! Here I come!";
$kelas = "ganti-style";

echo ganti_style($tulisan, $kelas);
?>