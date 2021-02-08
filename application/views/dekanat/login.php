<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SISTEM PKL/TA</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/css/app.min.css') ?>">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
  <link rel='shortcut icon' type='image/x-icon' href='<?= base_url('assets/img/favicon.ico') ?>' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12">
            <h1 class="text-center">SiKaTa</h1>
          </div>
          <div class="col-md-4 my-2 mx-auto">
            <div class="card card-warning">
              <div class="card-header text-center">
                <h4>Login Dekanat</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url('dekanat/action_login'); ?>">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input id="username" type="text" class="form-control" name="username" tabindex="1" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  </div>
                  <button type="submit" class="btn btn-lg btn-block btn-warning">Login</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="simple-footer">
              Copyright &copy; SIKATA <?= date('Y') ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
  <!-- Custom JS File -->
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>