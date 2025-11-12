<?php
 include "COMPONENT/navbar.php";
 include "COMPONENT/head.php";
?>
<link rel="stylesheet" href="COMPONENT/style.css">


 
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
                        <a href="viewall.php" class="text-center p-5  text-white fs-2">Tampilkan Lainyaa ....</a>
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
                        <a href="viewall.php" class="text-center p-5  text-white fs-2">Tampilkan Lainyaa ....</a>

                    </div>
                </div>

                <!-- Tab JOKI -->
                <div class="tab-pane fade" id="joki-pane" role="tabpanel" aria-labelledby="joki-tab" tabindex="0">
                    <div class="row g-3">
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/joki rank.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/joki cl.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/joki gendong.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-4 col-lg-4">
                            <div class="game-card">
                                <div class="game-card-content">
                                    <img src="asset/joki mcgg.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <a href="viewall.php" class="text-center p-5  text-white fs-2">Tampilkan Lainyaa ....</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "COMPONENT/footer.php" ?>