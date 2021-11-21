<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="http://localhost/OOP/Tubes/home/"></a>Home</li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">

                    <!-- Anggota Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Anggota <span>| Member</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-emoji-smile"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>20</h6>
                                        <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Anggota atau Member</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Anggota Card -->

                    <!-- Buku Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Buku</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-book"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>10</h6>
                                        <span class="text-success small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Buku</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Buku Card -->

                    <!-- Petugas Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Petugas <span>| Admin</span></h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>10</h6>
                                        <span class="text-danger small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Petugas atau Admin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Petugas Card -->

                    <!-- Transaksi Card -->
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Transaksi</h5>
                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>5</h6>
                                        <span class="text-danger small pt-1 fw-bold">Jumlah</span> <span class="text-muted small pt-2 ps-1">Transaksi</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Transaksi Card -->

                    <!-- Reports -->
                    <div class="col-12">
                        <div class="card">
                            <div class="filter">
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Laporan Transaksi<span>/Bulan</span></h5>

                                <!-- Line Chart -->
                                <div id="reportsChart"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded", () => {
                                        new ApexCharts(document.querySelector("#reportsChart"), {
                                            series: [{
                                                name: 'Buku yang tersedia',
                                                data: [31, 40, 68, 51, 42, 82, 56],
                                            }, {
                                                name: 'Pengembalian Buku',
                                                data: [11, 32, 45, 32, 34, 52, 41]
                                            }, {
                                                name: 'Peminjaman Buku',
                                                data: [15, 11, 32, 18, 9, 24, 11]
                                            }],
                                            chart: {
                                                height: 350,
                                                type: 'area',
                                                toolbar: {
                                                    show: false
                                                },
                                            },
                                            markers: {
                                                size: 4
                                            },
                                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                                            fill: {
                                                type: "gradient",
                                                gradient: {
                                                    shadeIntensity: 1,
                                                    opacityFrom: 0.3,
                                                    opacityTo: 0.4,
                                                    stops: [0, 90, 100]
                                                }
                                            },
                                            dataLabels: {
                                                enabled: false
                                            },
                                            stroke: {
                                                curve: 'smooth',
                                                width: 2
                                            },
                                            xaxis: {
                                                type: 'datetime',
                                                categories: ["2021-11-21", "2021-10-21", "2021-09-21", "2021-08-21", "2021-07-21", "2021-06-21", "2021-05-21"]
                                            },
                                            tooltip: {
                                                x: {
                                                    format: 'dd/MM/yy'
                                                },
                                            }
                                        }).render();
                                    });
                                </script>
                                <!-- End Line Chart -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right side columns -->
            <div class="col-lg-4">
                <div class="card">
                    <div class="filter">
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Transaksi <span>| Terkini</span></h5>
                        <div class="activity">
                            <div class="activity-item d-flex">
                                <div class="activite-label">Jumlah 3 Buku</div>
                                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                                <div class="activity-content">
                                    Peminjaman Buku
                                </div>
                            </div><!-- End activity item-->

                            <div class="activity-item d-flex">
                                <div class="activite-label">Jumlah 2 Buku</div>
                                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                                <div class="activity-content">
                                    Pengembalian Buku
                                </div>
                            </div><!-- End activity item-->
                        </div>
                    </div>
                </div><!-- End Recent Activity -->

                <!-- diagram jumlah -->
                <div class="card">
                    <div class="filter">
                    </div>

                    <div class="card-body pb-0">
                        <h5 class="card-title">Diagram Jumlah Keseluruhan <span>| Terkini</span></h5>

                        <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                echarts.init(document.querySelector("#trafficChart")).setOption({
                                    tooltip: {
                                        trigger: 'item'
                                    },
                                    legend: {
                                        top: '5%',
                                        left: 'center'
                                    },
                                    series: [{
                                        name: 'Access From',
                                        type: 'pie',
                                        radius: ['40%', '70%'],
                                        avoidLabelOverlap: false,
                                        label: {
                                            show: false,
                                            position: 'center'
                                        },
                                        emphasis: {
                                            label: {
                                                show: true,
                                                fontSize: '18',
                                                fontWeight: 'bold'
                                            }
                                        },
                                        labelLine: {
                                            show: false
                                        },
                                        data: [{
                                                value: 20,
                                                name: 'Anggota/Member'
                                            },
                                            {
                                                value: 10,
                                                name: 'Petugas/Admin'
                                            },
                                            {
                                                value: 10,
                                                name: 'Buku'
                                            },
                                            {
                                                value: 3,
                                                name: 'Peminjaman'
                                            },
                                            {
                                                value: 2,
                                                name: 'Pengembalian'
                                            }
                                        ]
                                    }]
                                });
                            });
                        </script>

                    </div>
                </div><!-- End diagram jumlah -->

            </div><!-- End Right side columns -->

        </div>
    </section>

</main><!-- End #main -->