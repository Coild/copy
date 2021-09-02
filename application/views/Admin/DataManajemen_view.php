<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Tindakan</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat, Tanggal Lahir</th>
                        <th>No. HP</th>
                        <th>Alamat</th>
                        <th>Tindakan</th>

                    </tr>
                </tfoot>

                <tbody>
                    <?php
                    foreach ($apoteker as $data) {
                    ?>
                        <tr>
                            <td><?php echo $data->nim; ?></td>
                            <td><?php echo $data->nama; ?></td>
                            <td><img src="<?php if ($data->foto == NULL) {
                                                echo base_url('assets/img/noimage.png');
                                            } else {
                                                echo base_url('assets/img/') . $data->foto;
                                            } ?>" width="80" height="80"></td>
                            <td><?php if ($data->gender == 'L') {
                                    echo "Laki-laki";
                                } else {
                                    echo "Perempuan";
                                }; ?></td>
                            <td><?php echo $data->tmp_lahir; ?>, <?php echo date("d-m-Y", strtotime($data->tgl_lahir)); ?></td>
                            <td><?php echo $data->no_hp; ?></td>
                            <td><?php echo $data->alamat; ?></td>
                            <td>
                                <a href="<?php echo base_url('Master/index/' . $data->nim) ?>" class="btn btn-circle btn-success"><i class="far fa-eye"></i></a>
                                <a href="<?php echo base_url('Master/edit/' . $data->nim) ?>" class="btn btn-circle btn-warning"><i class="fas fa-edit"></i></a>
                                <a href="<?php echo base_url('Master/hapusMana/' . $data->nim) ?>" onclick="return confirm('Apakah anda yakin?')" class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>