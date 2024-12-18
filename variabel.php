<?php

$a = "hello";
$hello = "Hello Word!";

// menampilkan isi variabel $a
// hello
echo $a . "</br>";

// menampilkan isi variabel $a
// Hello Word!
echo $hello . "</br>";

// menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
// isi variabel $a = hello. jadi, nanti akan menampilkan isi dari variabel $hello
// Hello Word
echo $$a . "</br>";

 ?>