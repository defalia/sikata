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
	<div class="container my-5">
		<div class="card">
			<div class="card-header card-header-primary">
				Data Akun Dekanat				
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>Username</th>
							<th>Password</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($account as $a) :?>
							<tr>
								<td><?php echo $a['username'] ?></td>
								<td><?php echo $a['password'] ?></td>
								<td><a class="btn btn-danger btn-sm" href="<?php echo base_url() ?>dekanat/delete/<?php echo $a['id_dekanat'] ?>">Delete</a>
									<a class="btn btn-success btn-sm" href="<?php echo base_url() ?>dekanat/edit/<?php echo $a['id_dekanat'] ?>">Edit</a>
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