<?php
    session_start();
    if(!isset($_SESSION["user"])) {
        header("location:index.php");
    }

    if(!isset($_GET["rid"])) {
        header("location:index.php");
    } else {
        $curdate=date("Y/m/d");
        include ('db.php');
        $id = $_GET['rid'];
        $sql ="Select * from pesan_kamar where id = '$id'";
        $re = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($re)) {
            $title = $row['gelar'];
            $nama_depan = $row['nama_depan'];
            $nama_belakang = $row['nama_belakang'];
            $email = $row['email'];
            $nat = $row['kewarganegaraan'];
            $country = $row['negara'];
            $Phone = $row['no_telp'];
            $tipe_kamar = $row['tipe_kamar'];
            $jml_kamar = $row['jml_kamar'];
            $bed = $row['tempat_tidur'];
            $non = $row['jml_kamar'];
            $meal = $row['makanan'];
            $cin = $row['check_in'];
            $cout = $row['check_out'];
            $sta = $row['status'];
            $days = $row['jml_hari'];
        }
    }
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
    <div id="wrapper">
        <?php include '/include/navigasi.php'; ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Pemesanan Kamar<small> <?php echo  $curdate; ?> </small>
                        </h1>
                    </div>

                    <div class="col-md-8 col-sm-8">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                               Konfirmasi Pemesanan
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <th>DESKRIPSI</th>
                                            <th>INFORMASI</th>
                                        </tr>
                                        <tr>
                                            <td>Nama</td>
                                            <td><?php echo $title.' '.$nama_depan.' '.$nama_belakang; ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $email; ?> </td>
                                        </tr>
                                        <tr>
                                            <td>Kewarganegaraan </td>
                                            <td><?php echo $nat; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Negara </td>
                                            <td><?php echo $country;  ?></td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Telpon </td>
                                            <td><?php echo $Phone; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tipe Kamar </td>
                                            <td><?php echo $tipe_kamar; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Kamar </td>
                                            <td><?php echo $jml_kamar; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Makakanan </td>
                                            <td><?php echo $meal; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Selimut </td>
                                            <td><?php echo $bed; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Masuk </td>
                                            <td><?php echo $cin; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal Keluar</td>
                                            <td><?php echo $cout; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Jumlah Hari</td>
                                            <td><?php echo $days; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Status Level</td>
                                            <td><?php echo $sta; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <form method="post">
                                    <div class="form-group">
                                        <label>Pilih Sesuai</label>
                                        <select name="conf"class="form-control">
                                            <option value selected> </option>
                                            <option value="Sesuai">Sesuai</option>
                                        </select>
                                     </div>
                                    <input type="submit" name="co" value="Sesuai" class="btn btn-success">
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
                        $rsql ="select * from kamar";
                        $rre= mysqli_query($con,$rsql);
                        $r = $sc = $gh = $sr = $dr = 0;
                        while($rrow=mysqli_fetch_array($rre)) {
                            $r = $r + 1;
                            $s = $rrow['tipe'];
                            $p = $rrow['tempat'];
                            if($s=="Kamar Presiden" ) {
                                $sc = $sc+ 1;
                            }

                            if($s=="Kamar Keluarga") {
                                $gh = $gh + 1;
                            }
                            if($s=="Kamar Biasa" ) {
                                $sr = $sr + 1;
                            }
                            if($s=="Kamar Superior" ) {
                                $dr = $dr + 1;
                            }
                        }

                        $csql ="select * from pembayaran";
                        $cre= mysqli_query($con,$csql);
                        $cr = $csc = $cgh = $csr = $cdr = 0;
                        while($crow=mysqli_fetch_array($cre)) {
                            $cr = $cr + 1;
                            $cs = $crow['tipe_kamar'];

                            if($cs=="Kamar Presiden") {
                                $csc = $csc + 1;
                            }

                            if($cs=="Kamar Keluarga") {
                                $cgh = $cgh + 1;
                            }
                            if($cs=="Kamar Biasa") {
                                $csr = $csr + 1;
                            }
                            if($cs=="Kamar Superior") {
                                $cdr = $cdr + 1;
                            }
                        }
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               Detail Kamar Tersedia
                            </div>
                            <div class="panel-body">
                                <table width="200px">
                                    <tr>
                                        <td><b>Kamar Presiden</b></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-circle">
                                                <?php
                                                $f1 =$sc - $csc;
                                                if($f1 <=0 ) {
                                                    $f1 = "NO";
                                                    echo $f1;
                                                } else {
                                                    echo $f1;
                                                }
                                                ?>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Kamar Keluarga</b></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-circle">
                                                <?php
                                                $f2 =  $gh -$cgh;
                                                if($f2 <=0 )
                                                    {   $f2 = "NO";
                                                        echo $f2;
                                                    } else {
                                                        echo $f2;
                                                    }
                                                ?>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Kamar Biasa</b></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-circle">
                                                <?php
                                                $f3 =$sr - $csr;
                                                if($f3 <=0 ) {
                                                    $f3 = "NO";
                                                    echo $f3;
                                                } else {
                                                    echo $f3;
                                                }
                                                ?>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Kamar Superior</b></td>
                                        <td>
                                            <button type="button" class="btn btn-primary btn-circle">
                                                <?php
                                                $f4 =$dr - $cdr;
                                                if($f4 <=0 ) {
                                                    $f4 = "NO";
                                                    echo $f4;
                                                } else {
                                                    echo $f4;
                                                }
                                                ?>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>Total Kamar</b> </td>
                                        <td>
                                            <button type="button" class="btn btn-danger btn-circle">
                                                <?php
                                                $f5 =$r-$cr;
                                                if($f5 <=0 ) {   $f5 = "NO";
                                                    echo $f5;
                                                } else {
                                                    echo $f5;
                                                }
                                                ?>
                                            </button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="panel-footer">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
            </div>
            <!-- /. ROW  -->
        </div>
            <!-- /. PAGE INNER  -->
    </div>
        <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->
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
</body>
</html>

