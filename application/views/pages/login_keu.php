<!DOCTYPE html>
<html>
<head>
	<title>Login Keuangan</title>
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
				<div class="card card-signin my-5">
					<div class="card-body">
						<h5 class="card-title text-center">Sign In</h5>
						<form class="form-signin" action="<?php echo base_url('keuangan/action_login'); ?>" method="post">
							<div class="form-label-group">
								<label for="inputEmail">Username</label>
								<input id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
							</div>

							<div class="form-label-group mt-2">
								<label for="inputPassword">Password</label>
								<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
							</div>
							<button class="btn btn-lg btn-primary btn-block text-uppercase mt-3" type="submit">Sign in</button>
							<hr class="my-4">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- /limiter -->
</form>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>