<?php
//penuliasan variabel harus diawali dengan $

$a='Saya Sedang belajar PHP';
$b=5;
print $a;
echo $b; //fungsi print dan echo sama, yaitu output nilai
//output "Saya Sedang belajar PHP5"

//Di dalam PHP, setiap variabel bebas diisi dengan nilai apa saja
$a = 17; // nilai variabel a berisi angka (integer)
$a = "aku"; // nilai variabel a diubah menjadi kata (string)
$a = 17.42; // nilai variabel a diubah menjadi desimal (float)

//Variabel dalam PHP bersifat case sensitif
$andi="Andi";
echo $Andi; // Notice: Undefined variable: Andi
//PHP mengeluarkan error karena tidak menemukan variabel $Andi.
?>