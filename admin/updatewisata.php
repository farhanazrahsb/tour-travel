<?php
include "../koneksi/koneksi.php";
if(isset($_GET['no']))
{
 $sql_query="SELECT * FROM wisata WHERE no=".$_GET['no'];
 $result_set=mysql_query($sql_query);
 $row=mysql_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
 // variables for input data
$id_wisata      = $_POST['id_wisata'];
$nama           = $_POST['nama'];
$lokasi         = $_POST['lokasi'];
$harga          = $_POST['harga'];
$durasi         = $_POST['durasi'];
$rinci          = $_POST['rinci'];
$deskripsi      = $_POST['deskripsi'];
$keterangan     = $_POST['keterangan'];
$kegiatan       = $_POST['kegiatan'];
 // variables for input data
 
 // sql query for update data into database
 $sql_query = "update wisata SET id_wisata='$id_wisata', nama='$nama', lokasi='$lokasi', harga='$harga', durasi='$durasi', rinci='$rinci', deskripsi='$deskripsi', keterangan='$keterangan', kegiatan='$kegiatan' WHERE no=".$_GET['no'];
 // sql query for update data into database
 
 // sql query execution function
 if(mysql_query($sql_query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Berhasil Diupdate');
  window.location.href='wisata.php';
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
 header("Location: wisata.php");
}
?>
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
        <li class="breadcrumb-item active">Wisata</li>
      </ol>
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-plus"></i> Update Wisata</div>
        <div class="card-body">
          <div class="table-responsive">
          <form method="post">
          <label>ID Wisata</label>
          <input type="text" name="id_wisata" class="form-control" placeholder="ID Wisata" readonly="readonly" value="<?php echo $row['id_wisata']; ?>">
          <br>
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo $row['nama']; ?>">
          <br>
          <label>Lokasi</label>
          <input type="text" name="lokasi" class="form-control" placeholder="Lokasi" value="<?php echo $row['lokasi']; ?>">
          <br>
          <label>Harga</label>
          <input type="text" name="harga" class="form-control" placeholder="Harga" value="<?php echo $row['harga']; ?>">
          <br>
          <label>Durasi</label>
          <input type="text" name="durasi" class="form-control" placeholder="Durasi" value="<?php echo $row['durasi']; ?>">
          <br>
          <label>Deskripsi</label>
          <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $row['deskripsi']; ?>">
          <br>
          <label>Rincian</label>
          <textarea name="rinci" value="<?php echo $row['rinci']; ?>"></textarea>
          <br>
          <label>Keterangan</label>
          <textarea name="keterangan" value="<?php echo $row['keterangan']; ?>"></textarea>
          <br>
          <label>Kegiatan</label>
          <textarea name="kegiatan" value="<?php echo $row['kegiatan']; ?>"></textarea>
          <br>
          <button type="submit" class="btn btn-primary" name="btn-update">Update</button>
          <button type="submit" class="btn btn-warning" name="btn-cancel">Cancel</button>
          </div>
          </form>
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
