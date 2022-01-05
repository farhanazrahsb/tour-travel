<?php
include "cekuser.php";
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
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
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info1">
									<h3>M</h3>
									<h4>Magelang</h4>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info2">
									<h3>R</h3>
									<h4>Raja Ampat</h4>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info3">
									<h3>K</h3>
									<h4>Karimun Jawa</h4>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top4">
							<div class="container">
								<div class="agileits-banner-info4">
									<h3>B</h3>
									<h4>Bali</h4>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<!--banner Slider starts Here-->
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
									<li><a class="active list-border scroll" href="#destination" class="scroll">Destination</a></li>
									<li><a href="#gallery" class="scroll">Gallery</a></li>
									<li><a href="#about" class="scroll">About</a></li>
									<li><a href="#services" class="scroll">Service</a></li>
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
			<h3>D</h3>
		</div>
		<div class="w3l-about w3l-news">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Destination</h3>
				</div>
				<?php
                include ('../koneksi/koneksi.php');

                $id_wisata=$_GET['id_wisata'];
                $query = mysql_query ("SELECT * FROM wisata WHERE id_wisata='$id_wisata'");
                $no=1;
                while ($var=mysql_fetch_array($query)) {
                ?>
				<div class="agile-contact-grids">
					<div class="col-md-7 address">
						<h2><?php echo $var ['nama']; ?></h2>					
						<div class="agileits-w3layouts-border"> </div>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $var ['tanggal']; ?></h6>
						<img class="img-responsive" src="../admin/gambar/<?php echo $var['gambar'];?>">
						<p><?php echo $var ['keterangan']; ?></p>
					</div>
					<div class="col-md-5 contact-form">
					<h3>Rincian</h3>
					<div class="agileits-w3layouts-border"> </div><br>
					<label>Durasi :</label><br>
					<?php echo $var ['durasi']; ?><br><br>
					<label>Rincian Paket :</label>
					<?php echo $var ['rinci']; ?><br>
					<h5><i>Note : Minimal anggota untuk 2 orang, jika ingin lebih akan kena biaya tambahan</i></h5>
					<h5><i>Note : Pilihan hotel Hotel Ibis, Hotel Rocky</i></h5><br><br>
					<label>Harga :</label><br>
					<?php echo $var ['harga']; ?><br>
					<h5><i>Note : Biaya belum termasuk transportasi</i></h5><br><br>
					<label>Kegiatan :</label><br>
					<?php echo $var ['kegiatan']; ?><br>
					<h5><i>Note : Daftar kegiatan sewaktu waktu bisa berubah</i></h5><br><br>
					</div>
					<form method="post" name="autoSumForm" enctype="multipart/form-data">
					<h2>Isi Data Diri :</h2>
					<div class="agileits-w3layouts-border"> </div><br>
					<input type="hidden" name="username" class="form-control" value="<?php echo $_SESSION['username'] ?>" readonly><br>
					<input type="hidden" name="id_wisata" class="form-control" value="<?php echo $var ['id_wisata']; ?>" readonly><br>
					<input type="hidden" name="status" class="form-control" value="Belum Di Bayar" readonly><br>
					<div class="col-md-6 address">
					<label>Tanggal Pesan</label>
					<input class="form-control" type="text" name="tanggal_pesan" value="<?php date_default_timezone_set("Asia/Jakarta");echo date("l, d-m-Y / H:i");?>" readonly><br>
					<label>Nama Wisata</label>
					<input type="text" name="nama_wisata" class="form-control" placeholder="Nama Wisata" value="<?php echo $var ['nama']; ?>" readonly><br>
					<label>Lokasi</label>
					<input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="<?php echo $var ['lokasi']; ?>" readonly><br>
					<label>Harga</label>
					<input type="text" name="harga_paket" class="form-control" placeholder="Harga" value="<?php echo $var ['harga']; ?>" readonly><br>
					<label>Nama Pemesan</label>
					<input type="text" name="nama_pesan" class="form-control" placeholder="Nama Pemesan"><br>
					<label>Nomor Handphone</label>
					<input type="text" name="no_hp" class="form-control" placeholder="Nomor Handphone"><br>
					<label>Email Pemesan</label>
					<input type="text" name="email" class="form-control" placeholder="Email Pemesan"><br>
					</div>
					<div class="col-md-6 address">
					<label>Jumlah Anggota</label>
					<input type="text" name="seat" class="form-control" placeholder="Jumlah Anggota" value="2" readonly><br>
					<label>Tambahan Anggota</label>
					<select name="id_anggota" id="id_anggota" class="selectpicker form-control">
					<option selected>--Pilih Tambah Anggota--</option>
					<?php 
					include "../koneksi/koneksi.php";

					$query=mysql_query("select * from extra_person order by id_anggota asc");
					while($row=mysql_fetch_array($query))
					{
					?>
					<option value="<?php  echo $row['id_anggota']; ?>"><?php  echo $row['jumlah']; ?></option>
					<?php 
					}
					?>
					</select><br>
					<label>Harga Penambahan Anggota</label>
					<select name="harga_per" class="form-control" id="harga_per">
						<option selected>-- Pilih Harga --</option>
					</select>
					<br>
					<label>Kendaraan</label>
					<select name="id_kendaraan" id="id_kendaraan" class="selectpicker form-control">
					<option selected>--Pilih Kendaraan--</option>
					<?php 
	                include "../koneksi/koneksi.php";
	                 
	                $query=mysql_query("select * from kendaraan order by id_kendaraan asc");
					while($row=mysql_fetch_array($query))
					{
					?>
					<option value="<?php  echo $row['id_kendaraan']; ?>"><?php  echo $row['nama_kendaraan']; ?> - Kapasitas <?php  echo $row['kapasitas']; ?> Orang</option>
					<?php 
					}
					?>
					</select><br>
					<label>Harga Kendaraan</label>
					<select name="harga_kend" class="form-control" id="harga_kend">
						<option selected>-- Pilih Harga --</option>
					</select>
					<br>
					<label>Tanggal Berangkat</label>
					<input type="date" name="date" class="form-control"><br>
					<label>Alamat</label>
					<textarea name="alamat" class="form-control" placeholder="Alamat"></textarea><br>
					<button type="submit" class="btn btn-success" name="save">Submit</button>
         			<button type="reset" class="btn btn-warning">Reset</button>
					</form>
					<?php
			          include '../koneksi/koneksi.php';

			          if (isset($_POST['save']))
			          {

			          $query = mysql_query("INSERT INTO pesan (status, username, id_wisata, tanggal_pesan, nama_wisata, lokasi, harga_paket, nama_pesan, no_hp, email, seat, id_anggota, harga_per, id_kendaraan, harga_kend, date, alamat) VALUES ('$_POST[status]', '$_POST[username]', '$_POST[id_wisata]', '$_POST[tanggal_pesan]', '$_POST[nama_wisata]', '$_POST[lokasi]', '$_POST[harga_paket]', '$_POST[nama_pesan]', '$_POST[no_hp]', '$_POST[email]', '$_POST[seat]', '$_POST[id_anggota]', '$_POST[harga_per]', '$_POST[id_kendaraan]', '$_POST[harga_kend]', '$_POST[date]', '$_POST[alamat]')");

			          if ($query){
			          echo "<script>alert('Berhasil Memesan, Silahkan Tunggu Konfirmasi Kembali')</script>";
			          echo "<meta http-equiv='refresh' content='1 url=reservation.php'>";
			          }else{
			          echo "<script>alert('Gagal Memesan, Silahkan Ulang Kembali')</script>";
			          echo "<meta http-equiv='refresh' content='1 url=beranda.php'>";
			          }
			          }
			         ?>         
					</div>
					<div class="clearfix"> </div>			
				</div>
				<?php
		        }
	    		?>
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
$(function(){
$('#id_anggota').change(function(){
$('#harga_per').load('cari_harga_anggota.php?anggota=' + $(this).val(),function(responseTxt,statusTxt,xhr)
{
if(statusTxt=="success")
$('.loading').remove();                       
});
return false;
});
});
</script>
<script type="text/javascript">
$(function(){
$('#id_kendaraan').change(function(){                      
$('#harga_kend').load('cari_harga_kendaraan.php?kendaraan=' + $(this).val(),function(responseTxt,statusTxt,xhr)
{
if(statusTxt=="success")
$('.loading').remove();                       
});
return false;
});
});
</script>
</body>	
</html>