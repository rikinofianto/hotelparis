<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QUEEN OF THE SOUTH HOTEL</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" class="tambah-aktif">
        <?php include 'include/navigasi_2.php'; ?>
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Kamar Baru <small></small>
                        </h1>
                    </div>
                </div>


            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Tambah Kamar Baru
                        </div>
                        <div class="panel-body">
                        <form name="form" method="post">
                            <div class="form-group">
                                            <label>Tipe Kamar *</label>
                                            <select name="tipe_kamar"  class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Kamar Presiden">Kamar Presiden</option>
                                                <option value="Kamar Superior">Kamar Superior</option>
                                                <option value="Kamar Keluarga">Kamar Keluarga</option>
                                                <option value="Kamar Biasa">Kamar Biasa</option>
                                            </select>
                              </div>

                                <div class="form-group">
                                            <label>Tipe Selimut</label>
                                            <select name="bed" class="form-control" required>
                                                <option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
                                                <option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
                                                <option value="Triple">None</option>

                                            </select>

                               </div>
                             <input type="submit" name="add" value="Tambah Baru" class="btn btn-primary">
                            </form>
                            <?php
                             include('db.php');
                             if(isset($_POST['add']))
                             {
                                        $room = $_POST['tipe_kamar'];
                                        $bed = $_POST['bed'];
                                        $place = 'Gratis';

                                        $check="SELECT * FROM room WHERE tipe = '$room' AND selimut = '$bed'";
                                        $rs = mysqli_query($con,$check);
                                        $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                        if($data[0] > 1) {
                                            echo "<script type='text/javascript'> alert('Kamar Sudah ada')</script>";

                                        }

                                        else
                                        {


                                        $sql ="INSERT INTO `kamar`( `tipe`, `selimut`,`tempat`) VALUES ('$room','$bed','$place')" ;
                                        if(mysqli_query($con,$sql))
                                        {
                                         echo '<script>alert("Kamar Baru Ditambahkan") </script>' ;
                                        }else {
                                            echo '<script>alert("Maaf ! Periksa Sistem") </script>' ;
                                        }
                             }
                            }

                            ?>
                        </div>

                    </div>
                </div>


            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Informasi Kamar
                        </div>
                        <div class="panel-body">
                                <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <?php
                        $sql = "select * from kamar limit 0,10";
                        $re = mysqli_query($con,$sql)
                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID Kamar</th>
                                            <th>Tipe Kamar</th>
                                            <th>Selimut</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        while($row= mysqli_fetch_array($re))
                                        {
                                                $id = $row['id'];
                                            if($id % 2 == 0)
                                            {
                                                echo "<tr class=odd gradeX>
                                                    <td>".$row['id']."</td>
                                                    <td>".$row['tipe']."</td>
                                                   <th>".$row['selimut']."</th>
                                                </tr>";
                                            }
                                            else
                                            {
                                                echo"<tr class=even gradeC>
                                                    <td>".$row['id']."</td>
                                                    <td>".$row['tipe']."</td>
                                                   <th>".$row['selimut']."</th>
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
                </div>


            </div>



                    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>
</html>
