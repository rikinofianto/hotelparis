<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
$_SESSION["menu_aktif"] = 'home';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrator    </title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper" class="home-aktif">
        <?php include '/include/navigasi.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Status <small>Pesan Kamar </small>
                        </h1>
                    </div>
                </div>
                <!-- /. ROW  -->
                <?php
                    include ('db.php');
                    $sql = "select * from pesan_kamar";
                    $re = mysqli_query($con,$sql);
                    $c =0;
                    while($row=mysqli_fetch_array($re) )
                    {
                        $new = $row['status'];
                        $cin = $row['check_in'];
                        $id = $row['id'];
                        if($new=="Tidak sesuai") {
                            $c = $c + 1;
                        }
                    }
                ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            <div class="panel-body">
                                <div class="panel-group" id="accordion">

                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                    <button class="btn btn-default" type="button">
                                                        Pesan Kamar Baru <span class="badge"><?php echo $c ; ?></span>
                                                    </button>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo" class="panel-collapse in" style="height: auto;">
                                            <div class="panel-body">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Nama</th>
                                                                        <th>Email</th>
                                                                        <th>Negara</th>
                                                                        <th>Kamar</th>
                                                                        <th>Seprai</th>
                                                                        <th>Makanan</th>
                                                                        <th>Masuk</th>
                                                                        <th>Keluar</th>
                                                                        <th>Status</th>
                                                                        <th>Aksi</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <?php
                                                                    $tsql = "select * from pesan_kamar";
                                                                    $tre = mysqli_query($con,$tsql);
                                                                    while($trow=mysqli_fetch_array($tre)) {
                                                                        $co =$trow['status'];
                                                                        if($co=="Tidak sesuai") {
                                                                            echo"<tr>
                                                                                <th>".$trow['id']."</th>
                                                                                <th>".$trow['nama_depan']." ".$trow['nama_belakang']."</th>
                                                                                <th>".$trow['email']."</th>
                                                                                <th>".$trow['negara']."</th>
                                                                                <th>".$trow['tipe_kamar']."</th>
                                                                                <th>".$trow['tempat_tidur']."</th>
                                                                                <th>".$trow['makanan']."</th>
                                                                                <th>".$trow['check_in']."</th>
                                                                                <th>".$trow['check_out']."</th>
                                                                                <th>".$trow['status']."</th>

                                                                                <th><a href='roombook.php?rid=".$trow['id']." ' class='btn btn-primary'>Aksi</a></th>
                                                                                </tr>";
                                                                        }
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $rsql = "SELECT * FROM `pesan_kamar`";
                                        $rre = mysqli_query($con,$rsql);
                                        $r =0;
                                        while($row=mysqli_fetch_array($rre) )
                                        {
                                            $br = $row['status'];
                                            if($br=="Sesuai")
                                            {
                                                $r = $r + 1;
                                            }
                                        }
                                    ?>
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed">
                                                    <button class="btn btn-primary" type="button">
                                                        Pesan Kamar  <span class="badge"><?php echo $r ; ?></span>
                                                    </button>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                            <div class="panel-body">
                                                <?php
                                                $msql = "SELECT * FROM `pesan_kamar`";
                                                $mre = mysqli_query($con,$msql);
                                                while($mrow=mysqli_fetch_array($mre) ) {
                                                    $br = $mrow['status'];
                                                    if($br=="Sesuai") {
                                                        $fid = $mrow['id'];
                                                        /*echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                                                <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                                                    <div class='panel-body'>
                                                                        <i class='fa fa-users fa-5x'></i>
                                                                        <h3>".$mrow['nama_depan']."</h3>
                                                                    </div>
                                                                    <div class='panel-footer back-footer-blue'>
                                                                    <a href=show.php?sid=".$fid ."><button  class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>
                                                                Show
                                                                </button></a>
                                                                        ".$mrow['tipe_kamar']."
                                                                    </div>
                                                                </div>
                                                        </div>";*/
                                                        echo"<div class='col-md-3 col-sm-12 col-xs-12'>
                                                                <div class='panel panel-primary text-center no-boder bg-color-blue'>
                                                                    <div class='panel-body'>
                                                                        <i class='fa fa-users fa-5x'></i>
                                                                        <h3>".$mrow['nama_depan']."</h3>
                                                                    </div>
                                                                    <div class='panel-footer back-footer-blue'>
                                                                    <a href='javascript:;'><button  class='btn btn-primary btn tampilkan' data-toggle='modal' data-target='#modal-tampil' data-id='".$fid ."'>
                                                                Tampilkan
                                                                </button></a><br/>
                                                                        ".$mrow['tipe_kamar']."
                                                                    </div>
                                                                </div>
                                                        </div>";
                                                    }
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $fsql = "SELECT * FROM `kontak`";
                                        $fre = mysqli_query($con,$fsql);
                                        $f =0;
                                        while($row=mysqli_fetch_array($fre)) {
                                                $f = $f + 1;
                                        }
                                    ?>
                                    <div class="panel panel-danger">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                                    <button class="btn btn-primary" type="button">
                                                         Pengikut  <span class="badge"><?php echo $f ; ?></span>
                                                    </button>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="panel-body">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Nama Lengkap</th>
                                                                    <th>Email</th>
                                                                    <th>Mulai Mengikuti</th>
                                                                    <th>Status Perizinan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                    $csql = "select * from kontak";
                                                                    $cre = mysqli_query($con,$csql);
                                                                    while($crow=mysqli_fetch_array($cre) ) {
                                                                        echo"<tr>
                                                                            <th>".$crow['id']."</th>
                                                                            <th>".$crow['nama_lengkap']."</th>
                                                                            <th>".$crow['email']." </th>
                                                                            <th>".$crow['tanggal']." </th>
                                                                            <th>".$crow['persetujuan']."</th>
                                                                            </tr>";
                                                                    }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                        <a href="messages.php" class="btn btn-primary">Aksi</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- DEOMO-->
            <div class='panel-body'>
                <button class='btn btn-primary btn' data-toggle='modal' data-target='#myModal'>Ubah</button>
                <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                                <h4 class='modal-title' id='myModalLabel'>Ubah username dan password</h4>
                            </div>
                            <form method='post'>
                                <div class='modal-body'>
                                    <div class='form-group'>
                                        <label>Ubah Username</label>
                                        <input name='username' value='<?php echo $nama_depan; ?>' class='form-control' placeholder='Masukaan username'>
                                    </div>
                                </div>
                                <div class='modal-body'>
                                    <div class='form-group'>
                                        <label>Ubah Password</label>
                                        <input name='pasd' value='<?php echo $ps; ?>' class='form-control' placeholder='Masukkan Password'>
                                    </div>
                                </div>
                                <div class='modal-footer'>
                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
                                   <input type='submit' name='up' value='Update' class='btn btn-primary'>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--DEMO END-->
        <!-- /. ROW  -->
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->

    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


    <div role="dialog" tabindex="-1" id="modal-tampil" class="modal fade">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="judul-kata-mutiara-md">&nbsp;</h4>
                </div>
                <div class="modal-body" id="tapilkan-sini">
                    <div style="text-align: center;font-size: large;" class="loader"><i class="fa fa-spinner fa-6 fa-spin" aria-hidden="true"></i></div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-info" type="button">OK</button>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    
    /* Ajax & Modal */
    $('.tampilkan').click(function() {
        var id = $(this).attr('data-id');
        var konten = $('#tapilkan-sini');
        var data = {
            sid : id
        }
        console.log(data, id);
        $.ajax({
            data: data,
            dataType: 'html',
            type: 'POST',
            url: 'tampil.php',
            success: function(r) {
                konten.html(r);
            }
        });
    });
        $(window).load(function () {
            var wrp = $('#wrapper');
            if (wrp.hasClass('home-aktif')) {
                $('#menu-home').addClass('active-menu');
            }
        });
</script>
</body>

</html>
