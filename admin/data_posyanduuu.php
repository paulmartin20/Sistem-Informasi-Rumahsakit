<?php 
    
include "connection.php";

$sql = "select * from posyandu";
$list_posyandu = $conn->prepare($sql);
$list_posyandu->execute();

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Playkes</title>
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
        <!-- start sidebar -->
        <div class="left-sidebar-pro">
  <nav id="sidebar" class="">
      <div class="sidebar-header">
          <a href="index.php"><img class="main-logo" src="img/logo/playkes.png" alt="playkes" /></a>
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
                      <a href="index.php">
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
        <!-- end sidebar -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div>
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
										                      	</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">                                                
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<i class="icon nalika-user nalika-user-rounded header-riht-inf" aria-hidden="true"></i>
															<span class="admin-name">Gozali Ahmad Mubarok</span>
															<i class="icon nalika-down-arrow nalika-angle-dw nalika-icon"></i>
														</a>
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
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area" >
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index.php">home <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>  
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="index.php">data playkes <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                              <li><a title="Dashboard v.1" href="data_rumah_sakit.php"><span class="mini-sub-pro">rumah sakit </span></a></li>
                                              <li><a title="data playkes" href="data_puskesmas.php"><span class="mini-sub-pro">puskesmas</span></a></li>
                                              <li><a title="Data Dokter" href="data_posyandu.php"><span class="mini-sub-pro">posyandu</span></a></li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Charts" href="data-dokter.php">Data Dokter <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                          <li><a data-toggle="collapse" data-target="#Charts" href="data-maps.php">Data maps <span class="admin-project-icon nalika-icon nalika-down-arrow"></span></a>
                                          </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>v>
            </div>
          
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							              <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp"> 
											                      <div class="breadcomb-ctn">
                                                <h2>Data posyandu</h2>  
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
       <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>List posyandu</h4> 
                            <div class="add-product">
                            <a class="fa fa-plus" href="tambah-data-posyandu.php">Tambah Data</a>
                            </div>
                            <div class="card" style="background-color: #152036;"> 
                                <div class="card-body">
                                    <table class="table">
                                    <thead>
                                        <th>no</th>
                                        <th>id_posyandu</th>
                                        <th>foto</th>
                                        <th>nama posyandu</th>
                                        <th>alamat</th>
                                        <th>fasilitas</th> 
                                        <th>aksi</th>
                                    </thead>
                                            <tbody>
                                                <?php foreach($list_posyandu as $key => $posyandu) : ?>
                                                <tr>
                                                   <td><?php echo $key+1 ?></td>
                                                    <td><?php echo $posyandu['id_posyandu'] ?></td> 
                                                    <td><?php echo $posyandu['foto'] ?></td> 
                                                    <td><?php echo $posyandu['nama_posyandu'] ?></td>
                                                    <td><?php echo $posyandu['alamat'] ?></td>
                                                    <td><?php echo $posyandu['fasilitas'] ?></td> 
                                                    <td>
                                                        <a href="ubah-data-posyandu.php?id_posyandu=<?php echo $posyandu['id_posyandu'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                        <a onclick="return confirm('Yakin menghapus data ini?')" href="hapus-data-posyandu.php?id_posyandu=<?php echo $posyandu['id_posyandu'] ?>" class="btn btn-danger"><span class="fa fa-trash"></span></i></a>
                                                    </td>
                                                </tr> 
                                                <?php endforeach ?>
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->
    </div>

    <!-- jquery
		============================================ -->
    <script src="assets_admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="assets_admin/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="assets_admin/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="assets_admin/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="assets_admin/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="assets_admin/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="assets_admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="assets_admin/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="assets_admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets_admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="assets_admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="assets_admin/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="assets_admin/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="assets_admin/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="assets_admin/js/calendar/moment.min.js"></script>
    <script src="assets_admin/js/calendar/fullcalendar.min.js"></script>
    <script src="assets_admin/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="assets_admin/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="assets_admin/js/main.js"></script>
</body>

</html>