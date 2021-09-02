<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Antrian</h1>
</div>

<div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4 bg-primary">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <table id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <H1>
                                        <font color="white">KHS</font>
                                    </H1>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <h2>
                                        <font color="white">A - <?php if (!empty($khs)) {
                                                                    echo $khs['no_antri'];
                                                                } ?></font>
                                    </h2>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <h5>
                                        <font color="white">Jumlah Antrian : <?= $antrikhs['akhs']; ?></font>
                                    </h5>
                                </td>
                                <td>&nbsp;</td>
                            </tr>




                            <?php if (!empty($khs)) {
                            if ($khs['status']==0) {
                                
                                echo '<tr><td> <br> </td></tr> <tr>
                                <td>&nbsp;</td>
                                <td align="center" class="bg-warning ";>
                                    <h5  style="margin-top: 10px; width:80%">
                                        <font   color="white">Menunggu Konfirmasi</font>
                                    </h5>
                                </td>
                                <td>&nbsp;</td>
                            </tr>';
                            } else { echo '<tr><td> <br> </td></tr> <tr>
                                <td>&nbsp;</td>
                                
                                    <td><a href="'.site_url().'Pasien/cetakKhs" class="btn btn btn-success" name="ambil2" style="width: 100%" value="submit">Cetak Nomor Antrian</a>
                                    </td>
                                
                                <td>&nbsp;</td>
                            </tr>';
                            } 
                            }?>
                        




                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>
                            <?php if (empty($khs)) { ?>
                            <tr>
                                <td>&nbsp;</td>
                                <td><a href="<?php echo site_url() . 'Pasien/ambilKHS' ?>" class="btn btn btn-danger" name="ambil" style="width: 100%" value="submit">Ambil Antrian Anda</a></td>
                                <td>&nbsp;</td>
                                <?php } ?>
                            </tr>
                        
                        
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                           <!--  <tr>
                                <td colspan="3">
                                    <font color="white"><i>*Antrian selesai diperiksa :</i> A - <?= $selesaiUmum['sUmum']; ?></font>
                                </td>
                            </tr> -->
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4 bg-primary">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <table id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <H1>
                                        <font color="white">SKL</font>
                                    </H1>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <h2>
                                        <font color="white">B - <?php if (!empty($skl)) {
                                                                    echo  $skl['no_antri'];
                                                                } ?></font>
                                    </h2>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <h5>
                                        <font color="white">Jumlah Antrian : <?= $antriskl['askl']; ?></font>
                                    </h5>
                                </td>
                                <td>&nbsp;</td>
                            </tr>

                            <?php if (!empty($skl)) {
                            if ($skl['status']==0) {
                                
                                echo '<tr><td> <br> </td></tr> <tr>
                                <td>&nbsp;</td>
                                <td align="center" class="bg-warning ";>
                                    <h5  style="margin-top: 10px; width:80%">
                                        <font   color="white">Menunggu Konfirmasi</font>
                                    </h5>
                                </td>
                                <td>&nbsp;</td>
                            </tr>';
                            } else { echo '<tr><td> <br> </td></tr> <tr>
                                <td>&nbsp;</td>
                                
                                    <td><a href="'.site_url().'Pasien/cetakSKL" class="btn btn btn-success" name="ambil2" style="width: 100%" value="submit">Cetak Nomor Antrian</a>
                                    </td>
                                
                                <td>&nbsp;</td>
                            </tr>';
                            } 
                            }?>
                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>
                            <?php if (empty($skl)) { ?>
                            <tr>
                                <td>&nbsp;</td>
                                <td><a href="<?php echo site_url() . 'Pasien/ambilSKL' ?>" class="btn btn btn-danger" name="ambil2" style="width: 100%" value="submit">Ambil Antrian Anda</a></td>
                                <td>&nbsp;</td>
                            </tr>
                        <?php }?>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <!-- <tr>
                                <td colspan="3">
                                    <font color="white"><i>*Antrian selesai diperiksa :</i> B - <?= $selesaiGigi['sGigi']; ?></font>
                                </td>
                            </tr> -->
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- lol -->
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-4">
        <div class="card shadow mb-4 bg-primary">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group row">
                        <table id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <H1>
                                        <font color="white">Transkrip</font>
                                    </H1>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <h2>
                                        <font color="white">C - <?php if (!empty($trans)) {
                                                                    echo $trans['no_antri'];
                                                                } ?></font>
                                    </h2>
                                </td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td align="center">
                                    <h5>
                                        <font color="white">Jumlah Antrian : <?= $antritrans['atrans']; ?></font>
                                    </h5>
                                </td>
                                <td>&nbsp;</td>
                            </tr>

                            <?php if (!empty($trans)) {
                            if ($trans['status']==0) {
                                
                                echo '<tr><td> <br> </td></tr> <tr>
                                <td>&nbsp;</td>
                                <td align="center" class="bg-warning ";>
                                    <h5  style="margin-top: 10px; width:80%">
                                        <font   color="white">Menunggu Konfirmasi</font>
                                    </h5>
                                </td>
                                <td>&nbsp;</td>
                            </tr>';
                            } else { echo '<tr><td> <br> </td></tr> <tr>
                                <td>&nbsp;</td>
                                
                                    <td><a href="'.site_url().'Pasien/cetakTrans" class="btn btn btn-success" name="ambil2" style="width: 100%" value="submit">Cetak Nomor Antrian</a>
                                    </td>
                                
                                <td>&nbsp;</td>
                            </tr>';
                            } 
                            }?>
                            <TR>
                                <TD>&nbsp;</TD>
                            </TR>
                            <?php if (empty($trans)) { ?>
                            <tr>
                                <td>&nbsp;</td>
                                <td><a href="<?php echo site_url() . 'Pasien/ambilTranskrip' ?>" class="btn btn btn-danger" name="ambil" style="width: 100%" value="submit">Ambil Antrian Anda</a></td>
                                <td>&nbsp;</td>
                            </tr>
                        <?php }?>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <!-- <tr>
                                <td colspan="3">
                                    <font color="white"><i>*Antrian selesai diperiksa :</i> C - <?= $selesaiUmum['sUmum']; ?></font>
                                </td>
                            </tr> -->
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
</div>