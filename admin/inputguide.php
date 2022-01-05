<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Tour & Travels | Administrator</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
      <script type="text/javascript">
        tinymce.init({
        selector: "textarea"
        });
      </script>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="beranda.php">Tour & Travels</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="beranda.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="pesan.php">
            <i class="fa fa-fw fa-tasks"></i>
            <span class="nav-link-text">Pemesanan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="wisata.php">
            <i class="fa fa-fw fa-globe"></i>
            <span class="nav-link-text">Wisata</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="kendaraan.php">
            <i class="fa fa-fw fa-car"></i>
            <span class="nav-link-text">Kendaraan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="gallery.php">
            <i class="fa fa-fw fa-photo"></i>
            <span class="nav-link-text">Gallery</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="user.php">
            <i class="fa fa-fw fa-group"></i>
            <span class="nav-link-text">User</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="guide.php">
            <i class="fa fa-fw fa-id-badge"></i>
            <span class="nav-link-text">Tour Guide</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="person.php">
            <i class="fa fa-fw fa-child"></i>
            <span class="nav-link-text">Person</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admin.php">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Admin</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="message.php">
            <i class="fa fa-fw fa-comments"></i>
            <span class="nav-link-text">Message</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">   
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Guide</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Input Guide</div>
        <div class="card-body">
          <div class="table-responsive">
          <form method="post" enctype="multipart/form-data">
          <label>ID Guide</label>
          <input type="text" name="id_guide" class="form-control" placeholder="ID Guide">
          <br>
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama">
          <br>
          <label>Handphone</label>
          <input type="text" name="no_hp" class="form-control" placeholder="Handphone">
          <br>
          <label>Jenis Kelamin</label><br>
          <input type="radio" name="jk" value="Laki - laki" checked="checked">Laki - laki<br>
          <input type="radio" name="jk" value="Perempuan">Perempuan
          <br><br>
          <label>Email</label>
          <input type="text" name="email" class="form-control" placeholder="Email">
          <br>
          <label>Gambar</label>
          <input type="file" name="gambar" class="form-control" placeholder="Gambar">
          <br>
          <button type="submit" class="btn btn-success" name="save">Save</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          </div>
          </form>
          <?php
          include '../koneksi/koneksi.php';
 
          if (isset($_POST['save']))
          {

          $nama= $_FILES['gambar']['name'];
          $lokasi= $_FILES['gambar']['tmp_name'];
          move_uploaded_file($lokasi, "gambar/".$nama);
          $query = mysql_query("INSERT INTO tourguide (id_guide,nama,no_hp,jk,email,gambar) VALUES ('$_POST[id_guide]', '$_POST[nama]', '$_POST[no_hp]', '$_POST[jk]', '$_POST[email]', '$nama')");

          if ($query){
          echo "<script>alert('Berhasil Menginput')</script>";
          echo "<meta http-equiv='refresh' content='1 url=inputguide.php'>";
          }else{
          echo "<script>alert('Gagal Menginput')</script>";
          echo "<meta http-equiv='refresh' content='1 url=inputguide.php'>";
          }
          }
          ?>
        </div>
      </div>
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Tour & Travels <?php echo date("Y");?></small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
