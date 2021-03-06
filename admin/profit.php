<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
$_SESSION["menu_aktif"] = 'profit';
?>
<?php

function formatRupiah($angka) {
    return "Rp. ".number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $angka)),2);
}
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

    <link rel="stylesheet" href="assets/css/morris.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js//raphael-min.js"></script>
    <script src="assets/js/morris.min.js"></script>


        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper" class="profit-aktif">

        <?php include '/include/navigasi.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Detail Keuntungan<small> </small>
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->


            <div class="row">

                <?php
                //index.php
                //$connect = mysqli_connect("localhost", "root", "", "hotel");
                include('db.php');


                    $query = "SELECT * FROM pembayaran";
                    $result = mysqli_query($con, $query);
                    $chart_data = '';
                    $tot = 0;
                    while($row = mysqli_fetch_array($result))
                    {
                     $chart_data .= "{ tanggal:'".$row["check_out"]."', keuntungan: ".$row["fintot"] *10/100 ."}, ";
                     $tot = $tot + $row["fintot"] *10/100;
                    }
                    $chart_data = substr($chart_data, 0, -2);

?>

                <br>
                <br>
                <br>
                <br><div id="chart"></div>
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Check in</th>
                                            <th>Check out</th>
                                            <th>Sewa kamar</th>
                                            <th>Sewa tempat tidur</th>
                                            <th>Makanan </th>
                                            <th>Gr.Total</th>
                                            <th>Keuntungan</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php

                                        $sql="select * from pembayaran";
                                        $re = mysqli_query($con,$sql);
                                        while($row = mysqli_fetch_array($re))
                                        {

                                            $id = $row['id'];

                                            if($id % 2 ==1 )
                                            {
                                                echo"<tr class='gradeC'>
                                                    <td>".$row['id']." </td>
                                                    <td>".$row['gelar']." ".$row['nama_depan']." ".$row['nama_belakang']."</td>
                                                    <td>".$row['check_in']."</td>
                                                    <td>".$row['check_out']."</td>


                                                    <td>".formatRupiah($row['ttot'])."</td>
                                                    <td>".formatRupiah($row['mepr'])."</td>
                                                    <td>".formatRupiah($row['btot'])."</td>
                                                    <td>".formatRupiah($row['fintot'])."</td>
                                                    <td>".formatRupiah(intval($row['fintot'])*10/100) ."</td>
                                                    </tr>";
                                            }
                                            else
                                            {
                                                echo"<tr class='gradeU'>
                                                    <td>".$row['id']." </td>
                                                    <td>".$row['gelar']." ".$row['nama_depan']." ".$row['nama_belakang']."</td>

                                                    <td>".$row['check_in']."</td>
                                                    <td>".$row['check_out']."</td>


                                                    <td>".formatRupiah($row['ttot'])."</td>
                                                    <td>".formatRupiah($row['mepr'])."</td>
                                                    <td>".formatRupiah($row['btot'])."</td>
                                                    <td>".formatRupiah($row['fintot'])."</td>
                                                    <td>".formatRupiah(intval($row['fintot'])*10/100) ."</td>
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


</body>
</html>
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'tanggal',
 ykeys:['keuntungan'],
 labels:['Keuntungan'],
 hideHover:'auto',
 stacked:true
});

$(window).load(function () {
    var wrp = $('#wrapper');
    if (wrp.hasClass('profit-aktif')) {
        $('#menu-profit').addClass('active-menu');
    }
});
</script>
