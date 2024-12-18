<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1c</title>
    <style>
        table {
            border-collapse: collapse;
            text-align: center;
        }
        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }
    </style>
</head>
<body>

<?php
// Variabel untuk huruf
$huruf = array('A', 'B', 'C');

// Mulai tabel
echo "<table>";

// Baris pertama
echo "<tr>";
echo "<td>" . $huruf[0] . "</td>";
echo "</tr>";

// Baris kedua
echo "<tr>";
echo "<td>" . $huruf[0] . "</td>";
echo "<td>" . $huruf[1] . "</td>";
echo "</tr>";

// Baris ketiga
echo "<tr>";
echo "<td>" . $huruf[0] . "</td>";
echo "<td>" . $huruf[1] . "</td>";
echo "<td>" . $huruf[2] . "</td>";
echo "</tr>";

// Akhiri tabel
echo "</table>";
?>

</body>
</html>