<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
$_SESSION["menu_aktif"] = 'payment';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QUEEN OF THE SOUTH</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->

        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper" class="payment-aktif">

        <?php include '/include/navigasi.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Detail Pembayaran<small> </small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->


            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Tipe Kamar</th>
                                            <th>Tipe Tempat Tidur</th>
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>Nomor Kamar</th>
                                            <th>Tipe Makanan</th>

                                            <th>Sewa Kamar</th>
                                            <th>Sewa Tempat Tidur</th>
                                            <th>Makanan </th>
                                            <th>Total</th>
                                            <th>Cetak</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        include ('db.php');
                                        $sql="select * from pembayaran";
                                        $re = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($re))
                                        {

                                            $id = $row['id'];

                                            if($id % 2 ==1 )
                                            {
                                                echo"<tr class='gradeC'>
                                                    <td>".$row['gelar']." ".$row['nama_depan']." ".$row['nama_belakang']."</td>
                                                    <td>".$row['tipe_kamar']."</td>
                                                    <td>".$row['tipe_tempat_tidur']."</td>
                                                    <td>".$row['check_in']."</td>
                                                    <td>".$row['check_out']."</td>
                                                    <td>".$row['jml_kamar']."</td>
                                                    <td>".$row['makanan']."</td>

                                                    <td>".$row['ttot']."</td>
                                                    <td>".$row['mepr']."</td>
                                                    <td>".$row['btot']."</td>
                                                    <td>".$row['fintot']."</td>
                                                    <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Cetak</button></td>
                                                    </tr>";
                                            }
                                            else
                                            {
                                                echo"<tr class='gradeU'>
                                                    <td>".$row['gelar']." ".$row['nama_depan']." ".$row['nama_belakang']."</td>
                                                    <td>".$row['tipe_kamar']."</td>
                                                    <td>".$row['tipe_tempat_tidur']."</td>
                                                    <td>".$row['check_in']."</td>
                                                    <td>".$row['check_out']."</td>
                                                    <td>".$row['jml_kamar']."</td>
                                                    <td>".$row['makanan']."</td>

                                                    <td>".$row['ttot']."</td>
                                                    <td>".$row['mepr']."</td>
                                                    <td>".$row['btot']."</td>
                                                    <td>".$row['fintot']."</td>
                                                    <td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Cetak</button></td>
                                                    </tr>";

                                            }

                                        }

                                    ?>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->

                </div>

            </div>


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
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    <script type="text/javascript">
        $(window).load(function () {
            var wrp = $('#wrapper');
            if (wrp.hasClass('payment-aktif')) {
                $('#menu-payment').addClass('active-menu');
            }
        });
    </script>

</body>
</html>
