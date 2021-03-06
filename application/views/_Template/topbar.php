<?php
$getUser = $this->session->userdata('nim');
$getAkses = $this->session->userdata('status');
$getFoto = $this->session->userdata('foto');
$getNama = $this->session->userdata('nama');
?>
<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <?php echo $this->session->flashdata('pesan'); ?>
    <li class="nav-item no-arrow">
      <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php if ($getAkses == 1) {
                                                                      echo "Admin";
                                                                    } else if ($getAkses == 2) {
                                                                      echo "Mahasiswa";
                                                                    } ?></span>
      </a>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 medium"><?php echo $getNama; ?></span>
        <img class="img-profile rounded-circle" src="<?php if ($getFoto == NULL) {
                                                        echo base_url('assets/img/none.png');
                                                      } else {
                                                        echo base_url('assets/img/') . $getFoto;
                                                      } ?>">
      </a>
      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="<?php echo base_url('Akses/Profil') ?>">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profil
        </a>
        <a class="dropdown-item" href="<?php echo base_url('Akses/gantiPassword'); ?>">
          <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
          Ganti Password
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->