<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data User</h1>
</div>

<?php foreach ($user as $data) { ?>
    <form action="<?php echo base_url('Master/update'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="nim" value="<?php echo $data->nim; ?>">
        <input type="hidden" name="status" value="<?php echo $data->status; ?>">

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">NIM<</label>
            <div class="col-sm-10">
                <input type="text" name="no_identitas" placeholder="Nomor Identitas" value="<?php echo $data->nim; ?>" class="form-control" size="4" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $data->nama; ?>" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jk" value="L" <?php if ($data->gender == 'L') {
                                                                                            echo 'checked';
                                                                                        } ?> required>
                    <label class="form-check-label">LAKI-LAKI</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="jk" value="P" <?php if ($data->gender == 'P') {
                                                                                            echo 'checked';
                                                                                        } ?> required>
                    <label class="form-check-label">PEREMPUAN</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tempat, Tanggal Lahir</label>
            <div class="col-sm-4">
                <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $data->tmp_lahir; ?>" class="form-control" required>
            </div>
            <div class="col-sm-6">
                <input type="date" name="tanggal_lahir" value="<?php echo $data->tgl_lahir; ?>" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nomor Handphone</label>
            <div class="col-sm-10">
                <input type="text" name="no_hp" placeholder="Nomor Handphone" value="<?php echo $data->no_hp; ?>" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea type="text" name="alamat" class="form-control" required><?php echo $data->alamat; ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Program Studi</label>
            <div class="col-sm-10">
                <input type="text" name="prodi" placeholder="Pekerjaan" value="<?php echo $data->prodi; ?>" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" name="email" placeholder="Email@antik.com" value="<?php echo $data->email; ?>" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" name="password" placeholder="Password" value="<?php echo $data->password; ?>" class="form-control" required>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label">&nbsp;</label>
            <div class="col-sm-10">
                <input type="submit" class="btn btn-primary" name="editp" value="SIMPAN">
                <a class="btn btn-danger" onclick="goBack()">
                    <font color="white">Kembali</font>
                </a>
            </div>
        </div>
    <?php } ?>
    </form>