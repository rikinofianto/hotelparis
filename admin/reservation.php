<?php
include('db.php')
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESERVASI SUNRISE HOTEL</title>
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
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>

                    </ul>

            </div>

        </nav>

        <div id="page-wrapper" >
            <div id="page-inner">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            RESERVASI <small></small>
                        </h1>
                    </div>
                </div>


            <div class="row">

                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            INFORMASI PERSONAL
                        </div>
                        <div class="panel-body">
                        <form name="form" method="post">
                            <div class="form-group">
                                            <label>Gelar*</label>
                                            <select name="title" class="form-control" required >
                                                <option value selected ></option>
                                                <option value="Bapak">bapak.</option>
                                                <option value="Ibu">ibu.</option>
                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Nama Pertama</label>
                                            <input name="nama_depan" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Nama Terakhir</label>
                                            <input name="nama_belakang" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" required>

                               </div>
                               <div class="form-group">
                                            <label>Negara</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Indonesia" checked="">Indonesia
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="nation"  value="Non Indonesia ">Non Indonesia
                                            </label>

                                </div>
                                <?php

                                $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

                                ?>
                                <div class="form-group">
                                            <label>Passport Negara</label>
                                            <select name="country" class="form-control" required>
                                                <option value selected ></option>
                                                <?php
                                                foreach($countries as $key => $value):
                                                echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                                                endforeach;
                                                ?>
                                            </select>
                                </div>
                                <div class="form-group">
                                            <label>Nomor telephone</label>
                                            <input name="phone" type ="text" class="form-control" required>

                               </div>

                        </div>

                    </div>
                </div>


            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            INFORMASI RESERVASI
                        </div>
                        <div class="panel-body">
                                <div class="form-group">
                                            <label>Tipe Kamar</label>
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
                                                <option value="None">None</option>


                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Nomor Kamar *</label>
                                            <select name="jml_kamar" class="form-control" required>
                                                <option value selected ></option>
                                                <option value="1">1</option>
                                              <!--  <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option> -->
                                            </select>
                              </div>


                              <div class="form-group">
                                            <label>Makanan</label>
                                            <select name="meal" class="form-control"required>
                                                <option value selected ></option>
                                                <option value="Hanya Kamar">Hanya Kamar</option>
                                                <option value="Sarapan">Sarapan</option>
                                                <option value="Lengkap">Lengkap</option>



                                            </select>
                              </div>
                              <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin" type ="date" class="form-control">

                               </div>
                               <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout" type ="date" class="form-control">

                               </div>
                       </div>

                    </div>
                </div>


                <div class="col-md-12 col-sm-12">
                    <div class="well">
                        <h4> VERIFIKASI</h4>
                        <p>Masukan Nomor veriviksi tersebut <?php $Random_code=rand(); echo$Random_code; ?> </p><br />
                        <p>Enter the random code<br /></p>
                            <input  type="text" name="code1" title="random code" />
                            <input type="hidden" name="code" value="<?php echo $Random_code; ?>" />
                        <input type="submit" name="submit" class="btn btn-primary">
                        <?php
                            if(isset($_POST['submit']))
                            {
                            $code1=$_POST['code1'];
                            $code=$_POST['code'];
                            if($code1!="$code")
                            {
                            $msg="Kode tidak valid";
                            }
                            else
                            {

                                    $con=mysqli_connect("localhost","root","","db_hotel_id");
                                    $check="SELECT * FROM pesan_kamar WHERE email = '$_POST[email]'";
                                    $rs = mysqli_query($con,$check);
                                    $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                                    if($data[0] > 1) {
                                        echo "<script type='text/javascript'> alert('Pemesanan sudah ada')</script>";

                                    }

                                    else
                                    {
                                        $new ="Tidak sesuai";
                                        $newUser="INSERT INTO `pesan_kamar`(`gelar`, `nama_depan`, `nama_belakang`, `email`, `kewarganegaraan`, `negara`, `no_telp`, `tipe_kamar`, `Bed`, `jml_kamar`, `makanan`, `check_in`, `check_out`,`status`,`jml_hari`) VALUES ('$_POST[title]','$_POST[nama_depan]','$_POST[nama_belakang]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[tipe_kamar]','$_POST[bed]','$_POST[jml_kamar]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                        if (mysqli_query($con,$newUser))
                                        {
                                            echo "<script type='text/javascript'> alert('Pemesanan anda telah dikirim')</script>";

                                        }
                                        else
                                        {
                                            echo "<script type='text/javascript'> alert('Error, periksa sistem')</script>";

                                        }
                                    }

                            $msg="Kode yang anda masukkan benar";
                            }
                            }
                            ?>
                        </form>

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
