<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?= $title ?? ""; ?> | Login</title>

	<!-- Custom fonts for this template-->
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<<div class="card o-hidden border-0 shadow-lg my-5">
	<div class="card-body p-0">
		<!-- Ubah dari row 2 kolom jadi 1 kolom center -->
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center p-4">
				<img src="<?= base_url('assets/img/img-kcm.png'); ?>" class="img-fluid mb-4" style="max-width: 200px;">
				
				<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>

				<form class="user" method="post" action="<?= base_url('auth'); ?>">
					<input type="email" class="form-control form-control-user mb-3" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
					<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>

					<input type="password" class="form-control form-control-user mb-3" name="password" placeholder="Password">
					<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>

					<div class="form-group">
						<div class="custom-control custom-checkbox small">
							<input type="checkbox" class="custom-control-input" id="customCheck">
							<label class="custom-control-label" for="customCheck">Remember Me</label>
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary btn-user btn-block">
						Login
					</button>
				</form>

				<hr>
				<div class="text-center">
					<a class="small" href="<?= base_url('auth/register'); ?>">Create an Account!</a>
				</div>
			</div>
		</div>
	</div>
</div>


	<!-- Bootstrap core JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
