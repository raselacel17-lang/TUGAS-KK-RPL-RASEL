<?php
//modular adalah konsep programming yang memecah program menjadi beberapa bagian atau modul yang lebih kecil dan dapat digunakan kembali.
//kita akan memanggil file navbar.php dan footer.php di file latihan.php
//dengan mengggunakan include()

//include adalah salah satu cara untuk menggabungkan beberapa file php menjadi satu file php yang utuh. include() akan mengambil kode dari file yang di tentukan  dan menempatkannya di tempat include() di panggil jika file yang di panggil tidak di temukan, maka akan muncul peringatan (warning) tetapi script tetap berjalan.

include 'navbar.php';
?>

<h1></h1>Hello, world! Rasel | page latihan 1</h1>

<?php include ('footer.php'); ?>
  
