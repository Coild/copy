<div class="card shadow mb-4"> 
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Antrian IESP</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Perihal</th>
                      <th>Status Ambil</th>
                      <th>Tindakan</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Perihal</th>
                      <th>Status Ambil</th>
                      <th>Tindakan</th>
                    </tr>
                  </tfoot>
          <tbody>

          <?php

          if (!empty($antrian) or !is_null($antrian)) {
            foreach ($antrian as $data) {
          ?>
              <tr>
                <td><?php echo $data->no_antri; ?></td>
                <td><?php echo $data->tanggal; ?></td>
                <td><?php echo $data->nim; ?></td>
                <td><?php echo $data->anama; ?></td>
                <td><?php echo $data->hal; ?></td>
                <td><?php if ($data->status == 0) {
                      echo "Belum";
                    } else {
                      echo "Konfirmasi";
                    } ?></td>
                <td>
                <?php if ($data->status == 0) {?>
                    <a href="<?php echo base_url('Admin/confirm/' . $data->nim.'/'.$data->hal) ?>" class="btn btn-success">Konfirmasi</a>
                    <button type="button" class="btn btn-secondary" onclick="return confirm('Apakah anda yakin?')" class="btn btn-circle btn-secondary" disabled><i class="fa fa-trash"></i></button>
                    <?php }else {?>
                      <button type="button" class="btn btn-secondary" disabled>Konfirmasi</button>
                      <a href="<?php echo base_url('Admin/riwayat/' . $data->nim.'/'.$data->hal) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                    <?php } ?>
                    
                </td>
              </tr>
          <?php
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- /.container-fluid -->