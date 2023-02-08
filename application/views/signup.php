<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

	<ol class="breadcrumb">
		<li><a href="index.html">Home</a></li>
		<li class="active">Registration</li>
	</ol>

	<div class="row">

		<!-- Article main content -->
		<article class="col-xs-12 maincontent">
			<header class="page-header">
				<h1 class="page-title">Registration</h1>
			</header>

			<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<h3 class="thin text-center">Register a new account</h3>
						<p class="text-center text-muted">Already have an account? <a href="<?php echo site_url('Signin') ?>">Login</a></p>
						<hr>

						<form action="<?php echo site_url('Signup/check') ?>" method="post">
							<div class="top-margin">
								<label>Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="name" required>
							</div>
							<div class="top-margin">
								<label>Email Address <span class="text-danger">*</span></label>
								<input type="text" class="form-control" name="email" required>
							</div>

							<div class="row top-margin">
								<div class="col-sm-6">
									<label>Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="pass" required>
								</div>
							</div>

							<hr>

							<div class="row">
								<div class="col-lg-8">
								</div>
								<div class="col-lg-4 text-right">
									<button class="btn btn-action" type="submit">Register</button>
								</div>
							</div>
						</form>
					</div>
				</div>

			</div>

		</article>
		<!-- /Article -->

	</div>
</div> <!-- /container -->