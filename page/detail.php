<?php
 include "COMPONENT/navbar.php";
 include "COMPONENT/head.php";
?>
<link rel="stylesheet" href="COMPONENT/style.css">


<main class="main-content">                                                    
        <div class="container">
            <div class="row">
                <!-- Left Column - Game Info -->
                <div class="col-md-4">
                    <div class="game-info-card">
                        <div class="game-header d-flex align-items-center gap-3 mb-3">
                            <!-- kiri gambar -->
                            <div class="game-banner-square">
                                <img src="assets/ML_Detail.png" alt="Mobile Legends Bang Bang">
                            </div>

                            <!-- kanan teks -->
                            <div>
                                <div class="game-title">MOBILE LEGENDS: BANG BANG</div>
                                <div class="badge bg-success">Recommended</div>
                            </div>
                        </div>


                        <div class="small text-gray-400 mb-3">
                            Top up Mobile Legends lewat Meowp bisa dibilang jadi salah satu pilihan paling bijak buat
                            kamu yang pengen proses cepat, aman, dan tanpa ribet. dibandingkan metode top up lainnya
                            yang kadang perlu login akun game atau bahkan harus tunggu proses verifikasi manual, di
                            Meowp kamu cukup masukin User ID dan Zone ID, pilih item yang mau dibeli, selesaikan
                            pembayaran, dan diamond langsung dikirim otomatis ke akun kamu dalam hitungan detik! Gak
                            perlu khawatir soal keamanan karena prosesnya udah dirancang praktis tapi tetap terpercaya.
                            yang bikin Meowp makin unggul adalah banyaknya metode pembayaran yang tersedia. Kamu bisa
                            bayar pakai Gopay, Dana, QRIS, ShopeePay, OVO, Kredivo, Bank Transfer, Kartu Kredit, dan
                            bahkan lewat Indomaret, Alfamart, Telkomsel, Indosat, serta LinkAja.
                            Jadi, siapa pun kamu dan dari mana pun kamu top up, pasti ada metode pembayaran yang cocok
                            dan nyaman buat kamu pakai.
                            Dengan kecepatan layanan, keamanan transaksi, dan fleksibilitas pembayaran yang ditawarkan,
                            Meowp benar benar memahami kebutuhan para pemain Mobile Legends.
                        </div>

                        <!-- Ulasan dan rating -->
                        <div class="mb-3 rating-box p-3">
                            <strong>Ulasan dan rating</strong>
                            <div class="d-flex align-items-center mt-2">
                                <div class="text-warning me-2">
                                    <span class="h4 mb-0">4.7</span>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <small class="text-gray-400">Based on Reviews 3 rating</small>
                            </div>
                        </div>

                        <!-- Butuh bantuan -->
                        <div class="rating-box d-flex align-items-center gap-3 p-3">
                            <img src="assets/Cs.png" alt="CS" class="cs-img">
                            <div>
                                <div class="small text-gray-400 mb-2">Butuh bantuan?</div>
                                <div class="small">Kamu bisa hubungi admin disini</div>
                            </div>
                        </div>


                    </div>
                </div>

                <!-- Right Column - Top-up Form -->
                <div class="col-md-8">
                    <!-- Step 1: Enter User ID -->
                    <div class="step-card">
                        <div class="step-header">
                            <div class="step-number">1</div>
                            <h3 class="step-title">Masukkan User ID</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="input-field" placeholder="Masukkan User ID" id="userId">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="input-field" placeholder="Masukkan Server ID" id="serverId">
                            </div>
                        </div>
                        <small class="text-gray-400">
                            Untuk mengetahui User ID Anda, silahkan klik pada avatar profile Anda dan User ID akan
                            terlihat dibagian bawah Nama Karakter Anda. Silahkan masukkan User ID Anda.
                        </small>
                    </div>

                    <!-- Step 2: Choose Top-up Amount -->
                    <div class="step-card">
                        <div class="step-header">
                            <div class="step-number">2</div>
                            <h3 class="step-title">Pilih Nominal Top Up</h3>
                        </div>

                        <!-- Step 2: Choose Top-up Amount -->


                        <!-- Weekly Diamond Pass -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Weekly Diamond Pass</label>
                            <div class="d-flex flex-wrap gap-3">

                                <!-- Card WDP -->
                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class="text-center px-3 py-2 fw-semibold">
                                        Weekly Diamond Pass ID
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/WDP.png" alt="WDP" width="50">
                                            <div class="text-primary fw-bold">Rp 26.400</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height: 100%; min-height: 32PX;">
                                    </div>
                                </div>
                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class="text-center px-3 py-2 fw-semibold">
                                        2x Weekly Diamond Pass ID
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/WDP.png" alt="WDP" width="50">
                                            <div class="text-primary fw-bold">Rp 52.800</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height: 100%; min-height: 32PX;">
                                    </div>
                                </div>
                                <!-- Card WDP 2x -->
                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class="text-center px-3 py-2 fw-semibold">
                                        3x Weekly Diamond Pass ID
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/WDP.png" alt="WDP" width="50">
                                            <div class="text-primary fw-bold">Rp 79.200</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height: 100%; min-height: 32PX;">
                                    </div>
                                </div>
                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class="text-center px-3 py-2 fw-semibold">
                                        4x Weekly Diamond Pass ID
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/WDP.png" alt="WDP" width="50">
                                            <div class="text-primary fw-bold">Rp 105.600</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height: 100%; min-height: 32PX;">
                                    </div>
                                </div>
                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class="text-center px-3 py-2 fw-semibold">
                                        5x Weekly Diamond Pass ID
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/WDP.png" alt="WDP" width="50">
                                            <div class="text-primary fw-bold">Rp 132.000</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height: 100%; min-height: 32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        Twilight Pass ID
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="assets/twili.jpg" alt="WDP" width="48 ">
                                            <div class="text-primary fw-bold">Rp 147.328</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height: 100%; min-height: 32PX;">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Diamond Packages -->
                        <div class="mb-3">
                            <label class="form-label fw-bold">Diamonds</label>
                            <div class="d-flex flex-wrap gap-3">

                                <!-- Card Diamond -->
                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        5 (5+0) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.477</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        10 (9+1) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 2.994</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        12 (11+1) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 3.444</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        14 (13+1) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 3.991</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        15 (15+0) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 4.430</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        17 (16+1) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 4.589</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        18 (17+1) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 4.989</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        19 (17+2) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 5.412</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        20 (18+2) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 5.987</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        22 (20+2) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 6.437</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        28 (25+3) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 7.873</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        30 (28+2) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 8.432</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        33 (30+3) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 9.100</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        35 (31+4) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 9.500</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        36 (33+3) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 9.976</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        42 (38+4) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 11.000</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        44 (40+4) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 11.810</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        45 (42+3) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 12.902</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        50 (46+4) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 13.768</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        54 (49+5) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 14.803</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        59 (53+6) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 15.904</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        64 (58+6) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 17.396</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        67 (62+5) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 18.459</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        71 (64+7) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 19.383</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        74 (67+7) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 20.154</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        78 (70+8) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 21.370</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        80 (73+7) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 22.006</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        89 (81+8) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 24.422</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        92 (84+8) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 25.192</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        98 (89+9) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 27.111</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        100 (91+9) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 27.376</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        110 (100+10) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 30.320</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        129 (117+12) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 34.791</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        148 (134+14) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 39.902</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        170 (154+16) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 45.264</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        184 (167+17) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 51.557</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        284 (257+27) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 75.635</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        305 (276+29) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 82.797</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        370 (333+37) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 99.753</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        384 (346+38) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 103.744</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        408 (367+41) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 108.014</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        518 (467+51) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 139.655</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        568 (503+65) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 148.824</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        716 (637+79) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 189.131</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        750 (676+74) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 198.026</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        790 (703+87) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 209.284</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        875 (774+101) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 228.115</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        966 (836+130) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 251.914</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        1048 (936+112) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 279.820</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        1136 (1006+130) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 297.648</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        1358 (1206+152) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 358.108</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        1506 (1339+167) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 398.414</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        1704 (1509+195) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 446.472</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        2010 (1708+302) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 495.898</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        2380 (2041+339) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 596.664</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        2855 (2461+394) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 720.297</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        3423 (2964+459) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 869.121</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        4020 (3416+604) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 991.796</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        4830 (4003+827) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.190.045</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        5052 (4203+849) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.250.505</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        6030 (5124+906) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.487.694</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        6840 (5711+1129) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.685.943</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        7210 (6044+1166) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.786.709</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        7685 (6464+1221) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.910.342</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        8040 (6832+1208) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 1.983.592</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>

                                <div class="card" style="min-width:237px; border-radius:12px; overflow:hidden;">
                                    <div class=" px-3 py-2 fw-semibold">
                                        8850 (7419+1431) Diamonds
                                        <div class="d-flex align-items-center gap-2 pt-2">
                                            <img src="assets/Diamond.png" alt="diamond" width="32">
                                            <div class="text-primary fw-bold">Rp 2.181.841</div>
                                        </div>
                                    </div>
                                    <div class="text-center p-1"
                                        style="background:#C2D4DE; width:100%; display:block; height:100%; min-height:32PX;">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Step 3: Purchase Quantity -->
                        <div class="step-card">
                            <div class="step-header">
                                <div class="step-number">3</div>
                                <h3 class="step-title">Masukkan Jumlah Pembelian</h3>
                            </div>
                            <div class="quantity-control">
                                <input type="number" class="quantity-input" value="1" min="1" id="quantity">
                                <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                                <button class="quantity-btn" onclick="decreaseQuantity()">-</button>


                            </div>
                        </div>

                        <!-- Step 4: Payment Method -->
                        <div class="step-card">
                            <div class="step-header">
                                <div class="step-number">4</div>
                                <h3 class="step-title">Pilih Pembayaran</h3>
                            </div>
                            <div class="payment-grid">
                                <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="asset/payment dana jfif" alt="">
                                    </div>
                                    <div class="small">Dana</div>
                                </div>
                                <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Gopay.png" alt="">
                                    </div>
                                    <div class="small">Gopay</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="asset/telkomsel" alt="">
                                    </div>
                                    <div class="small">Qris</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Bank.png" alt="">
                                    </div>
                                    <div class="small">Bank Tranfer</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Shoppe.png" alt="">
                                    </div>
                                    <div class="small">Shopee Pay</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Ovo.png" alt="">
                                    </div>
                                    <div class="small">Ovo</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Kredivo.png" alt="">
                                    </div>
                                    <div class="small">Kredivo</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Cardpayment.png" alt="">
                                    </div>
                                    <div class="small">Kartu Kredit</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Indomaret.png" alt="">
                                    </div>
                                    <div class="small">Indomaret</div>
                                </div>
                              
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="asset/payment alfa.png" alt="">
                                    </div>
                                    <div class="small">Alfamart</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Telkomsel.png" alt="">
                                    </div>
                                    <div class="small">Telkomsel</div>
                                </div>
                                 <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/Indosat.png" alt="">
                                    </div>
                                    <div class="small">Indosat</div>
                                </div>
                                <div class="payment-item">
                                    <div class="payment-icon">
                                        <img src="assets/LinkAja.png" alt="">
                                    </div>
                                    <div class="small">LinkAja</div>
                                </div>
                                
                            </div>
                        </div>

                        <!-- Step 5: Game Description -->
                        <div class="step-card">
                            <div class="step-header">
                                <div class="step-number">5</div>
                                <h3 class="step-title">Deskripsi mobile legends</h3>
                            </div>
                            <div class="small text-gray-400">
                                <p>Top Up Diamond Mobile Legends lewat MoKwon 100% Legal Tidak Satang sih tuh, Online
                                    Capek
                                    dan sangat mudah banget karena Ga pake ribet. Termasuk Itu untuk game android Mobile
                                    Legend Bang Bang.</p>
                                <p><strong>Cara Top Up Mobile Legends:</strong></p>
                                <ol class="mb-3">
                                    <li>1) Masukkan ID dan Server</li>
                                    <li>2) Pilih Nominal Top Up</li>
                                    <li>3) Masukkan Jumlah Order</li>
                                    <li>4) Pilih Pembayaran</li>
                                    <li>5) Masukkan no WhatsApp (Dengan Benar)</li>
                                    <li>6) Klik Order Now & lakukan Pembayaran</li>
                                    <li>7) Diamonds otomatis masuk ke Akun Game Kamu</li>
                                </ol>
                            </div>
                        </div>

                        <!-- Process Button -->
                        <div class="text-center mt-4">
                            <button class="btn-process">
                                <i class="fas fa-lock me-2"></i>
                                Pesan Sekarang!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
    </main>