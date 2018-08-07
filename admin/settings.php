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
    <title>SUNRISE HOTEL</title>
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
    <div id="wrapper" class="status-aktif">
        <?php include 'include/navigasi_2.php'; ?>
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Kamar <small> Tersedia</small>
                        </h1>
                    </div>
                </div>


            <?php
						include ('db.php');
						$sql = "select * from kamar";
						$re = mysqli_query($con,$sql)
				?>
                <div class="row">


				<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['tipe'];
											if($id == "Kamar Presiden")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['selimut']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
															".$row['tipe']."

														</div>
													</div>
												</div>";
											}
											else if ($id == "Kamar Superior")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-green'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['selimut']."</h3>
														</div>
														<div class='panel-footer back-footer-green'>
															".$row['tipe']."

														</div>
													</div>
												</div>";

											}
											else if($id =="Kamar Keluarga")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-brown'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['selimut']."</h3>
														</div>
														<div class='panel-footer back-footer-brown'>
															".$row['tipe']."

														</div>
													</div>
												</div>";

											}
											else if($id =="Kamar Biasa")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-red'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['selimut']."</h3>
														</div>
														<div class='panel-footer back-footer-red'>
															".$row['tipe']."

														</div>
													</div>
												</div>";

											}
										}
									?>

                </div>
                <!-- /. ROW  -->




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
