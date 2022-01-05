<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Tours & Travels | Find Your Destination</title>
	<meta name="keywords" content="Winter Login Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/font-awesome1.css">
	<link rel="stylesheet" href="css/style1.css">
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
	<div class="agile-login">
		<div class="wrapper">
			<h2>Daftar</h2>
			<div class="w3ls-form">
				<form method="post" enctype="multipart/form-data">
					<label>Nama</label>
					<input type="text" name="nama" placeholder="Nama" required/>
					<label>Username</label>
					<input type="text" name="username" placeholder="Username" required/>
					<label>Password</label>
					<input type="password" name="password" placeholder="Password" required />
					<label>Email</label>
					<input type="text" name="email" placeholder="Email" required/>
					<input type="submit" name="save" value="Daftar" />
				</form>
				<?php
		          include 'koneksi/koneksi.php';

		          if (isset($_POST['save']))
		          {
		          $query = mysql_query("INSERT INTO user (nama,username,password,email) VALUES ('$_POST[nama]', '$_POST[username]', '$_POST[password]', '$_POST[email]')");

		          if ($query){
		          echo "<script>alert('Berhasil Mendaftar, Silahkan Login Kembali')</script>";
		          echo "<meta http-equiv='refresh' content='1 url=index.php'>";
		          }else{
		          echo "<script>alert('Gagal Mendaftar, Silahkan Daftar Ulang Kembali')</script>";
		          echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
		          }
		          }
		          ?>         
			</div><br>
			<h4 style="color: orange;">Sudah punya akun? <a href="login.php"><u style="color: white;">Login disini</u></a></h4>
		</div>
		<br>
		<div class="copyright">
		<p>© <?php echo date('Y'); ?> Tours & Travels . All Rights Reserved</p> 
	</div>
	</div>
	
</body>
</html>