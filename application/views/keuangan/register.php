<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=2.0.5">

</head>
<body>
		<div class="page-header header-filter" style="background-size: cover; background-position: top center;">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 ml-auto mr-auto">
					<div class="card">
						<?php echo form_open('keuangan/register_action') ?>
							<div class="card-header card-header-info text-center">
								<h4 class="card-title">Register Keuangan</h4>
							</div>
							<div class="card-body py-3">
								<?php if($this->session->flashdata('username_existing') != NULL) :  ?>
									<div class="alert alert-danger alert-dismissible fade show">
										<?php echo $this->session->flashdata('username_existing'); ?>
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
										<input type="password" class="form-control" name="password" pattern=".{8,16}" required>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-block my-3">Register</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>