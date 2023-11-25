  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-blue">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="../assets/dist/img/logo-laundry.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light"><strong>Laundry</strong></span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="<?= base_url('auth');?>tentang" class="nav-link btn-primary"><strong>Tentang Kami</strong></a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('auth');?>kontak" class="nav-link btn-primary"><strong>Kontak Kami</strong></a>
              </li>
          <li class="nav-item">
            <a href="<?= base_url('auth');?>testimoni" class="nav-link btn-primary"><strong>Testimoni Pelanggan</strong></a>
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
