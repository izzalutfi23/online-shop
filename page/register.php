<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
			<div class="col-first">
				<h1>Login/Register</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
					<a href="category.html">Login/Register</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="login_form_inner">
					<h3>Registrasi</h3>
					<form class="row login_form" action="login.php?proses=registrasi" method="POST">
						<div class="col-md-12 form-group">
							<input type="text" name="nama_user" class="form-control" placeholder="Nama">
						</div>
						<div class="col-md-12 form-group">
							<input type="text" name="username" class="form-control" placeholder="Username">
						</div>
						<div class="col-md-12 form-group">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<input type="hidden" name="level" value="pelanggan">
						</div>
						<div class="col-md-12 form-group">
							<button type="submit" value="submit" class="primary-btn">Registrasi</button>
							<a href="#">Forgot Password?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
	<!--================End Login Box Area =================-->