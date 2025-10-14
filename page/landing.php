<?php
require_once '../COMPONENT/navbar.php' ;
?>

<!-- Header -->
    <header class="header-custom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">
                <div class="d-flex align-items-center">
                    <a href="Home.html">

                        <img src="asset/logo.png" alt="" style="height: 60px;">
                    </a>
                </div>
                <nav class="d-none d-md-flex align-items-center">
                    <a href="Home.html" class="nav-link-custom">Home</a>
                    <a href="#" class="nav-link-custom">Top Up</a>
                    <a href="#" class="nav-link-custom">Cek Transaksi</a>
                </nav>
                <div class="d-flex align-items-center gap-3">
                    <div class="search-container">
                        <input type="text" class="form-control search-input" placeholder="Search">
                        <button class="search-btn">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <div class="user-icon">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero-section position-relative d-flex align-items-center" style="min-height: 100vh;">
        <div class="hero-bg position-absolute top-0 start-0 w-100 h-100">
            <img src="asset/hhhhh new.png" alt="" class="w-100 h-100" style="object-fit: cover;">
        </div>

        <div class="container hero-content position-relative">
            <div class="row">
                <div class="col-lg-6 text-white">
                    <h2 class="display-4 fw-bold mb-4">TOP UP BY MEOWP</h2>
                    <p class="fs-5 mb-2">PLATFORM GAME ONLINE TERPERCAYA DI INDONESIA</p>
                    <p class="small opacity-75">MENERIMA BERBAGAI MACAM PEMBAYARAN</p>
                    <p class="small opacity-75 mb-4">MULAI DARI DANA, OVO, GOPAY, SHOPEE PAY, DLL</p>
                    <div class="d-flex gap-3">
                        <button class="btn btn-custom-yellow px-4 py-2 rounded">
                            Mulai Top Up
                        </button>
                        <button class="btn btn-outline-custom px-4 py-2 rounded">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Games Section -->
    <section class="py-5">
        <div class="container">
            <!-- Quick Links -->
            <div class="row g-3 mb-4 popular-grid">
                <div class="popular-header">
                    <div class="api-logo">
                        <i class="fas fa-fire text-dark"></i>
                    </div>
                    <div>
                        <h3 class="h3 fw-bold mb-1">Popular Games</h3>
                        <p class="mb-0">berikut adalah produk populer saat ini.</p>
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="popular-item">
                        <img src="asset/Roblox (via login) (4).png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="popular-item">
                        <img src="asset/Roblox (via login) (6).png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="popular-item">
                        <img src="asset/Roblox (via login) (8).png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="popular-item">
                        <img src="asset/Roblox (via login) (5).png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="popular-item">
                        <img src="asset/Roblox (via login) (7).png" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-6 ">
                    <div class="popular-item">
                        <img src="asset/Roblox (via login).png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- Nav Tabs untuk Categories -->
            <ul class="nav nav-tabs nav-tabs-custom flex-wrap" id="categoryTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="semua-tab" data-bs-toggle="tab" data-bs-target="#semua-pane"
                        type="button" role="tab" aria-controls="semua-pane" aria-selected="true">
                        SEMUA
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="topup-tab" data-bs-toggle="tab" data-bs-target="#topup-pane"
                        type="button" role="tab" aria-controls="topup-pane" aria-selected="false">
                        Topup Via Login
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="joki-tab" data-bs-toggle="tab" data-bs-target="#joki-pane"
                        type="button" role="tab" aria-controls="joki-pane" aria-selected="false">
                        JOKI
                    </button>
                </li>
            </ul>

            <!-- Tab Content -->
            <div class="tab-content tab-content-custom" id="categoryTabContent">
                <!-- Tab SEMUA -->
                <div class="tab-pane fade show active" id="semua-pane" role="tabpanel" aria-labelledby="semua-tab"
                    tabindex="0">
                    <div class="row g-3">
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <a href="Detail.html" style="text-decoration:none;">
                                    <div class="game-card-content">
                                        <img src="asset/tp mole.png" alt="" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/tp roblok.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/tp hsr.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/tp gi.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/tp mcgg.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/tp ff.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/topup lads.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/topup hok.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/tp pubg.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <a href="viewall.html" class="text-center p-5  text-white fs-2">Tampilkan Lainyaa ....</a>
                    </div>
                </div>

                <!-- Tab TOP UP GAME -->
                <div class="tab-pane fade" id="topup-pane" role="tabpanel" aria-labelledby="topup-tab" tabindex="0">
                    <div class="row g-3">
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/ml via login.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/rosbloj v login.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <a href="viewall.html" class="text-center p-5  text-white fs-2">Tampilkan Lainyaa ....</a>

                    </div>
                </div>

                <!-- Tab JOKI -->
                <div class="tab-pane fade" id="joki-pane" role="tabpanel" aria-labelledby="joki-tab" tabindex="0">
                    <div class="row g-3">
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="assets//CardJokiMLClassic.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="assets//CardJokiMLGendong.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="assets//CardJokiMCGG.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <a href="Explore.html" class="text-center p-5  text-white fs-2">Tampilkan Lainyaa ....</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </body>
</html>