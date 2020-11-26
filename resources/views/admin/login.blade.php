<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Admin Login</h2>

				@if($errors -> any())
				<p class=" alert alert-danger">{{ $errors -> first() }} <button class=" close" data-dismiss="alert">&times;</button> </p>
					
				@endif
				<form action="{{ route('admin.login') }}" method="POST">
					@csrf
					<div class="form-group">
						<label for="">E-mail / Username</label>
						<input name="email" class="form-control" type="text">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input name="password" class="form-control" type="password">
					</div>
					
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Login">
					</div>
				</form>
			</div>

			<div class="card-footer">
				<a class=" card-link" href="{{ route('admin.register') }}">Create an Account</a>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>