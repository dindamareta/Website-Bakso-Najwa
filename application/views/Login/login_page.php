<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

  <!-- Script Saya-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login_page.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/theme.css">
  <script src="<?php echo base_url(); ?>assets/Kandidat/js/hallogin.js"></script>
</head>

<body class="login">
  <div class="container-fluid" style="	background-image: url(<?php echo base_url(); ?>assets/img/background.png);	background-position: center;">
    <div class="row justify-content-md-center w-100 h-100">
      <!-- form login -->
      <?php echo form_open('Auth/login'); ?>
      <div class="form">
        <form class="login-form">
          <h1>Baso Najwa</h1>
          <div class="username">
            <input id="username" class="form-control" type="text" name="username" placeholder="Username" required autofocus>
          </div>
          <div class="password" style="position: relative">
								<input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
								<div class="btn btn-sm" id="passeye-toggle">
									<span class="lnr lnr-eye"></span>
								</div>									
          </div>
          <button type="submit" name="submit">Login</button>
        </form>
        <?php echo form_close(); ?>
			  <!-- end of form login -->
      </div> 
    </div>
  </div>
</body>

</html>