
<?php include "connection.php"; ?>

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
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/playkes.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6r-00ObyQUYCkiNhIFZiLza8ZwEgIjto&callback=initialize" async defer></script>
<script type="text/javascript">   
    var marker;
    function initialize(){
        // Variabel untuk menyimpan informasi lokasi
        var infoWindow = new google.maps.InfoWindow;
        //  Variabel berisi properti tipe peta
        var mapOptions = {
                mapId: "3a3b33f0edd6ed2a", 
            mapTypeId: google.maps.MapTypeId.ROADMAP
        } 
        // Pembuatan peta
        var peta = new google.maps.Map(document.getElementById('googleMap'), mapOptions);      
		// Variabel untuk menyimpan batas kordinat
        var bounds = new google.maps.LatLngBounds();
        // Pengambilan data dari database MySQL
        <?php
		// Sesuaikan dengan konfigurasi koneksi Anda
			$host 	  = "localhost";
			$username = "root";
			$password = "";
			$Dbname   = "p2";
			$db 	  = new mysqli($host,$username,$password,$Dbname);
			
			$query = $db->query("SELECT * FROM lokasi ORDER BY nama_lokasi ASC");
			while ($row = $query->fetch_assoc()) {
				$nama = $row["nama_lokasi"];
				$lat  = $row["latitude"];
				$long = $row["longitude"];
				echo "addMarker($lat, $long, '$nama');\n";
			}
        ?> 
        // Proses membuat marker 
        function addMarker(lat, lng, info){
            var lokasi = new google.maps.LatLng(lat, lng);
            bounds.extend(lokasi);
            var marker = new google.maps.Marker({
                map: peta,
                position: lokasi
            });       
            peta.fitBounds(bounds);
            bindInfoWindow(marker, peta, infoWindow, info);
         }
        // Menampilkan informasi pada masing-masing marker yang diklik
        function bindInfoWindow(marker, peta, infoWindow, html){
            google.maps.event.addListener(marker, 'click', function() {
            infoWindow.setContent(html);
            infoWindow.open(peta, marker);
          });
        }
    }
</script>
      
</head>

<body>
<!-- sidebar -->
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
                    <div class="logo-pro" style="background-color: #152036;">
                        <!-- <a href="index.php"><img class="main-logo" src="img/logo/playkes.png" alt="" /></a> -->
                    </div>
                </div>
            </div>
        </div> 
        <div class="header-advance-area" style="height: 60px;">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <div class="breadcome-heading">
												                      <form role="search" class="">
												                      	<!-- <input type="text" placeholder="Search..." class="form-control">
												                      	<a href=""><i class="fa fa-search"></i></a> -->
											                      	</form>
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
                                                        <li><a href="../login.html"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
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
            </div>
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
				                   		<h2>Home Playkes</h2>
			 			             		</div>
						             	</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
            <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Rumah Sakit</b></h4> 
                                <h4 class="text-left text-uppercase"><b>3</b></h4> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-bottom:1px;">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Puskemas</b></h4> 
                                <h4 class="text-left text-uppercase"><b>3</b></h4> 
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="admin-content analysis-progrebar-ctn res-mg-t-30">
                                <h4 class="text-left text-uppercase"><b>Posyandu</b></h4> 
                                <h4 class="text-left text-uppercase"><b>9</b></h4> 
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            </div>  
          <!-- map start -->
          <div class="breadcome-area">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="breadcome-list">
                    <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"> 
                        <div class="breadcomb-ctn">
                           <h2>Peta</h2>
                           <div style="width: 1050px; height: 450px;" id="googleMap">
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
            <!-- end map -->
            <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020 <a href="#">Gozali</a> All rights reserved.</p>
                        </div>
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
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- Google map JS
		============================================ -->
        <!-- <script src="js/google.maps/google.maps-active.js"></script> -->
        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6r-00ObyQUYCkiNhIFZiLza8ZwEgIjto&callback=initialize"></script> -->
</script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>