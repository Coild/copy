<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Daftar Akun</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/vendors/linericon/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/endors/nice-select/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/vendors/animate-css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/vendors/jquery-ui/jquery-ui.css') ?>">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/home/css/responsive.css') ?>">
    <link rel="icon" href="<?php echo base_url('assets/home/img/logo.png') ?>">

</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">

        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php">
                        <img src="<?php echo base_url('assets/home/img/Etiket logo.png') ?>" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <div class="row ml-0 w-100">
                            <div class="col-lg-12 pr-0">
                                <ul class="nav navbar-nav center_nav pull-right">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo base_url('Welcome'); ?>">HOME</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('Welcome/Kontak'); ?>">CONTACT</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('Login'); ?>">LOGIN</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo base_url('Welcome/Daftarakun'); ?>">REGISTER</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->



    <form class="user" action="<?php echo base_url() . 'Admin/input'; ?>" method="post">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Status<font color="red">*</font></label>
            <div class="col-sm-10">

            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIM<font color="red">**</font></label>
            <div class="col-sm-10">
                <input type="text" name="nim" placeholder="Nomor Identitas" size="4" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIM<font color="red">**</font></label>
            <div class="col-sm-10">
                <input type="text" name="nim" placeholder="Nomor Identitas" size="4" class="form-control" required>
            </div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" name="nama" placeholder="Nama Lengkap" size="4" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" value="L" required>
                    <label class="form-check-label">LAKI-LAKI</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="gender" value="P" required>
                    <label class="form-check-label">PEREMPUAN</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" size="4" class="form-control" required>
            </div>
            <div class="col-sm-6">
                <input type="date" name="tanggal_lahir" size="4" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor HP</label>
            <div class="col-sm-10">
                <input type="text" name="no_hp" placeholder="Nomor Handphone" size="4" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" name="alamat" placeholder="Alamat" size="4" class="form-control" required></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <select class="form-control" id="akses" name="prodi">
                    <option value="IESP" name="prodi">IESP</option>
                    <option value="Manajemen" name="prodi">Manajemen</option>
                    <option value="Akuntansi" name="prodi">Akuntansi</option>
                </select>
            </div>

        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" placeholder="email" size="4" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" name="password" placeholder="Password" size="4" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">&nbsp;</label>
            <div class="col-sm-10">
                <input type="submit" name="daftar" class="btn btn-primary" value="SIMPAN">
                <a class="btn btn-danger" onclick="goBack()">
                    <font color="white">Kembali</font>
                </a>
            </div>
        </div>
    </form>

    <!-- Footer -->
    <footer class="footer-area section_bar">
        <div class="container">
            <div class="copyright text-center">
                <span>Copyright &copy; 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/home/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/home/js/popper.js') ?>"></script>
    <script src="<?php echo base_url('assets/home/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/home/vendors/nice-select/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/home/js/jquery.ajaxchimp.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url('assets/home/js/mail-script.js') ?>"></script>
    <script src="<?php echo base_url('assets/home/js/custom.js') ?>"></script>
</body>

</html>