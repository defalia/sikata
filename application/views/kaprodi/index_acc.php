<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://demos.creative-tim.com/material-kit/assets/css/material-kit.min.css?v=2.0.5">
</head>
<body>
	<div class="container my-5">
		<div class="card">
			<div class="card-header card-header-rose">
				Data Akun Kaprodi
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<td>Username</td>
							<td>Password</td>
							<td>Prodgram Studi</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($account as $a) :?>
							<tr>
								<td><?php echo $a['username'] ?></td>
								<td><?php echo $a['password'] ?></td>
								<td><?php echo $a['nama_prodi'] ?></td>
								<td><a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>kaprodi/delete/<?php echo $a['id_kaprodi'] ?>">Delete</a>
									<a class="btn btn-success btn-sm" href="<?php echo base_url() ?>kaprodi/edit/<?php echo $a['id_kaprodi'] ?>">Edit</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>				
			</div>
		</div>
	</div>
</body>
</html>