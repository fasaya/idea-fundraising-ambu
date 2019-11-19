<!DOCTYPE html>
<html class="fixed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Admin</title>
	<!-- <meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net"> -->

	<link rel="shortcut icon" href="<?= base_url() ?>template/images/logo-4.png" type="image/x-icon" />

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/animate/animate.css">

	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/font-awesome/css/all.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/select2/css/select2.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/select2-bootstrap-theme/select2-bootstrap.min.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/datatables/media/css/dataTables.bootstrap4.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/pnotify/pnotify.custom.css" />
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/css/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/css/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() ?>template/admin/css/custom.css">

	<!-- Head Libs -->
	<script src="<?= base_url() ?>template/admin/vendor/modernizr/modernizr.js"></script>

</head>

<body>
	<section class="body">

		<!-- start: header -->
		<header class="header">
			<div class="logo-container">
				<a href="<?= base_url() ?>adminpanel" class="logo">
					<img src="<?= base_url() ?>template/images/logo-3.png" height="40" alt="Yayasan Kasih Fibonacci" />
				</a>
				<div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
					<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				</div>
			</div>

			<!-- start: search & user box -->
			<div class="header-right">

				<ul class="notifications">
					<li>
						<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
							<i class="fas fa-bell"></i>
							<span class="badge">3</span>
						</a>

						<div class="dropdown-menu notification-menu">
							<div class="notification-title">
								<span class="float-right badge badge-default">3</span>
								Alerts
							</div>

							<div class="content">
								<ul>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fas fa-thumbs-down bg-danger text-light"></i>
											</div>
											<span class="title">Server is Down!</span>
											<span class="message">Just now</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fas fa-lock bg-warning text-light"></i>
											</div>
											<span class="title">User Locked</span>
											<span class="message">15 minutes ago</span>
										</a>
									</li>
									<li>
										<a href="#" class="clearfix">
											<div class="image">
												<i class="fas fa-signal bg-success text-light"></i>
											</div>
											<span class="title">Connection Restaured</span>
											<span class="message">10/10/2017</span>
										</a>
									</li>
								</ul>

								<hr />

								<div class="text-right">
									<a href="#" class="view-more">View All</a>
								</div>
							</div>
						</div>
					</li>
				</ul>

				<span class="separator"></span>

				<div id="userbox" class="userbox">
					<a href="#" data-toggle="dropdown">
						<figure class="profile-picture">
							<img src="<?= base_url() ?>template/admin/img/logged-user.jpg" class="rounded-circle" data-lock-picture="<?= base_url() ?>template/admin/img/logged-user.jpg" />
						</figure>
						<div class="profile-info">
							<span class="name"><?= $user['username']; ?></span>
							<span class="role"><?= $user['keterangan']; ?></span>
						</div>

						<i class="fa custom-caret"></i>
					</a>

					<div class="dropdown-menu">
						<ul class="list-unstyled mb-2">
							<li class="divider"></li>
							<!-- <li>
									<a role="menuitem" tabindex="-1" href="#"><i class="fas fa-user"></i> My Profile</a>
								</li> -->
							<li>
								<a role="menuitem" tabindex="-1" href="<?= base_url() ?>webadmin/logout"><i class="fas fa-power-off"></i> Logout</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end: search & user box -->
		</header>
		<!-- end: header -->

		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left">

				<div class="sidebar-header">
					<div class="sidebar-title">
						Navigation
					</div>
					<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
						<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>

				<div class="nano">
					<div class="nano-content">
						<nav id="menu" class="nav-main" role="navigation">
							<ul class="nav nav-main">
								<li>
									<a class="nav-link" href="<?= site_url() ?>adminpanel">
										<i class="fas fa-home" aria-hidden="true"></i>
										<span>Dashboard</span>
									</a>
								</li>
								<li>
									<a class="nav-link" href="<?= site_url() ?>adminpanel/donasi">
										<i class="fas fa-hand-holding-heart" aria-hidden="true"></i>
										<span>Donasi (Di konfirmasi)</span>
									</a>
								</li>
								<li>
									<a class="nav-link" href="<?= site_url() ?>adminpanel/donasibaru">
										<span class="float-right badge badge-primary"><?= $this->Helper->cek_total_donasi_baru(); ?></span>
										<i class="fas fa-sign-in-alt" aria-hidden="true"></i>
										<span>Donasi (Baru)</span>
									</a>
								</li>

								<hr class="separator" />

								<li class="nav-parent">
									<a class="nav-link" href="#">
										<i class="fas fa-copy" aria-hidden="true"></i>
										<span>Halaman</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												Home
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												Tentang
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												Visi dan Misi
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												AD/RT
											</a>
										</li>
										<li class="nav-parent">
				                                <a class="nav-link" href="#">
				                                    Kegiatan
				                                </a>
				                                <ul class="nav nav-children">
				                                    <li>
				                                        <a href="<?= site_url() ?>adminpanel/blog">
				                                            Semua
				                                        </a>
				                                    </li>
				                                    <li>
				                                        <a href="<?= site_url() ?>adminpanel/tambahblog">
				                                            Tambah
				                                        </a>
				                                    </li>
				                                </ul>
				                            </li>
									</ul>
								</li>
								<li class="nav-parent">
									<a class="nav-link" href="#">
										<i class="fas fa-cogs" aria-hidden="true"></i>
										<span>Pengaturan</span>
									</a>
									<ul class="nav nav-children">
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												Kontak
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												Bank
											</a>
										</li>
										<li>
											<a class="nav-link" href="<?= site_url() ?>adminpanel/">
												Motto
											</a>
										</li>
									</ul>
								</li>
							</ul>
						</nav>

						<!-- <hr class="separator" /> -->

						<script>
							// Maintain Scroll Position
							if (typeof localStorage !== 'undefined') {
								if (localStorage.getItem('sidebar-left-position') !== null) {
									var initialPosition = localStorage.getItem('sidebar-left-position'),
										sidebarLeft = document.querySelector('#sidebar-left .nano-content');

									sidebarLeft.scrollTop = initialPosition;
								}
							}
						</script>


					</div>

			</aside>
			<!-- end: sidebar -->