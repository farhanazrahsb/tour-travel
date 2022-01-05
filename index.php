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
							<a href="index.php">Tour & Travels</span></a>
						</h1>
					</div>
				</div>
				<div class="header-right">
				<div class="collapse navbar-collapse" id="myNavbar" style="color: white;">
				  <ul class="nav navbar-nav">
				    <li class="active"><a href="login.php" style="color: white;"><i class="fa fa-lock" aria-hidden="true"></i> Login</a></li>
				    <li class="active"><a href="daftar.php" style="color: white;"><i class="fa fa-user" aria-hidden="true"></i> Daftar</a></li>
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
									<li><a class="active list-border scroll" href="index.php">Home</a></li>
									<li><a href="#destination" class="scroll">Destination</a></li>
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
			<h3>D</h3>
		</div>
		<div class="w3l-about w3l-news">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Destination</h3>
				</div>
				      <?php
				      include ('koneksi/koneksi.php');

				      $halaman = 10;
					  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					  $result = mysql_query("SELECT * FROM wisata");
					  $total = mysql_num_rows($result);
					  $pages = ceil($total/$halaman);            
					  $query = mysql_query("select * from wisata order by id_wisata desc LIMIT $mulai, $halaman")or die(mysql_error);
					  $no =$mulai+1;

				      while ($var=mysql_fetch_array($query)) {
				      ?>
				<div class="wthree-news-grids">
					<div class="col-md-6 agile-news-right-info">
						<div class="col-sm-4">
							<img src="admin/gambar/<?php echo $var['gambar'];?>" height="400" width="170">
						</div>
						<div class="col-sm-8 agile-news-img-info">
							<h2><?php echo $var ['nama']; ?></h2>
							<div class="agileits-w3layouts-border"> </div>
							<p><?php echo $var ['deskripsi']; ?></p>
							<p><h6><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $var ['tanggal']; ?></h6></p>
							<p><h6><i class="fa fa-price" aria-hidden="true"></i> Rp <?php echo $var ['harga']; ?>,-00</h6></p>
							<a href="viewdetail.php?&id_wisata=<?php echo $var['id_wisata']; ?>"><button class="btn btn-info">View</button></a>
						</div>
						<div class="clearfix"> </div><br>
					</div>
				</div>

					<?php
	        		}
    			    ?>
			</div>
			<div class="container">
					<div class="span11" align="center">
						<ul class="pagination">
							<?php for ($i=1; $i<=$pages ; $i++){ ?>
				  			<b><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> |</a></b>
				 
				  			<?php } ?>
						</ul>
								  	  
					</div>
					</div>
		</div>
	</div>
	<!-- //news -->
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="w3-services-top">
			<h3>G</h3>
		</div>
		<div class="w3l-about w3l-gallery">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Gallery</h3>
				</div>
				<div class="gallery-grids">
				<?php
				    include ('koneksi/koneksi.php');

				      $halaman = 20;
					  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					  $result = mysql_query("SELECT * FROM gallery");
					  $total = mysql_num_rows($result);
					  $pages = ceil($total/$halaman);            
					  $query = mysql_query("select * from gallery order by no desc LIMIT $mulai, $halaman")or die(mysql_error);
					  $no =$mulai+1;

				    while ($var=mysql_fetch_array($query)) {
				?>
						<div class="col-md-3 gallery-grid">
							<div class="grid">
								<figure class="effect-apollo">
									<a class="example-image-link" href="admin/gambar/<?php echo $var['gambar'];?>" data-lightbox="example-set" data-title="<?php echo $var ['ket_gambar']; ?>">
										<img src="admin/gambar/<?php echo $var['gambar'];?>" alt="" height="300" width="200"  />
										<figcaption>
										</figcaption>	
									</a>
								</figure>
							</div>
						</div>
						<?php
				    	}
			    		?>
						<div class="clearfix"> </div>
						<script src="js/lightbox-plus-jquery.min.js"> </script>
				</div>
				
			    <div class="container">
					<div class="span11" align="center">
						<ul class="pagination">
							<?php for ($i=1; $i<=$pages ; $i++){ ?>
				  			<b><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> |</a></b>
				 
				  			<?php } ?>
						</ul>
								  	  
					</div>
					</div>
			</div>
		</div>
	</div>
	<!-- //gallery -->
	<!-- about -->
	<div class="about" id="about">
		<div class="w3-about-top">
			<h3>A</h3>
		</div>
		<div class="w3l-about">
			<div class="container">
				<div class="w3ls-heading">
					<h2>About Us</h2>
				</div>
				<div class="w3ls-about-info">
					<p>Selamat datang di website tour and travels, di website ini kami menyediakan paket dan daftar harga tour and travels seluruh indonesia. Dengan dipandu oleh tour guide berpengalaman serta nyaman dan aman dalam perjalanan. Bagi anda yang ingin menjelajahi indonesia atau jika anda ingin membawa dan memanjakan pasangan ataupun orang orang tersayang anda. Silahkan pilih paket tour yang anda inginkan. Terima kasih, salam admin tour and travels.</p>
					<div class="w3ls-about-grids">
						<div class="col-md-3 w3ls-about-grid">
							<img src="images/a1.jpg" alt="" />
						</div>
						<div class="col-md-3 w3ls-about-grid">
							<img src="images/a2.jpg" alt="" />
						</div>
						<div class="col-md-3 w3ls-about-grid">
							<img src="images/a3.jpg" alt="" />
						</div>
						<div class="col-md-3 w3ls-about-grid">
							<img src="images/a4.jpg" alt="" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->
	<!-- services -->
	<div class="payment" id="payment">
		<div class="w3-services-top">
			<h3>S</h3>
		</div>
		<div class="w3l-about w3l-services">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Payment</h3>
				</div>
				<div class="agileits-services-grids">
					<div class="col-md-4 agileits-services-grid">
						<i class="fa fa-lock" style="font-size:36px" aria-hidden="true"></i>
						<h4>Daftar/Login</h4>
						<p>Silahkan mendaftar atau login terlebih dahulu</p>
					</div>
					<div class="col-md-4 agileits-services-grid">
						<i class="fa fa-globe" style="font-size:36px" aria-hidden="true"></i>
						<h4>Memilih Lokasi</h4>
						<p>Memilih lokasi yang ingin dikunjungi</p>
					</div>
					<div class="col-md-4 agileits-services-grid">
						<i class="fa fa-pencil-square-o" style="font-size:36px" aria-hidden="true"></i>
						<h4>Mengisi Form</h4>
						<p>Mengisi form data yang telah disediakan</p>
					</div>
					<div class="col-md-4 agileits-services-grid">
						<i class="fa fa-credit-card" style="font-size:36px" aria-hidden="true"></i>
						<h4>Membayar Tagihan</h4>
						<p>Membayar dengan cara mentransfer ke nomor rekening admin dan sertakan bukti upload</p>
					</div>
					<div class="col-md-4 agileits-services-grid">
						<i class="fa fa-paper-plane" style="font-size:36px" aria-hidden="true"></i>
						<h4>Menunggu Konfirmasi</h4>
						<p>Menunggu konfirmasi dari admin ke pemesan dengan cara mengirim pesan ke email atau menghubungi pemesan</p>
					</div>
					<div class="col-md-4 agileits-services-grid">
						<i class="fa fa-suitcase" style="font-size:36px" aria-hidden="true"></i>
						<h4>Persiapkan Diri Anda</h4>
						<p>Persiapkan diri anda sebelum kami menjemput anda dirumah sesuai tanggal yang anda telah tetapkan</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- testimonial -->
	<div class="testimonial">
		<div class="w3-gallery-top">
			<h3>T</h3>
		</div>
		<div class="w3l-about w3l-gallery">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Tour Guide</h3>
				</div>
				<div class="agileits-services-grids">
				<?php
				    include ('koneksi/koneksi.php');

				      $halaman = 3;
					  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
					  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
					  $result = mysql_query("SELECT * FROM tourguide");
					  $total = mysql_num_rows($result);
					  $pages = ceil($total/$halaman);            
					  $query = mysql_query("select * from tourguide order by id_guide desc LIMIT $mulai, $halaman")or die(mysql_error);
					  $no =$mulai+1;

				    while ($var=mysql_fetch_array($query)) {
				?>
					<div class="col-md-4 agileits-services-grid">
						<img src="admin/gambar/<?php echo $var['gambar'];?>" alt="" height="300" width="300" />
						<p><h3 align="center"><b><?php echo $var ['nama']; ?></b></h3></p>
					</div>
				<?php
				}
				?>
					<div class="clearfix"> </div>
				</div>
				
			    <div class="container">
					<div class="span11" align="center">
						<ul class="pagination">
							<?php for ($i=1; $i<=$pages ; $i++){ ?>
				  			<b><a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?> |</a></b>
				 
				  			<?php } ?>
						</ul>
								  	  
					</div>
					</div>
			</div>
		</div>
	</div>
	<!-- //testimonial -->
	<!-- map -->
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63460.843754234294!2d106.83001958186178!3d-6.223755290136478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta%2C+Daerah+Khusus+Ibukota+Jakarta!5e0!3m2!1sid!2sid!4v1517977988717" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- //map -->
	<!-- contact -->
	<div class="contact" id="contact">
		<div class="w3-contact-top">
			<h3>C</h3>
		</div>
		<div class="w3l-about w3l-team">
			<div class="container">
				<div class="w3ls-heading">
					<h3>Contact</h3>
				</div>
				<div class="agile-contact-grids">
					<div class="col-md-5 address">
						<h4>Contact Info</h4>
						<div class="address-row">
							<div class="col-md-2 w3-agile-address-left">
								<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 w3-agile-address-right">
								<h5>Visit Us</h5>
								<p>Jl. Kesatuan, Jakarta Pusat. No. 110 </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-row">
							<div class="col-md-2 w3-agile-address-left">
								<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 w3-agile-address-right">
								<h5>Mail Us</h5>
								<p><a href="mailto:tourandtravel@gmail.com"> tourandtravel@gmail.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="address-row">
							<div class="col-md-2 w3-agile-address-left">
								<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
							</div>
							<div class="col-md-10 w3-agile-address-right">
								<h5>Call Us</h5>
								<p>+62 821-1212-3232</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="col-md-7 contact-form">
						<form method="post" enctype="multipart/form-data">
							<input type="text" name="nama_depan" placeholder="First Name" required="">
							<input class="email" name="nama_belakang" type="text" placeholder="Last Name" required="">
							<input type="text" name="no_hp" placeholder="Mobile Number" required="">
							<input class="email" name="email" type="email" placeholder="Email" required="">
							<textarea name="message" placeholder="Message" required=""></textarea>
							<input type="submit" name="save" value="SUBMIT">
						</form>
						<?php
				          include 'koneksi/koneksi.php';

				          if (isset($_POST['save']))
				          {
				          $query = mysql_query("INSERT INTO contact (nama_depan,nama_belakang,no_hp,email,message) VALUES ('$_POST[nama_depan]', '$_POST[nama_belakang]', '$_POST[no_hp]', '$_POST[email]', '$_POST[message]')");

				          if ($query){
				          echo "<script>alert('Berhasil Menginput')</script>";
				          echo "<meta http-equiv='refresh' content='1 url=index.php'>";
				          }else{
				          echo "<script>alert('Gagal Menginput')</script>";
				          echo "<meta http-equiv='refresh' content='1 url=index.php'>";
				          }
				          }
				          ?>         
					</div>
					<div class="clearfix"> </div>	
				</div>
			</div>
		</div>
	</div>
	<!-- //contact -->
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
</body>	
</html>