<?php
    if (isset($_POST['co'])) {
        $st = $_POST['conf'];
        if ($st=="Sesuai") {
            $urb = "UPDATE `pesan_kamar` SET `status`='$st' WHERE id = '$id'";

            if ($f1=="NO" ) {
                echo "<script type='text/javascript'> alert('Maaf! Kamar Superior tidak tersedia')</script>";
            } elseif ($f2 =="NO") {
                echo "<script type='text/javascript'> alert('Maaf! Penginapan tidak tersedia')</script>";
            } elseif ($f3 == "NO") {
                echo "<script type='text/javascript'> alert('Maaf! Kamar single tidak tersedia')</script>";
            } elseif($f4=="NO") {
                echo "<script type='text/javascript'> alert('Maaf! Kamar Mewah tidak tersedia')</script>";
            } elseif( mysqli_query($con,$urb)) {
                //echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
                //echo "<script type='text/javascript'> window.location='home.php'</script>";
                $type_of_room = 0;
                if ($tipe_kamar=="Kamar Presiden") {
                    $type_of_room = 4640000;//320$
                } elseif ($tipe_kamar=="Kamar Superior") {
                    $type_of_room = 3190000;//220$
                } elseif ($tipe_kamar=="Kamar Keluarga") {
                    $type_of_room = 2610000;//180$
                } elseif ($tipe_kamar=="Kamar Biasa") {
                    $type_of_room = 2180000;//150$
                }

                if ($bed=="Single") {
                    $type_of_bed = $type_of_room * 1/100;
                } elseif ($bed=="Double") {
                    $type_of_bed = $type_of_room * 2/100;
                } elseif ($bed=="Triple") {
                    $type_of_bed = $type_of_room * 3/100;
                } elseif ($bed=="Quad") {
                    $type_of_bed = $type_of_room * 4/100;
                } elseif ($bed=="None") {
                    $type_of_bed = $type_of_room * 0/100;
                }

                if ($meal=="Hanya Kamar") {
                    $type_of_meal=$type_of_bed * 0;
                } elseif ($meal=="Sarapan") {
                    $type_of_meal=$type_of_bed * 2;
                } elseif ($meal=="Half Board") {
                    $type_of_meal=$type_of_bed * 3;
                } elseif ($meal=="Lengkap") {
                    $type_of_meal=$type_of_bed * 4;
                }

                $ttot = $type_of_room * $days * $jml_kamar;
                $mepr = $type_of_meal * $days;
                $btot = $type_of_bed *$days;

                $fintot = $ttot + $mepr + $btot ;

                    //echo "<script type='text/javascript'> alert('$count_date')</script>";
                $psql = "INSERT INTO `pembayaran`(`id`, `gelar`, `nama_depan`, `nama_belakang`, `tipe_kamar`, `tipe_tempat_tidur`, `jml_kamar`, `check_in`, `check_out`, `ttot`,`makanan`, `mepr`, `btot`,`fintot`,`jml_hari`) VALUES ('$id','$title','$nama_depan','$nama_belakang','$tipe_kamar','$bed','$jml_kamar','$cin','$cout','$ttot','$meal','$mepr','$btot','$fintot','$days')";

                if(mysqli_query($con,$psql)) {
                    $notfree="Tidak Gratis";
                    $rpsql = "UPDATE `kamar` SET `tempat`='$notfree',`cusid`='$id' where selimut ='$bed' and tipe='$tipe_kamar' ";
                    if(mysqli_query($con,$rpsql)) {
                        echo "<script type='text/javascript'> alert('Pemesanan terkonfirmasi')</script>";
                        echo "<script type='text/javascript'> window.location='roombook.php'</script>";
                    }
                }
            }
        }
    }
?>
