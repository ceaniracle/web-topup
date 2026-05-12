<?php
// baca value dari $_GET['page']
$page = $_GET['page'] ?? 'dashboard';

// routing untuk panel admin
switch ($page) {

    case 'dashboard':
        include "page/dashboard.php";
        break;

    case 'genre':
        include "page/input_genre.php";
        break;

    default:
        echo "Halaman tidak ditemukan";
}
