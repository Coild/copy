<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Riwayat</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal ambil</th>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Perihal</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($riwayat as $data) {
                    ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo date("d-m-Y", strtotime($data->tanggal)); ?></td>
                            <td><?php echo $data->nim  ?></td>
                            <td><?php echo $data->anama; ?></td>
                            <td><?php echo $data->hal; ?></td>
                        </tr>
                    <?php $no++;
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>