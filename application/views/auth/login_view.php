<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN E_TIKET</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nice-select/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate-css/animate.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendor/jquery-ui/jquery-ui.css') ?>">
    <!-- logo antik -->
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.css') ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/signin.css') ?>" rel="stylesheet">


<body>

    <div class="container">
        <form class="form-signin" id="login" name="login" action="<?php echo base_url('Login/login'); ?>" method="post">
            <br>
            <center>
                <img src="assets/img/logo.png" alt="sss" height="100px" width="100px">
            </center>
            <h2 class="form-signin-heading" align="center" style="color: #FFFFFF;">LOGIN E-TIKET</h2>

            <br>
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="txt_user" class="form-control" placeholder="Username" required autofocus>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="txt_pass" class="form-control" placeholder="Password" required>

            <br>
            <?php echo $this->session->flashdata('pesan'); ?>
            <input class="btn btn-lg btn-primary btn-block" type="submit" name="btn_log" value="LOGIN">
            <a href="<?php echo base_url('Welcome'); ?>" class="btn btn-lg btn-danger btn-block" name="kembali">Kembali</a>
            <!-- <button class="btn btn-lg btn-danger btn-block" type="submit" name="kembali">Kembali</button> -->
            <br>

            <br>
        </form>
    </div> <!-- /container -->


</body>

</html>