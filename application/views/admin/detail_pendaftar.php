<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>PMB SESAMA - UNIPA</title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url(); ?>/assets/backend/startbootstrap/css/sb-admin-2.min.css" rel="stylesheet">
	<!-- Custom styles for this page -->
	<link href="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<style type="text/css">
		.alert.alert-server {
			margin-bottom: 0;
		}

		/* 
		#DataPribadi1 table.table.table-sm tr:nth-child(1) td:nth-child(1) {
			width: 250px;
		} */

		#DataPribadi1 table.table.table-sm tr:nth-child(2) td:nth-child(2) {
			width: 20px;
		}
	</style>

</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('administrator'); ?>">
				<!--                 <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div> -->
				<div class="sidebar-brand-text mx-3">PMB SESAMA</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item <?php echo ($this->uri->segment(2) == "") ? "active" : ""; ?>">
				<a class="nav-link" href="<?php echo site_url('administrator'); ?>">
					<i class="fas fa-fw fa-laptop"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider">
			<?php if ($this->ion_auth->in_group('admin')) { ?>
				<!-- Heading -->
				<div class="sidebar-heading">
					Pendaftaran
				</div>
				<!-- Data Pendaftar -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "datapendaftar" || $this->uri->segment(2) == "slider" || $this->uri->segment(2) == "agenda" || $this->uri->segment(2) == "informasi") ? "active" : ""; ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePendaftaran" aria-expanded="true" aria-controls="collapsePendaftaran">
						<i class="fas fa-fw fa-users"></i>
						<span>Pendaftaran</span>
					</a>
					<div id="collapsePendaftaran" class="collapse <?php echo ($this->uri->segment(2) == "datapendaftar" || $this->uri->segment(2) == "slider" || $this->uri->segment(2) == "agenda" || $this->uri->segment(2) == "informasi") ? "show" : ""; ?>" aria-labelledby="headingPendaftaran" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "datapendaftar") ? "active" : ""; ?>" href="<?php echo site_url('administrator/datapendaftar'); ?>">Data Pendaftar</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "slider") ? "active" : ""; ?>" href="<?php echo site_url('administrator/slider'); ?>">Slider Depan</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "agenda") ? "active" : ""; ?>" href="<?php echo site_url('administrator/agenda'); ?>">Agenda Penerimaan</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "informasi") ? "active" : ""; ?>" href="<?php echo site_url('administrator/informasi'); ?>">Informasi</a>
						</div>
					</div>
				</li>

				<!--                 <li class="nav-item <?php // echo ($this->uri->segment(2) == "pengaturan") ? "active" : ""; 
															?>">
                <a class="nav-link" href="<?php // echo site_url('administrator/pengaturan'); 
											?>">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Pengaturan</span></a>
                </li> -->

				<!-- Divider -->
				<hr class="sidebar-divider">

				<!-- Heading -->
				<div class="sidebar-heading">
					Referensi Data
				</div>

				<!-- Data Pribadi -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "ref_agama" || $this->uri->segment(2) == "ref_statusmenikah") ? "active" : ""; ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatapribadi" aria-expanded="true" aria-controls="collapseDatapribadi">
						<i class="fas fa-fw fa-user"></i>
						<span>Data Pribadi</span>
					</a>
					<div id="collapseDatapribadi" class="collapse <?php echo ($this->uri->segment(2) == "ref_agama" || $this->uri->segment(2) == "ref_statusmenikah") ? "show" : ""; ?>" aria-labelledby="headingDatapribadi" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_agama") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_agama'); ?>">Agama</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_statusmenikah") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_statusmenikah'); ?>">Status Menikah</a>
						</div>
					</div>
				</li>


				<!-- Data Pilihan Prodi -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "ref_fakultas" || $this->uri->segment(2) == "ref_prodi") ? "active" : ""; ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePilihanprodi" aria-expanded="true" aria-controls="collapsePilihanprodi">
						<i class="fas fa-fw fa-building"></i>
						<span>Pilihan Program Studi</span>
					</a>
					<div id="collapsePilihanprodi" class="collapse <?php echo ($this->uri->segment(2) == "ref_fakultas" || $this->uri->segment(2) == "ref_prodi") ? "show" : ""; ?>" aria-labelledby="headingPilihanprodi" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_fakultas") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_fakultas'); ?>">Data Fakultas</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_prodi") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_prodi'); ?>">Data Prodi</a>
						</div>
					</div>
				</li>

				<!-- Data Wilayah -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "ref_prov" || $this->uri->segment(2) == "ref_kab" || $this->uri->segment(2) == "ref_kec" || $this->uri->segment(2) == "ref_des") ? "active" : ""; ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDatawiayah" aria-expanded="true" aria-controls="collapseDatawiayah">
						<i class="fas fa-fw fa-map-marked"></i>
						<span>Data Wilayah</span>
					</a>
					<div id="collapseDatawiayah" class="collapse <?php echo ($this->uri->segment(2) == "ref_prov" || $this->uri->segment(2) == "ref_kab" || $this->uri->segment(2) == "ref_kec" || $this->uri->segment(2) == "ref_des") ? "show" : ""; ?>" aria-labelledby="headingDatawiayah" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_prov") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_prov'); ?>">Data Provinsi</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_kab") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_kab'); ?>">Data Kabupaten</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_kec") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_kec'); ?>">Data Kecamatan/Distrik</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_des") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_des'); ?>">Data Kelurahan/Desa</a>
						</div>
					</div>
				</li>

				<!-- Identitas Sekolah Asal -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "ref_jenissmta" || $this->uri->segment(2) == "ref_jurusansmta") ? "active" : ""; ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseIdentitasSekolah" aria-expanded="true" aria-controls="collapseIdentitasSekolah">
						<i class="fas fa-fw fa-school"></i>
						<span>Identitas Sekolah</span>
					</a>
					<div id="collapseIdentitasSekolah" class="collapse <?php echo ($this->uri->segment(2) == "ref_jenissmta" || $this->uri->segment(2) == "ref_jurusansmta") ? "show" : ""; ?>" aria-labelledby="headingIdentitasSekolah" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_jenissmta") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_jenissmta'); ?>">Jenis SMTA</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_jurusansmta") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_jurusansmta'); ?>">Jurusan SMTA</a>
						</div>
					</div>
				</li>

				<!-- Orang Tua / Wali -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "ref_pendidikanortu" || $this->uri->segment(2) == "ref_pekerjaanortu" || $this->uri->segment(2) == "ref_penghasilanortu") ? "active" : ""; ?>">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrangtua" aria-expanded="true" aria-controls="collapseOrangtua">
						<i class="fas fa-fw fa-user-friends"></i>
						<span>Data Orang Tua / Wali</span>
					</a>
					<div id="collapseOrangtua" class="collapse <?php echo ($this->uri->segment(2) == "ref_pendidikanortu" || $this->uri->segment(2) == "ref_pekerjaanortu" || $this->uri->segment(2) == "ref_penghasilanortu") ? "show" : ""; ?>" aria-labelledby="headingOrangtua" data-parent="#accordionSidebar">
						<div class="bg-white py-2 collapse-inner rounded">
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_pendidikanortu") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_pendidikanortu'); ?>">Pendidikan Orang Tua</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_pekerjaanortu") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_pekerjaanortu'); ?>">Pekerjaan Orang Tua</a>
							<a class="collapse-item <?php echo ($this->uri->segment(2) == "ref_penghasilanortu") ? "active" : ""; ?>" href="<?php echo site_url('administrator/ref_penghasilanortu'); ?>">Penghasilan Orang Tua</a>
						</div>
					</div>
				</li>
			<?php } else { ?>
				<div class="sidebar-heading">
					Pendaftaran
				</div>
				<!-- Data Pendaftar -->
				<li class="nav-item <?php echo ($this->uri->segment(2) == "datapendaftar") ? "active" : ""; ?>">
					<a class="nav-link" href="<?php echo site_url('administrator/datapendaftar'); ?>">
						<i class="fas fa-fw fa-users"></i>
						<span>Data Pendaftar</span></a>
				</li>
			<?php } ?>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">


				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Search -->
					<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
						<div class="input-group">
							<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
							<div class="input-group-append">
								<button class="btn btn-primary" type="button">
									<i class="fas fa-search fa-sm"></i>
								</button>
							</div>
						</div>
					</form>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<!-- Nav Item - Search Dropdown (Visible Only XS) -->
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
								<form class="form-inline mr-auto w-100 navbar-search">
									<div class="input-group">
										<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
										<div class="input-group-append">
											<button class="btn btn-primary" type="button">
												<i class="fas fa-search fa-sm"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</li>

						<!-- Nav Item - Alerts -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bell fa-fw"></i>
								<!-- Counter - Alerts -->
								<span class="badge badge-danger badge-counter">3+</span>
							</a>
							<!-- Dropdown - Alerts -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
								<h6 class="dropdown-header">
									Alerts Center
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-primary">
											<i class="fas fa-file-alt text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 12, 2019</div>
										<span class="font-weight-bold">A new monthly report is ready to download!</span>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-success">
											<i class="fas fa-donate text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 7, 2019</div>
										$290.29 has been deposited into your account!
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="mr-3">
										<div class="icon-circle bg-warning">
											<i class="fas fa-exclamation-triangle text-white"></i>
										</div>
									</div>
									<div>
										<div class="small text-gray-500">December 2, 2019</div>
										Spending Alert: We've noticed unusually high spending for your account.
									</div>
								</a>
								<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
							</div>
						</li>

						<!-- Nav Item - Messages -->
						<li class="nav-item dropdown no-arrow mx-1">
							<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-envelope fa-fw"></i>
								<!-- Counter - Messages -->
								<span class="badge badge-danger badge-counter">7</span>
							</a>
							<!-- Dropdown - Messages -->
							<div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
								<h6 class="dropdown-header">
									Message Center
								</h6>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_1.svg" alt="...">
										<div class="status-indicator bg-success"></div>
									</div>
									<div class="font-weight-bold">
										<div class="text-truncate">Hi there! I am wondering if you can help me with a
											problem I've been having.</div>
										<div class="small text-gray-500">Emily Fowler · 58m</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_2.svg" alt="...">
										<div class="status-indicator"></div>
									</div>
									<div>
										<div class="text-truncate">I have the photos that you ordered last month, how
											would you like them sent to you?</div>
										<div class="small text-gray-500">Jae Chun · 1d</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_3.svg" alt="...">
										<div class="status-indicator bg-warning"></div>
									</div>
									<div>
										<div class="text-truncate">Last month's report looks great, I am very happy with
											the progress so far, keep up the good work!</div>
										<div class="small text-gray-500">Morgan Alvarez · 2d</div>
									</div>
								</a>
								<a class="dropdown-item d-flex align-items-center" href="#">
									<div class="dropdown-list-image mr-3">
										<img class="rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile_3.svg" alt="...">
										<div class="status-indicator bg-success"></div>
									</div>
									<div>
										<div class="text-truncate">Am I a good boy? The reason I ask is because someone
											told me that people say this to all dogs, even if they aren't good...</div>
										<div class="small text-gray-500">Chicken the Dog · 2w</div>
									</div>
								</a>
								<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
							</div>
						</li>


						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<?php $user = $this->ion_auth->user()->row(); ?>

						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $user->first_name; ?></span>
								<img class="img-profile rounded-circle" src="<?php echo base_url(); ?>/assets/backend/startbootstrap/img/undraw_profile.svg">
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
									Profile
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
									Settings
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
									Activity Log
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<div class="row">
						<?php foreach ($data_pendaftar as $p) : ?>
							<div class="col-lg-12">
								<div class="card shadow mb-4">
									<div class="card-header py-3">
										<h4 class="m-0 font-weight-bold text-primary">Detail Data Pendaftar: <?php echo ucwords($p['namalengkap']); ?></h4>
									</div>
									<div class="card-body">
										<ul class="nav nav-tabs" id="myTab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Informasi Pribadi</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Informasi Sekolah</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Data Orang Tua</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="dataWali-tab" data-toggle="tab" data-target="#dataWali" type="button" role="tab" aria-controls="dataWali" aria-selected="false">Data Wali</button>
											</li>
										</ul>

										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
												<fieldset class="show" id="DataPribadi1">
													<div class="col-md-12 mt-3 px-0 py-0">
														<div class="form-card">
															<div class="row">
																<div class="col-sm-4">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="200">Nomor Pendaftaran</td>
																				<td>:</td>
																				<td><?php echo $p['username']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Nama Lengkap</td>
																				<td>:</td>
																				<td><?php echo $p['namalengkap']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">NISN Pendaftar</td>
																				<td>:</td>
																				<td><?php echo $p['nisn_pendaftar']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Jenis Kelamin</td>
																				<td>:</td>
																				<td><?php echo $p['jeniskelamin']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">NIK/No. KTP</td>
																				<td>:</td>
																				<td><?php echo $p['nik']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Agama</td>
																				<td>:</td>
																				<td><?php echo $p['agama']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Suku</td>
																				<td>:</td>
																				<td><?php echo $p['suku']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Status Menikah</td>
																				<td>:</td>
																				<td><?php echo $p['statusmenikah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Tempat Lahir</td>
																				<td>:</td>
																				<td><?php echo $p['lokasi_tempatlahir']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Tanggal Lahir</td>
																				<td>:</td>
																				<td><?php echo $p['tgl_lahir']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kabupaten/Kota</td>
																				<td>:</td>
																				<td><?php echo $p['kab_tempatlahir']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>

																<div class="col-sm-4">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="200">Provinsi</td>
																				<td>:</td>
																				<td><?php echo $p['prov_tempatlahir']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Program Studi Pilihan 1</td>
																				<td>:</td>
																				<td><?php echo $p['pilihan1']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Program Studi Pilihan 2</td>
																				<td>:</td>
																				<td><?php echo $p['pilihan2']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Program Studi Pilihan 3</td>
																				<td>:</td>
																				<td><?php echo $p['pilihan3']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Alamat Tinggal</td>
																				<td>:</td>
																				<td><?php echo $p['alamat_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Desa/Kelurahan</td>
																				<td>:</td>
																				<td><?php echo $p['des_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kecamatan/Distrik</td>
																				<td>:</td>
																				<td><?php echo $p['kec_tempattinggal']; ?></td>
																			</tr>

																			<tr>
																				<td width="200">Kabupaten/Kota</td>
																				<td>:</td>
																				<td><?php echo $p['kab_tempattinggal']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>

																<div class="col-sm-4">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="250">Provinsi</td>
																				<td>:</td>
																				<td><?php echo $p['prov_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Negara</td>
																				<td>:</td>
																				<td><?php echo $p['negara_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Kode Pos</td>
																				<td>:</td>
																				<td><?php echo $p['kodepos_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Alamat Tinggal Lain</td>
																				<td>:</td>
																				<td><?php echo $p['alamatlain_tempattinggal']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">No. HP</td>
																				<td>:</td>
																				<td><?php echo $p['nohp']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Alamat Email</td>
																				<td>:</td>
																				<td><?php echo $p['email']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Tinggi Badan</td>
																				<td>:</td>
																				<td><?php echo $p['tinggibadan']; ?></td>
																			</tr>
																			<tr>
																				<td width="250">Berat Badan</td>
																				<td>:</td>
																				<td><?php echo $p['beratbadan']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</fieldset>
											</div>
											<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
												<fieldset class="show" id="DataSekolah1">
													<div class="col-md-12 mt-3 px-0 py-0">
														<div class="form-card">
															<div class="row">
																<table class="table table-sm">
																	<tbody>
																		<tr>
																			<td width="300">Tahun Lulus SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['tahunlulus_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Jurusan SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['jurusansmta']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Jenis SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['jenissmta']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Nama SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['nama_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">NISN SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['nisn_smta']; ?></td>
																		</tr>
																		<tr>
																			<td>Alamat SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['alamat_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Provinsi SMTA</td>
																			<td>:</td>
																			<td><?php echo $p['prov_smta']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Nilai Rapor Kelas XI semeseter 1</td>
																			<td>:</td>
																			<td><?php echo $p['nrapor1']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Nilai Rapor Kelas XI semeseter 2</td>
																			<td>:</td>
																			<td><?php echo $p['nrapor2']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Nilai Rapor Kelas XII semeseter 1</td>
																			<td>:</td>
																			<td><?php echo $p['nrapor3']; ?></td>
																		</tr>
																		<tr>
																			<td width="300">Lampiran Rapor Kelas XI semeseter 1</td>
																			<td>:</td>
																			<td>
																				<a href="<?php echo $p['beratbadan']; ?>" class="btn btn-info btn-sm">
																					Unduh File
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td width="300">Lampiran Rapor Kelas XI semeseter 2</td>
																			<td>:</td>
																			<td>
																				<a href="<?php echo $p['beratbadan']; ?>" class="btn btn-info btn-sm">
																					Unduh File
																				</a>
																			</td>
																		</tr>
																		<tr>
																			<td width="300">Lampiran Rapor Kelas XII semeseter 1</td>
																			<td>:</td>
																			<td>
																				<a href="<?php echo $p['beratbadan']; ?>" class="btn btn-info btn-sm">
																					Unduh File
																				</a>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</fieldset>
											</div>
											<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
												<fieldset class="show" id="DataOrtu1">
													<div class="col-md-12 mt-3 px-0 py-0">
														<div class="form-card">
															<div class="row">
																<div class="col-sm-6">
																	<table class="table table-sm">
																		<tbody>
																			<tr>
																				<td width="200">NIK/No. KTP Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['nik_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Nama Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['nama_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pendidikan Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['pendidikan_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pekerjaan Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['pekerjaan_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Alamat Kantor Ayah</td>
																				<td>:</td>
																				<td><?php echo $p['alamatkantor_ayah']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">NIK/No. KTP Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['nik_ibu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Nama Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['nama_ibu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pendidikan Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['pendidikan_ibu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Pekerjaan Ibu</td>
																				<td>:</td>
																				<td><?php echo $p['pekerjaan_ibu']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="col-sm-6">
																	<table class="table table-sm">
																		<tbody>

																			<tr>
																				<td width="200">Penghasilan Orang Tua</td>
																				<td>:</td>
																				<td><?php echo $p['penghasilan_ortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Alamat Orang Tua</td>
																				<td>:</td>
																				<td><?php echo $p['alamat_ortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kecamatan/Distrik</td>
																				<td>:</td>
																				<td><?php echo $p['kec_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kabupaten/Kota</td>
																				<td>:</td>
																				<td><?php echo $p['kab_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Provinsi</td>
																				<td>:</td>
																				<td><?php echo $p['provinsi_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">Kode POS</td>
																				<td>:</td>
																				<td><?php echo $p['kodepost_tempattinggalortu']; ?></td>
																			</tr>
																			<tr>
																				<td width="200">No. Telp./HP Orang Tua</td>
																				<td>:</td>
																				<td><?php echo $p['nohp_ortu']; ?></td>
																			</tr>
																		</tbody>
																	</table>
																</div>

															</div>
														</div>
													</div>
												</fieldset>
											</div>

											<div class="tab-pane fade" id="dataWali" role="tabpanel" aria-labelledby="dataWali-tab">
												<fieldset class="show" id="DataWali1">
													<div class="col-md-12">
														<div class="form-card">
															<div class="row">
																<table class="table table-sm">
																	<tbody>
																		<tr>
																			<td width="200">Nama Wali</td>
																			<td>:</td>
																			<td><?php echo $p['nama_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Pekerjaan Wali</td>
																			<td>:</td>
																			<td><?php echo $p['pekerjaan_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Penghasilan Wali</td>
																			<td>:</td>
																			<td><?php echo $p['penghasilan_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Alamat Wali</td>
																			<td>:</td>
																			<td><?php echo $p['alamat_wali']; ?></td>
																		</tr>
																		<tr>
																			<td width="200">Nomor HP Wali</td>
																			<td>:</td>
																			<td><?php echo $p['nohp_ortu']; ?></td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</fieldset>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>


			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; PMB SESAMA UNIPA 2021</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<a class="btn btn-primary" href="<?php echo site_url('auth/logout'); ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/js/sb-admin-2.min.js"></script>

	<!-- Page level plugins -->
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/vendor/datatables/dataTables.bootstrap4.min.js"></script>

	<!-- Page level custom scripts -->
	<script src="<?php echo base_url(); ?>/assets/backend/startbootstrap/js/demo/datatables-demo.js"></script>

</body>

</html>