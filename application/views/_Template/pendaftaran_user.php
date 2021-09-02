<center>
<div class="col-9">
    <center>
        <h1 style="margin-top: 120px"> Pendaftaran User </h1>
    </center>
    <br><br>
<form class="user" action="<?php echo base_url() . 'Admin/input'; ?>" method="post">
    <div class="form-group row" style="display:none">
        <label class="col-sm-2 col-form-label">Status<font color="red">*</font></label>
        <div class="col-sm-10">
            <select class="form-control" id="akses" name="status">
                <option value=2>Staff</option>
            </select>
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
<hr>
</div>
</center>