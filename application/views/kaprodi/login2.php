<!DOCTYPE html>
<html>
<head>
	<title>Login Kaprodi</title>
	<link rel="stylesheet" href="login.css">
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=2.0.5">

</head>
<body>
	<div class="page-header header-filter" style="background-image: url('<?php echo base_url()?>assets/img/background-login.jpg'); background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ml-auto mr-auto">
					<div class="card">
						<form class="form-signin" action="<?php echo base_url('kaprodi/action_login'); ?>" method="post">
							<div class="card-header card-header-info text-center">
								<img src="<?php echo base_url() ?>assets/img/logo-unkris.png" class="mb-0" style="width: 100px">
								<h4 class="card-title mt-0" style="font-weight: bold;">Login Kaprodi</h4>
							</div>
							<div class="card-body py-3">
								<?php if($this->session->flashdata('login_failed') != NULL) :  ?>
									<div class="alert alert-danger alert-dismissible fade show">
										<?php echo $this->session->flashdata('login_failed'); ?>
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    			<span aria-hidden="true">&times;</span>
						  				</button>
									</div>
								<?php endif; ?>
								<div class="form-group my-3">
									<label>Username</label>
									<input type="text" class="form-control" name="username" required>
								</div>
								<div class="form-group my-3">
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" name="password" required>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-block my-3">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>