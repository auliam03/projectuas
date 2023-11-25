
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi pengelolaan laundry</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-blue">
    <div class="container">
      <a href="assets/index3.html" class="navbar-brand">
        <img src="assets/dist/img/logo-laundry.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>Laundry</strong></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="#tentang" class="nav-link btn-primary"><strong>Tentang Kami</strong></a>
          </li>
          <li class="nav-item">
            <a href="#kontak" class="nav-link btn-primary"><strong>Kontak Kami</strong></a>
              </li>
          <li class="nav-item">
            <a href="#testimoni" class="nav-link btn-primary"><strong>Testimoni Pelanggan</strong></a>
              </li>
            </ul>
          </li>
		</ul>
      </div>

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
		<li class="nav-item">
			<a href="#" class="navbar-light nav-link"><strong>Cek status laundry anda</strong></a>
		</li>
		</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> <strong>Laundry </strong><small> Mencuci paling bersih!</small></h1>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
			<section id="tentang">
            <div class="card">
              <div class="card-body">
				  <p class="card-img-top">
					<center>
						<img src="/pustaka/assets/dist/img/laundry2.png" alt="tentang-kami">
						<h4><strong> Tentang Kami</strong></h4>
                  Kami hadir untuk membantu ibu rumah tangga dalam mencuci pakaian 
              </div>
            </div>
			</section>
			<section id="testimoni">
            <div class="card">
              <div class="card-body">
				  <p class="card-img-top">
					<center>
						<img width="100%" src="/pustaka/assets/dist/img/laundry3.png" alt="testimoni" class="img-fluid">
						<h4>Testimoni Pelanggan Kami</h4>
						Pelanggan kami memberikan respon yang sangat positif terhadap pelayanan kami
              </div>
            </div>
			</section>

			<section id="kontak">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title"><strong> Kontak Kami</strong></h5>

                <p class="card-text">
                 Hubungi Kami melalui WhatsApp dan Instagram
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
		  </section>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
      
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
	<section id="kontak">
		<div class="col-lg">
			<strong>Kunjungi outlet terdekat kami</strong>
			<iframe class="rounded"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126925.28932986902!2d106.92526004522468!3d-6.208827850583487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698dd6e28035a3%3A0xeb68af412b8007e5!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Cut%20Mutia%20Bekasi%20(UBSI%20Bekasi)!5e0!3m2!1sid!2sid!4v1700795783365!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</section>

    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>
</body>
</html>
