<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--     Fonts and icons     -->
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
						<?php echo form_open('kaprodi/register_action') ?>
						<div class="card-header card-header-rose text-center">
							<h4 class="card-title">Register Kaprodi</h4>
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
							<?php if($this->session->flashdata('pilih_prodi') != NULL) :  ?>
								<div class="alert alert-danger alert-dismissible fade show">
									<?php echo $this->session->flashdata('pilih_prodi'); ?>
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
							<div class="form-group my-3">
								<label for="pilihProdi">Pilih Program Studi</label>
								<select id="pilihProdi" name="nama_prodi" class="form-control" required>
									<option value="default" selected>Pilihan Program Studi</option>
									<?php foreach ($prodi as $p) : ?>
										<option value="<?php echo $p['nama_prodi']?>"><?php echo $p['nama_prodi']?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group my-3">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" name="nama_kaprodi" required>
								</div>
							</div>
							<button type="submit" class="btn btn-rose btn-block my-3">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
