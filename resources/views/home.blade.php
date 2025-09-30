@extends('template.app')

@section('content')

    <!-- Hero Section -->
    <div class="container mt-5">
        <div class="row align-items-center">
            <!-- Kolom kiri (teks) -->
            <div class="col-md-6" data-aos="fade-right">
                <h1 class="fw-bold mb-2" style="color: #0C344B; font-size: 2.8rem;">
                    FinTrack <span style="color: #00C896">App</span>
                </h1>

                <p class="lead fw-semibold" style="color: #1a4c65;">
                    Your Smart Financial Companion
                    <i class="fa-solid fa-credit-card ms-1"></i>
                </p>

                <p style="color: #3d596d; font-size: 1rem; line-height: 1.6;">
                    Kelola keuangan Anda dengan mudah, cepat, dan aman menggunakan 
                    <span style="color: #00C896; font-weight:600;">FinTrack App</span>.  
                    Cocok untuk mencatat pemasukan, pengeluaran, dan memantau arus kas pribadi maupun bisnis Anda dalam satu aplikasi.
                </p>

                <div class="mt-4">
                    <button type="button" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold"
                        style="background:#00C896; border:none; color:#fff; transition: all 0.3s;"
                        onmouseover="this.style.transform='scale(1.1)';this.style.boxShadow='0 8px 20px rgba(0,200,150,0.4)';"
                        onmouseout="this.style.transform='scale(1)';this.style.boxShadow='none';">
                        Info Lainnya
                    </button>
                </div>
            </div>

            <!-- Kolom kanan (gambar) -->
            <div class="col-md-6 text-center mt-4 mt-md-0" data-aos="fade-left">
                <img src="{{ asset('image/org.png') }}" alt="FinTrack App Logo" 
                     class="img-fluid floating" style="max-width: 380px;" loading="lazy" />
            </div>
        </div>
    </div>

    <!-- Section Ringkasan Saldo & Transaksi Bulan Berjalan -->
    <div class="container mt-5">
        <h2 class="fw-bold text-center mb-4" style="color:#0C344B; font-size: 2rem;" data-aos="fade-up">
            Dashboard Keuangan Anda
        </h2>
        
        <div class="row g-4 mb-5">
            <!-- Card Saldo -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card shadow-sm rounded-4 border-0 h-100" style="background: linear-gradient(135deg, #00C896 0%, #00a077 100%);">
                    <div class="card-body p-4 text-white">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="mb-2 opacity-75">Saldo Tersedia</p>
                                <h3 class="fw-bold mb-0">Rp 5.250.000</h3>
                            </div>
                            <i class="fa-solid fa-wallet fa-2x opacity-50"></i>
                        </div>
                        <div class="mt-3 pt-3" style="border-top: 1px solid rgba(255,255,255,0.2);">
                            <small class="opacity-75">Update terakhir: Hari ini</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Total Pemasukan Bulan Ini -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card shadow-sm rounded-4 border-0 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="mb-2 text-muted">Pemasukan Bulan Ini</p>
                                <h3 class="fw-bold mb-0" style="color: #00C896;">Rp 8.500.000</h3>
                            </div>
                            <div class="rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 50px; height: 50px; background: rgba(0,200,150,0.1);">
                                <i class="fa-solid fa-arrow-trend-up fa-lg" style="color: #00C896;"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <small class="text-success">
                                <i class="fa-solid fa-arrow-up"></i> 15% dari bulan lalu
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Total Pengeluaran Bulan Ini -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card shadow-sm rounded-4 border-0 h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <p class="mb-2 text-muted">Pengeluaran Bulan Ini</p>
                                <h3 class="fw-bold mb-0" style="color: #FF6B6B;">Rp 3.250.000</h3>
                            </div>
                            <div class="rounded-circle d-flex align-items-center justify-content-center" 
                                 style="width: 50px; height: 50px; background: rgba(255,107,107,0.1);">
                                <i class="fa-solid fa-arrow-trend-down fa-lg" style="color: #FF6B6B;"></i>
                            </div>
                        </div>
                        <div class="mt-3">
                            <small class="text-danger">
                                <i class="fa-solid fa-arrow-down"></i> 8% dari bulan lalu
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik Pemasukan & Pengeluaran -->
        <div class="row g-4">
            <div class="col-lg-8" data-aos="fade-right">
                <div class="card shadow-sm rounded-4 border-0">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4" style="color:#0C344B;">
                            <i class="fa-solid fa-chart-line me-2" style="color:#00C896;"></i>
                            Grafik Pemasukan & Pengeluaran
                        </h5>
                        <canvas id="incomeExpenseChart" style="max-height: 300px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Total Transaksi Bulan Berjalan -->
            <div class="col-lg-4" data-aos="fade-left">
                <div class="card shadow-sm rounded-4 border-0 h-100">
                    <div class="card-body p-4">
                        <h5 class="fw-bold mb-4" style="color:#0C344B;">
                            <i class="fa-solid fa-receipt me-2" style="color:#00C896;"></i>
                            Transaksi Bulan Ini
                        </h5>
                        
                        <div class="text-center mb-4">
                            <h2 class="fw-bold mb-0" style="color:#00C896; font-size: 3rem;">42</h2>
                            <p class="text-muted mb-0">Total Transaksi</p>
                        </div>

                        <div class="mt-4">
                            <div class="d-flex justify-content-between align-items-center mb-3 p-3 rounded-3" 
                                 style="background: rgba(0,200,150,0.1);">
                                <div>
                                    <i class="fa-solid fa-circle-plus me-2" style="color:#00C896;"></i>
                                    <span class="fw-semibold">Pemasukan</span>
                                </div>
                                <span class="badge rounded-pill px-3 py-2" style="background:#00C896;">28</span>
                            </div>

                            <div class="d-flex justify-content-between align-items-center p-3 rounded-3" 
                                 style="background: rgba(255,107,107,0.1);">
                                <div>
                                    <i class="fa-solid fa-circle-minus me-2" style="color:#FF6B6B;"></i>
                                    <span class="fw-semibold">Pengeluaran</span>
                                </div>
                                <span class="badge rounded-pill px-3 py-2" style="background:#FF6B6B;">14</span>
                            </div>
                        </div>

                        <div class="mt-4 pt-3" style="border-top: 1px solid #e9ecef;">
                            <small class="text-muted">
                                <i class="fa-solid fa-calendar-days me-1"></i>
                                Periode: 1 - 30 September 2025
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Fitur -->
    <div class="container mt-5 text-center">
        <h2 class="fw-bold" style="color:#0C344B; font-size: 2rem;" data-aos="fade-up">Kenapa Memilih FinTrack?</h2>
        <p class="text-muted mb-4" data-aos="fade-up" data-aos-delay="100">Solusi keuangan sederhana dengan fitur lengkap.</p>

        <div class="row g-4">
            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="p-4 h-100 shadow-sm rounded-4 bg-white hover-card">
                    <i class="fa-solid fa-plus-circle fa-2x mb-3" style="color:#00C896;"></i>
                    <h5 class="fw-semibold" style="color:#0C344B;">Pencatatan Mudah</h5>
                    <p class="text-muted">Catat pemasukan dan pengeluaran harian hanya dengan beberapa klik cepat.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="p-4 h-100 shadow-sm rounded-4 bg-white hover-card">
                    <i class="fa-solid fa-chart-line fa-2x mb-3" style="color:#00C896;"></i>
                    <h5 class="fw-semibold" style="color:#0C344B;">Laporan Interaktif</h5>
                    <p class="text-muted">Dapatkan ringkasan keuangan dengan grafik visual yang mudah dipahami.</p>
                </div>
            </div>

            <div class="col-md-4" data-aos="zoom-in" data-aos-delay="300">
                <div class="p-4 h-100 shadow-sm rounded-4 bg-white hover-card">
                    <i class="fa-solid fa-lock fa-2x mb-3" style="color:#00C896;"></i>
                    <h5 class="fw-semibold" style="color:#0C344B;">Keamanan Data</h5>
                    <p class="text-muted">Data Anda tersimpan dengan enkripsi yang aman dan terpercaya.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Counter -->
    <div class="container mt-5 mb-5 text-center">
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up">
                <h2 class="counter fw-bold" style="color:#00C896;">500+</h2>
                <p class="text-muted">Pengguna Aktif</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <h2 class="counter fw-bold" style="color:#00C896;">1200+</h2>
                <p class="text-muted">Transaksi Tercatat</p>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <h2 class="counter fw-bold" style="color:#00C896;">95%</h2>
                <p class="text-muted">Tingkat Kepuasan</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white shadow-sm mt-5 py-4">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="mb-2 mb-md-0">
                {{-- <img src="{{ asset('image/logo.png') }}" alt="FinTrack Logo" style="height:32px;vertical-align:middle;" class="me-2"> --}}
                <span class="fw-bold" style="color:#0C344B;">FinTrack App</span>
            </div>
            <div class="text-muted small">
                &copy; 2024 FinTrack App. All rights reserved.
            </div>
            <div>
                <a href="#" class="text-decoration-none me-3" style="color:#00C896;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="text-decoration-none me-3" style="color:#00C896;">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="text-decoration-none" style="color:#00C896;">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </footer>

    <!-- Custom Style -->
    <style>
        .hover-card {
            transition: all 0.3s ease-in-out;
        }
        .hover-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 200, 150, 0.25);
        }
        /* Floating image effect */
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        @keyframes floating {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }
    </style>

    <!-- AOS (Animate On Scroll) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init();

        // Chart Configuration
        const ctx = document.getElementById('incomeExpenseChart');
        const incomeExpenseChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep'],
                datasets: [{
                    label: 'Pemasukan',
                    data: [6500000, 7200000, 6800000, 7500000, 8000000, 7800000, 8200000, 8100000, 8500000],
                    borderColor: '#00C896',
                    backgroundColor: 'rgba(0, 200, 150, 0.1)',
                    tension: 0.4,
                    fill: true,
                    borderWidth: 3
                }, {
                    label: 'Pengeluaran',
                    data: [4200000, 4500000, 3800000, 4100000, 3900000, 4000000, 3500000, 3400000, 3250000],
                    borderColor: '#FF6B6B',
                    backgroundColor: 'rgba(255, 107, 107, 0.1)',
                    tension: 0.4,
                    fill: true,
                    borderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 15,
                            font: {
                                size: 12,
                                weight: '600'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        titleFont: {
                            size: 14,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 13
                        },
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                label += 'Rp ' + context.parsed.y.toLocaleString('id-ID');
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + (value / 1000000) + 'jt';
                            },
                            font: {
                                size: 11
                            }
                        },
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)'
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: 11
                            }
                        }
                    }
                }
            }
        });
    </script>

@endsection