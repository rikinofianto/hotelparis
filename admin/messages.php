<?php
session_start();
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
$_SESSION["menu_aktif"] = 'message';
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
    <div id="wrapper" class="message-aktif">
        <?php include '/include/navigasi.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Pesan
                        </h1>
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <?php
                include('db.php');
                $mail = "SELECT * FROM `kontak`";
                $rew = mysqli_query($con,$mail);

               ?>
                 <div class="row">
                <div class="col-md-12">
                    <div class="jumbotron">
                        <h3>Kirim berita ke pengikut</h3>
                        <?php
                        while($rows = mysqli_fetch_array($rew))
                        {
                                $app=$rows['persetujuan'];
                                if($app=="Allowed")
                                {

                                }
                        }
                        ?>
                        <p></p>
                        <p>
                        <div class="panel-body">
                            <button class="btn btn-primary btn" data-toggle="modal" data-target="#myModal">
                              Kirim Pesan
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Buat Pesan Baru</h4>
                                        </div>
                                        <form method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Judul</label>
                                            <input name="title" class="form-control" placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                            <label>Subjek</label>
                                            <input name="subject" class="form-control" placeholder="Enter Subject">
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                        <div class="form-group">
                                          <label for="comment">Berita/Pesan</label>
                                          <textarea name="news" class="form-control" rows="5" id="comment"></textarea>
                                        </div>
                                         </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>

                                           <input type="submit" name="log" value="Send" class="btn btn-primary">
                                          </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php
                            if(isset($_POST['log']))
                            {
                                $log ="INSERT INTO `newsletterlog`(`judul`, `subjek`, `berita`) VALUES ('$_POST[title]','$_POST[subject]','$_POST[news]')";
                                if(mysqli_query($con,$log))
                                {
                                    echo '<script>alert("Newsletter telah dikirimkan") </script>' ;

                                }

                            }


                            ?>

                        </p>

                    </div>
                </div>
            </div>
               <?php

                $sql = "SELECT * FROM `kontak`";
                $re = mysqli_query($con,$sql);

               ?>
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
                                            <th>Nomor Telpon</th>
                                            <th>Email</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                            <th>Persetujuan</th>
                                            <th>Hapus</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
                                        while($row = mysqli_fetch_array($re))
                                        {
                                            $appr = $row['persetujuan'] == 'Allowed' ? 'Diizinkan' : 'Tidak Diizinkan';
                                            $id = $row['id'];

                                            if($id % 2 ==1 )
                                            {
                                                echo"<tr class='gradeC'>
                                                    <td>".$row['nama_lengkap']."</td>
                                                    <td>".$row['no_tlp']."</td>
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['tanggal']."</td>
                                                    <td>". $appr ."</td>
                                                    <td><a href=newsletter.php?eid=".$id ." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Perizinan</button></td>
                                                    <td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-trash-o' ></i> Hapus</button></td>
                                                </tr>";
                                            } else {
                                                echo"<tr class='gradeU'>
                                                    <td>".$row['nama_lengkap']."</td>
                                                    <td>".$row['no_tlp']."</td>
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['tanggal']."</td>
                                                    <td>".$appr."</td>
                                                    <td><a href=newsletter.php?eid=".$id." <button class='btn btn-primary'> <i class='fa fa-edit' ></i> Perizinan</button></td>
                                                    <td><a href=newsletterdel.php?eid=".$id ." <button class='btn btn-danger'> <i class='fa fa-trash-o' ></i> Hapus </button></td>
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
            if (wrp.hasClass('message-aktif')) {
                $('#menu-inbox').addClass('active-menu');
            }
        });
    </script>


</body>
</html>
