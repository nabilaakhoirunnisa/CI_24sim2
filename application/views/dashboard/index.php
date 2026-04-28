<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>

<div class="row">
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Kategori</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_kategori; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tags fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Anggota</div>
                        <div class="h3 mb-0 font-weight-bold text-gray-800"><?= $total_anggota; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col-xl-6 col-lg-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Grafik Pertumbuhan Data</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="chartDashboard" style="max-height: 250px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
</div>