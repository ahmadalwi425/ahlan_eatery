<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	<meta name="author" content="Creative Tim">
	<title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
	<!-- Favicon -->
	<link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
	<!-- Icons -->
	<link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
	<link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
	<!-- Argon CSS -->
	<link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body style="background: #272725">
	<!-- Navbar -->
	<nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
		<div class="container">
			<a class="navbar-brand" href="dashboard.html">
				<div style="display: flex">
					<img src="{{asset('assets')}}/img/brand/logoAhlan.jpeg">
				</div>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
				aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-close">
							<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse"
								aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<ul class="navbar-nav mr-auto">
					<li class="nav-item">
						<a href="login.html" class="nav-link">
							<span class="nav-link-inner--text">Login</span>
						</a>
					</li>
					<li class="nav-item">
						<a href="register.html" class="nav-link">
							<span class="nav-link-inner--text">Register</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Main content -->
	<div class="main-content">
		<!-- Header -->
		<div class="header py-7 py-lg-8 pt-lg-5" style="background:#F0AD03">
			<div class="container">
				<div class="header-body text-center mb-5">
							<h1 class="text-white">Login</h1>
				</div>
			</div>
		</div>
		<!-- Page content -->
		<div class="container mt--8 pb-6">
			<div class="row justify-content-center">
				<div class="col-lg-5 col-md-7">
					<div class="card bg-secondary border-0 mb-0">
						<div class="card-body px-lg-5 py-lg-5">
							<div class="text-center text-muted mb-4">
								<small>Enter username and password</small>
							</div>
							<form role="form">
								<div class="form-group mb-3">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-single-02"></i></span>
										</div>
										<input class="form-control" placeholder="Email" type="email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group input-group-merge input-group-alternative">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
										</div>
										<input class="form-control" placeholder="Password" type="password">
									</div>
								</div>
								<div class="custom-control custom-control-alternative custom-checkbox">
									<input class="custom-control-input" id=" customCheckLogin" type="checkbox">
									<label class="custom-control-label" for=" customCheckLogin">
										<span class="text-muted">Remember me</span>
									</label>
								</div>
								<div class="text-center">
									<button type="button" class="btn btn-primary my-4">Sign in</button>
								</div>
							</form>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-6">
							<a href="#" class="text-light"><small>Forgot password?</small></a>
						</div>
						<div class="col-6 text-right">
							<a href="#" class="text-light"><small>Create new account</small></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Argon Scripts -->

	{{-- Footer --}}
<footer class="py-5" id="footer-main">
	<div class="container">
		<div class="row align-items-center justify-content-xl-between">
			<div class="col-xl-6">
				<div class="copyright text-center text-xl-left text-muted">
					&copy; Owl Coder 2020 
				</div>
			</div>
		</div>
	</div>
	
</body>
	<!-- Core -->
	<script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../assets/vendor/js-cookie/js.cookie.js"></script>
	<script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
	<script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
	<!-- Argon JS -->
	<script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>