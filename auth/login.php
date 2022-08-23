<?php
require_once"../_config/config.php";

if(isset($_SESSION['user'])){
    echo "<script>window.location='".base_url()."'</script>";
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<style>
.navbar {
    margin-bottom: 0;
    background-color: #EECAB2;
    z-index: 9999;
    border: 0;
    font-size: 12px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #EECAB2 !important;
    background-color: #fff !important;
  }
</style>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - Rumah Sakit</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body style="background: #EECAB2;">
    <nav class="navbar navbar-default navbar-fixed-top" style="background: #EECAB2;">
    <div class="container">
        <div class="navbar-header">
        <a class="navbar-brand" href="../auth/login.php">S.KLINIK</a>
        </div>
    </div>
    </nav>
    <div id="wrapper">
        <div style="margin-top: -70px; margin-left: -20px;">
            <img src="kotak.jpg" width="440" height="727" style="left: -990px; ">
        </div>
        <div style="margin-top: -584px; margin-left: 150px;">
            <img src="gambar.png" width="540" height="540">
        </div>
        <div class="container">
            <div align="center" style="margin-top: -440px;margin-left: 590px;">
                <h2>LOG<a style="color: #FF725E">IN</a></h2> 
                <h5> Selamat datang. <p> Silahkan masukan Username dan Password anda.</h5> 

                <?php
                    if(isset($_POST['login'])){
                        $user = mysqli_real_escape_string($con, $_POST['user']);
                        $pass = mysqli_real_escape_string($con, $_POST['pass']);

                        $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
                        if(mysqli_num_rows($sql_login) > 0){
                            $_SESSION['user'] = $user;
                            echo "<script>window.location='".base_url()."'</script>";
                        }
                        else{ ?>
                            <div class="row">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                        <strong>Login gagal!</strong> Username / Password salah
                                        <?php
                                        Print $user;
                                        Print $pass;
                                        ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                    }
                ?>
                <form action="" method="post" class="navbar-form" style="margin-top: 24px; margin-left: 20px">
                    <div class="input-group">
                        <span>
                        <input type="text" name="user" class="form-control" placeholder="Username" required="" autofocus="" style="border:none; outline:none; display:inline-block;height:34px;vertical-align:middle;position:relative;bottom:14px;right:9px;border-radius:22px;width:220px;box-sizing:border-box;padding:0 18px;"></span>
                    </div>
                    <p></p><div class="input-group">
                        <span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required="" style="border:none; outline:none; display:inline-block;height:34px;vertical-align:middle;position:relative;bottom:14px;right:9px;border-radius:22px;width:220px;box-sizing:border-box;padding:0 18px;"></span>
                    </div>
                    <p></p><div class="input-group" >
                        <input type="submit" name="login" class="btn btn-primary" value="Login" style="margin-left: -26px;">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="<?= base_url('_assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('_assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>

<?php }?>