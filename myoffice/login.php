<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Office</title>

	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
	<link rel="stylesheet" href="asset/css/main.css">

	<script src="asset/js/jquery.min.js"></script>
	<script src="asset/js/popper.min.js"></script>
	<script src="asset/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<body>
	<section id="wrapper">
		<section class="common-sec login-page-sec">
			<div class="container">
				<div class="logo-dv text-center">
					<a class="navbar-brand" href="index.php">
						<span class="site-logo"><img src="asset/img/logo.png" alt="Logo"></span>
					</a>
				</div>

				<div class="login-form-dv">
					<section class="custom-form-sec">
						<form class="icon-form" action="" method="post">
							<div class="row">
								<div class="col-sm-12">
									<div class="input-bx">
										<input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
										<label>Username</label>
									</div>
								</div><!-- col -->
							</div><!-- row -->

							<div class="row note-icon">
								<div class="col-sm-12">
									<div class="input-bx pass-bx">
										<input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
										<label>Password</label>
									</div>
								</div><!-- col -->
							</div><!-- row -->

							<div class="forgot text-right">
								<a href="#">Forgot Password?</a>
							</div>
							<div class="submit mt-4">
								<button type="submit" class="common-btn round-btn">Login</button>
							</div>
						</form>

						<div class="sign-up-dv text-center">
							<a href="javascript:void(0)" data-toggle="modal" data-target="#signUp">
								Create a FREE Account
							</a>
						</div>
					</section><!-- custom-form-sec -->
				</div><!-- login-form-dv -->
			</div><!-- container -->
		</section><!-- common-sec -->

		<!-- Modal -->
		<section class="modal fade custom-modal signUp-modal" id="signUp" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					
					<div class="modal-body text-center">
						<h4 class="modal-title mb-0">Sign Up</h4>
						<p class="desc">with your social network</p>

						<div class="socila-icon-bx">
							<span class="s-link s-google">
								<a href="#"><i class="fa fa-google" aria-hidden="true"></i> Google</a>
							</span>
							<span class="s-link s-facebook">
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
							</span>
							<span class="s-link s-twitter">
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
							</span>
						</div>
						<div class="saprater">
							<span>
								<img src="asset/img/or.png" alt="saprater">
							</span>
						</div>

						<section class="custom-form-sec signUp-form-dv">
							<form class="icon-form" action="" method="post">
								
								<div class="input-bx">
									<input type="text" name="fullname" id="fullname" class="form-control" autocomplete="off" required>
									<label>Full name</label>
								</div>
								<div class="input-bx">
									<input type="text" name="username" id="username" class="form-control" autocomplete="off" required>
									<label>Username</label>
								</div>
								<div class="input-bx">
									<input type="email" name="email" id="email" class="form-control" autocomplete="off" required>
									<label>Email</label>
								</div>
								<div class="input-bx pass-bx">
									<input type="password" name="password" id="password" class="form-control" autocomplete="off" required>
									<label>Password</label>
								</div>
								<div class="input-bx pass-bx">
									<input type="password" name="c_password" id="c_password" class="form-control" autocomplete="off" required>
									<label>Confirm Password</label>
								</div>
								
								<button type="submit" class="common-btn">Sign Up</button>
							</form>
						</section><!-- custom-form-sec -->

					</div><!-- modal-body -->
				</div>
			</div>
		</section>
		<!-- modal -->
	</section><!-- wrapper -->

	<script src="asset/js/custom.js"></script>
</body>
</html>