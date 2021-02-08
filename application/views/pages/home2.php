<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<!-- CSS Files -->
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/paper-dashboard/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/paper-dashboard/assets/css/paper-dashboard.min.css?v=2.0.0">
</head>
<body class="bg-primary">
	<div class="wrapper">
		<div class="sidebar" data-color="white" data-active-color="danger">
			<div class="logo">
				<a href="<?= base_url() ?>" class="simple-text logo-normal">
					Sistem PKL/TA
				</a>
			</div>
			<div class="sidebar-wrapper">
				<ul class="nav">
					<li class="active">
						<a href="#">
							<i class="nc-icon nc-bank"></i>
							<p>Home</p>
						</a>
					</li>
				</ul>
				
			</div>
		</div>
		<div class="main-panel">
			<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
						<a class="navbar-brand" href="#pablo">Paper Dashboard 2</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<form>
							<div class="input-group no-border">
								<input type="text" value="" class="form-control" placeholder="Search...">
								<div class="input-group-append">
									<div class="input-group-text">
										<i class="nc-icon nc-zoom-split"></i>
									</div>
								</div>
							</div>
						</form>
						<ul class="navbar-nav">
							<li class="nav-item">
								<a class="nav-link btn-magnify" href="#pablo">
									<i class="nc-icon nc-layout-11"></i>
									<p>
										<span class="d-lg-none d-md-block">Stats</span>
									</p>
								</a>
							</li>
							<li class="nav-item btn-rotate dropdown">
								<a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="nc-icon nc-bell-55"></i>
									<p>
										<span class="d-lg-none d-md-block">Some Actions</span>
									</p>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link btn-rotate" href="#pablo">
									<i class="nc-icon nc-settings-gear-65"></i>
									<p>
										<span class="d-lg-none d-md-block">Account</span>
									</p>
								</a>
							</li>
						</ul>
					</div>					
				</div>
			</nav>
			<div class="content">
				
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://demos.creative-tim.com/paper-dashboard/assets/js/core/jquery.min.js"></script>
	<script type="text/javascript" src="https://demos.creative-tim.com/paper-dashboard/assets/js/core/popper.min.js"></script>
	<script type="text/javascript" src="https://demos.creative-tim.com/paper-dashboard/assets/js/core/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://demos.creative-tim.com/paper-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
</body>
</html>