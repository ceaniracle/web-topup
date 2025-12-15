<?php
// baca value dari $_GET[‘page’] dan masukkan ke var $page
$page = $_GET[&#39;page&#39;] ?? &#39;dashboard&#39;;
// routing untuk panel admin
// lihat apakah nilai dari $page sesuai dengan salah stu case
//dibawah
switch ($page){
    case 'dashboard' : include "page/dashboard.php" break;
    case 'genre' : include "page/input_genre.php" break;
default: echo “Halaman tidak ditemukan”;