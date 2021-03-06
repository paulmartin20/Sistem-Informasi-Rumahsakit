<?php 
    //fungsi aksi penambahan data baru ada disini
    
    if($_POST){
        include "connection.php";

        $data['id_dokter'] = $_POST['id_dokter'];
        $data['nama'] = $_POST['nama'];    
        $data['Jenis_kelamin'] = $_POST['Jenis_kelamin'];
        $data['spesialis'] = $_POST['spesialis'];
        $data['jadwal_kerja'] = $_POST['jadwal_kerja'];
        $data['id_rumah_sakit'] = $_POST['id_rumah_sakit'];
        $data['id_puskesmas'] = $_POST['id_puskesmas'];
        $data['id_posyandu'] = $_POST['id_posyandu']; 

    $sql = "INSERT INTO dokter(id_dokter, nama, Jenis_kelamin, spesialis, jadwal_kerja, id_rumah_sakit,id_puskesmas, id_posyandu) VALUES (:id_dokter, :nama, :Jenis_kelamin, :spesialis, :jadwal_kerja, :id_rumah_sakit, :id_puskesmas, :id_posyandu)";
    
    $list_dokter = $conn->prepare($sql);
    $list_dokter->execute($data);

    header("Location: data-dokter.php");
   die;
    }

 ?>

<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product List | Nalika - Material Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body> 
<div class="left-sidebar-pro">
  <nav id="sidebar" class="">
      <div class="sidebar-header">
          <a href="index.html"><img class="main-logo" src="img/logo/playkes.png" alt="playkes" /></a>
      </div>
<div class="nalika-profile">
  <div class="profile-dtl">
    <a href="#"><img src="img/notification/4.jpg" alt="" /></a>
    <h2>Playkes <span class="min-dtn"></span></h2>
  </div>
  <div class="profile-social-dtl">
    <ul class="dtl-social">
      <li><a href="#"><i class="icon nalika-facebook"></i></a></li>
      <li><a href="#"><i class="icon nalika-twitter"></i></a></li>
      <li><a href="#"><i class="icon nalika-linkedin"></i></a></li>
    </ul>
  </div>
</div>
      <div class="left-custom-menu-adp-wrap comment-scrollbar">
          <nav class="sidebar-nav left-sidebar-menu-pro">
              <ul class="metismenu" id="menu1">
                  <li class="active">
                      <a href="index.html">
                          <i class="icon nalika-home icon-wrap"></i>
                          <span>Home</span>
                      </a> 
                  </li> 
                  <li>
                      <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Data Playkes</span></a>
                      <ul class="submenu-angle" aria-expanded="false">
                          <li><a title="Data rumah sakit" href="data_rumah_sakit.php"><span class="mini-sub-pro">Rumah Sakit</span></a></li>
                          <li><a title="Data puskesmas" href="data_puskesmas.php"><span class="mini-sub-pro">Puskesmas</span></a></li>
                          <li><a title="Data posyandu" href="data_posyandu.php"><span class="mini-sub-pro">Posyandu</span></a></li>
                      </ul>
                  </li> 
                  <li class="">
                    <a href="data-dokter.php">
                        <i class="icon nalika-user icon-wrap"></i>
                        <span>Data Dokter</span>
                    </a> 
                </li> 
                  <li class="">
                    <a href="data-maps.php">
                        <i class="icon nalika-maps icon-wrap"></i>
                        <span>Data maps</span>
                    </a> 
                </li> 
                  <li id="removable">
                      <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                      <ul class="submenu-angle" aria-expanded="false">
                          <li><a title="Login" href="../login.html"><span class="mini-sub-pro">Login</span></a></li>
                          <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li> 
                      </ul>
                  </li>
              </ul>
          </nav>
      </div>
  </nav>
</div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row"> 
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
											                        	<form role="search" class="">
												                        <input type="text" placeholder="Search..." class="form-control">
													                      <a href=""><i class="fa fa-search"></i></a>
												                        </form>
										                        </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">  
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
														                       	<i class="icon nalika-user"></i>
															                      <span class="admin-name">Gozali Ahmad Mubarok</span>
														                      	<i class="icon nalika-down-arrow nalika-angle-dw"></i></a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="register.html"><span class="icon nalika-home author-log-ic"></span> Register</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
                                                        </li>
                                                        <li><a href="lock.html"><span class="icon nalika-diamond author-log-ic"></span> Lock</a>
                                                        </li>
                                                        <li><a href="#"><span class="icon nalika-settings author-log-ic"></span> Settings</a>
                                                        </li>
                                                        <li><a href="login.html"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li> 
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp"> 
										                    	<div class="breadcomb-ctn">
										                  	  	<h2>tambah data dokter</h2> 
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
        <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
        <div class="product-status mg-b-30"> 
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                       Tambah Data Dokter
                    </div>
                    <div class="panel-body">
                    <form action="" method="post"> 
                            <div class="form-group">
                                <label for="" class="label-control">id dokter</label>
                                <input name="id_dokter" type="text" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">nama</label>
                                 <input name="nama" type="text" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                            <label for="" class="label-control" aria-placeholder="jenis kelamin">jenis kelamin</label>
                                <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin">
                                    <option value="laki-laki">laki-laki</option>
                                    <option value="perempuan">perempuan</option> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">spesialis</label>
                                <input name="spesialis" type="text" class="form-control" autocomplete="off">
                            </div> 
                            <div class="form-group">
                                <label for="" class="label-control">jadwal_kerja</label>
                                <input name="jadwal_kerja" type="text" class="form-control" autocomplete="off">
                            </div> 
                            <div class="form-group">
                                <label for="" class="label-control">id rumah sakit </label>
                                <input name="id_rumah_sakit" type="text" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">id puskesmas </label>
                                <input name="id_puskesmas" type="text" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="" class="label-control">id posyandu </label>
                                <input name="id_posyandu" type="text" class="form-control" autocomplete="off">
                            </div> 
                            <div class="form-group">
                                <button class="btn btn-primary">Save</button>
                            </div> 
          </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
            </div>
        </div>

        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright ?? 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>