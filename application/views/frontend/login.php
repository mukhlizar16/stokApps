<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- RESERVATION FROM SECTION START -->
<div class="reservation-form">
	<div class="container">
		<div class="reservation-head text-center">
			<h2>Make a Reservation and <span>Login</span> first</h2>
			<p>Silahkan login terlebih dahulu sebelum memesan</p>
		</div>
		<br>
		<div class="pesan text-center m-auto col-md-8" id="pesan-login"></div>

		<div class="form m-auto col-md-8">
			<div class="personal">
				<form action="<?= site_url('login/masuk') ?>" method="post" id="login-form">
					<div class="custom-form">
						<div class="mt-3">
							<h4 class="text-center">Personal Information</h4>
							<hr>
						</div>
						<div class="mt-3">
							<label for="email">Username</label>
							<input type="text" class="form-control reservation-input" id="email" name="email"
								   placeholder="example@mail.com" autofocus/>
						</div>
						<div class="mt-3">
							<label for="password">Password</label>
							<input type="password" class="form-control reservation-input" id="password"
								   name="password"/>
						</div>
						<div class="text-center mt-5">
							<button type="submit" class="book-now" id="btn-login">Login <i
										class="icofont-double-right"></i></button>
							<button class="book-now" id="btn-loading" style="display: none"><i
										class="icofont-gears"></i> loading ...
							</button>
						</div>
						<div class="text-muted mt-3">
							Belum memiliki akun? <a href="<?= site_url('register') ?>">Daftar</a>
						</div>
					</div>
				</form>
			</div>
		</div>

	</div>
</div>
<!-- RESERVATION FROM SECTION END -->

<!-- TESTY FOOD SECTION START -->
<div class="testy-section">
	<div class="container">
		<div class="testy-content text-center">
			<h3>We make testy <span>food everyday</span></h3>
			<p>If you are going to use aa passage of you need to be sure there isn't anything embarrassing
				hidden in the middle of text.</p>
		</div>
	</div>
</div>
<!-- TESTY FOOD SECTION END -->
