<?php
include "../koneksi/koneksi.php";
include "cekuser.php";
if(isset($_GET['no']))
{
 $no = $_GET['no'];
 $sql_query=mysql_query('SELECT * FROM user WHERE no="'.$no.'"');
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$nama           = $_POST['nama'];
$username       = $_POST['username'];
$password       = $_POST['password'];
$email          = $_POST['email'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "UPDATE user SET nama='$nama', username='$username', password='$password', email='$email' WHERE username='$username'";
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='beranda.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('Data Gagal Diupdate');
  </script>
  <?php
 }
 // sql query execution function
}
if(isset($_POST['btn-cancel']))
{
 header("Location: beranda.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tour & Travels | Find Your Destination</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Global Tours Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- gallery -->
<link rel="stylesheet" href="css/lightbox.css">
<!-- //gallery -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Kaushan+Script&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<div class="banner-top">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">
							<div class="container">
								<div class="agileits-banner-info">
									<h3>L</h3>
									<h4>Lombok</h4>
								</div>	
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- banner -->
	<div class="banner">
		<div class="header">
			<div class="container">
				<div class="header-left">
					<div class="w3layouts-logo">
						<h1>
							<a href="beranda.php">Tour & Travels</span></a>
						</h1>
					</div>
				</div>
				<div class="header-right">
				<div class="collapse navbar-collapse" id="myNavbar" style="color: white;">
				  <ul class="nav navbar-nav">
				    <li class="active"><a href="#" style="color: white;"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['username'] ?></a></li>
				    <li class="dropdown">
				      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: white;"> <i class="fa fa-wrench" aria-hidden="true"></i> Setting
				      <span class="caret"></span>
				      <ul class="dropdown-menu">
				        <li><a href="profile.php"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
				        <li><a href="reservation.php"><i class="fa fa-book" aria-hidden="true"></i> Reservation</a></li>
				        <li><a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i> Logout</a></li>
				      </ul>
				    </li>
				  </ul>
 				<i class="fa fa-phone" aria-hidden="true"></i> +62 821-1212-3232
				</div> 
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="top-nav">
						<nav class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li><a href="beranda.php">Home</a></li>
									<li><a class="active list-border scroll" href="#destination" class="scroll">Reservation</a></li>
									<li><a href="#gallery" class="scroll">Gallery</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#payment" class="scroll">Payment</a></li>
									<li><a class="list-border1 scroll" href="#contact" class="scroll">Contact</a></li>
								</ul>	
								<div class="clearfix"> </div>
							</div>	
						</nav>		
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- news -->
	<div class="destination" id="destination">
		<div class="w3-news-top">
			<h3>R</h3>
		</div>
		<div class="w3l-about w3l-news">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Reservation</h3>
				</div>
				<?php
		          $username = $_SESSION['username'];
		          $query=mysql_query("select * from pesan where username='".$username."'") or die (mysql_error());
		          while($row=mysql_fetch_array($query)){
		        ?>
				<div class="agile-contact-grids">
				<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
              	<th colspan="23" style="color: red;">* Note : Apabila anda tidak melakukan pembayaran lebih dari 3 hari maka pesanan akan otomatis gagal</th>
              </tr>
                <tr>
                  <th>No</th>
                  <th>Status</th>
                  <th>Tanggal Pesan</th>
                  <th>Nama Wisata</th>
                  <th>Lokasi</th>
                  <th>Harga Paket</th>
                  <th>Nama Pemesan</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Jumlah Anggota</th>
                  <th>Tambah Anggota</th>
                  <th>Harga Tambah Anggota</th>
                  <th>Kendaraan</th>
                  <th>Harga Kendaraan</th>
                  <th>Total</th>
                  <th>Tanggal Berangkat</th>
                  <th>Nama Rekening</th>
                  <th>Nama Bank</th>
                  <th>Nomor Rekening</th>
                  <th>Rekening Tour</th>
                  <th>Total Transfer</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include ('../koneksi/koneksi.php');

                $query = mysql_query ("SELECT * FROM pesan WHERE username='$username' order by tanggal_pesan asc");
                $no=1;
                while ($var=mysql_fetch_array($query)) {
                $abc= $var['harga_paket'] + $var['harga_per'] + $var['harga_kend'];
                $kend=mysql_fetch_array(mysql_query("SELECT nama_kendaraan FROM kendaraan WHERE id_kendaraan='$var[id_kendaraan]'"));
                $angg=mysql_fetch_array(mysql_query("SELECT jumlah FROM extra_person WHERE id_anggota='$var[id_anggota]'"));
              ?>
              
                <tr>
                <td><?php echo $no ?></td>
                <td><b><?php echo $var ['status']; ?></b></td>
                <td><?php echo $var ['tanggal_pesan']; ?></td>
                <td><?php echo $var ['nama_wisata']; ?></td>
                <td><?php echo $var ['lokasi']; ?></td>
                <td><b><?php echo $var ['harga_paket']; ?></b></td>
                <td><?php echo $var ['nama_pesan']; ?></td>
                <td><?php echo $var ['no_hp']; ?></td>
                <td><?php echo $var ['email']; ?></td>
                <td><?php echo $var ['seat']; ?></td>
                <td><?php echo $angg ['jumlah']; ?></td>
                <td><b><?php echo $var ['harga_per']; ?></b></td>
                <td><?php echo $kend ['nama_kendaraan']; ?></td>
                <td><b><?php echo $var ['harga_kend']; ?></b></td>
                <td><b style="color: red;"><?php echo $abc; ?></b></td>
                <td><?php echo $var ['date']; ?></td>
                <td><?php echo $var ['nama_rek']; ?></td>
                <td><?php echo $var ['nama_bank']; ?></td>
                <td><?php echo $var ['no_rek']; ?></td>
                <td><?php echo $var ['no_rek_tour']; ?></td>
                <td><b style="color: red;"><?php echo $var ['total_tf']; ?></b></td>
                <td><?php echo $var ['alamat']; ?></td>
                <td><?php echo "<a class='fa fa-pencil-square-o' title='Lengkapi Data' href='updatepesan.php?no=$var[no]'></a>"; ?></td>
                </tr>
                <tr><th colspan="23"></th></tr>
                
              <?php
              $no++;
              }
              ?>
              </tbody>
            </table>
            </div>
					
					<div class="clearfix"> </div>			
				</div>
				<?php
				}
				?>
		</div>
	</div>
	<div class="w3l-about w3l-gallery">
			<div class="container">
				<?php
		          $username = $_SESSION['username'];
		          $query=mysql_query("select * from pesan2 where username='".$username."'") or die (mysql_error());
		          while($row=mysql_fetch_array($query)){
		        ?>
				<div class="agile-contact-grids">
				<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
              <tr>
              	<th colspan="22" style="color: red;">* Note : Apabila anda tidak melakukan pembayaran lebih dari 3 hari maka pesanan akan otomatis gagal</th>
              </tr>
              <tr>
              	<th colspan="22" style="color: blue;">* Note : Pemesanan tanpa menggunakan jasa transportasi dan penambahan anggota</th>
              </tr>
                <tr>
                  <th>No</th>
                  <th>Status</th>
                  <th>Tanggal Pesan</th>
                  <th>Nama Wisata</th>
                  <th>Lokasi</th>
                  <th>Harga Paket</th>
                  <th>Nama Pemesan</th>
                  <th>Handphone</th>
                  <th>Email</th>
                  <th>Jumlah Anggota</th>
                  <th>Total</th>
                  <th>Tanggal Berangkat</th>
                  <th>Nama Rekening</th>
                  <th>Nama Bank</th>
                  <th>Nomor Rekening</th>
                  <th>Rekening Tour</th>
                  <th>Total Transfer</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                include ('../koneksi/koneksi.php');

                $query = mysql_query ("SELECT * FROM pesan2 WHERE username='$username' order by tanggal_pesan asc");
                $no=1;
                while ($var=mysql_fetch_array($query)) {
              ?>
              
                <tr>
                <td><?php echo $no ?></td>
                <td><b><?php echo $var ['status']; ?></b></td>
                <td><?php echo $var ['tanggal_pesan']; ?></td>
                <td><?php echo $var ['nama_wisata']; ?></td>
                <td><?php echo $var ['lokasi']; ?></td>
                <td><b><?php echo $var ['harga_paket']; ?></b></td>
                <td><?php echo $var ['nama_pesan']; ?></td>
                <td><?php echo $var ['no_hp']; ?></td>
                <td><?php echo $var ['email']; ?></td>
                <td><?php echo $var ['seat']; ?></td>
                <td><b style="color: red;"><?php echo $var ['harga_paket']; ?></b></td>
                <td><?php echo $var ['date']; ?></td>
                <td><?php echo $var ['nama_rek']; ?></td>
                <td><?php echo $var ['nama_bank']; ?></td>
                <td><?php echo $var ['no_rek']; ?></td>
                <td><?php echo $var ['no_rek_tour']; ?></td>
                <td><b style="color: red;"><?php echo $var ['total_tf']; ?></b></td>
                <td><?php echo $var ['alamat']; ?></td>
                <td><?php echo "<a class='fa fa-pencil-square-o' title='Lengkapi Data' href='updatepesan2.php?no=$var[no]'></a>"; ?></td>
                </tr>
                <tr><th colspan="22"></th></tr>
                
              <?php
              $no++;
              }
              ?>
              </tbody>
            </table>
            </div>
					
					<div class="clearfix"> </div>			
				</div>
				<?php
				}
				?>
		</div>
	</div>
</div>
	<!-- //news -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="copyright">
				<p>© <?php echo date('Y'); ?> Tours & Travels . All Rights Reserved </p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
	<script type="text/javascript">    
    <?php echo $jsArray; ?>  
    function changeValue(id_kendaraan){  
    document.getElementById('harga').value = dtMhs[id_kendaraan].nama_kendaraan;  
    };  
    </script> 
<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('harga1').value;
      var txtSecondNumberValue = document.getElementById('harga').value;
      var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}
</script>
</body>	
</html>