<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">Jumlah Pengguna IESP</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $antriIesp['total_iesp']; ?></div>
                    </div>
                    <!--<div class="col-auto">
                        <i class="fas fa-user-md fa-2x text-gray-300"></i>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">Jumlah Pengguna Manajemen</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $antriMana['total_mana']; ?></div>
                    </div>
                    <!--<div class="col-auto">
                        <i class="fas fa-stethoscope fa-2x text-gray-300"></i>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-success text-uppercase mb-1">Jumlah Pengguna Akuntansi</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $antriAkun['total_akun']; ?></div>
                    </div>
                    <!--<div class="col-auto">
                        <i class="fas fa-tooth fa-2x text-gray-300"></i>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <!-- <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-sm font-weight-bold text-danger text-uppercase mb-1">No. Antrian Anda</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahAGigi['total_gigi']; ?></div>
                    </div>
                    <div class="col-auto">
                        <i class="far fa-calendar fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


</div> <br>
<!-- Content Row -->