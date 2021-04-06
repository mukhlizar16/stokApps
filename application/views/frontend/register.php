<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!-- RESERVATION FROM SECTION START -->
<div class="reservation-form">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<div class="reservation-head text-center">
					<h2>Make a Reservation and <span>Login</span> first</h2>
					<p>Silahkan login terlebih dahulu sebelum memesan</p>
				</div>
			</div>
		</div>
		<div class="text-center keterangan"></div>
		<div class="row">
			<div class="form">
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-xl-8 m-auto">
					<div class="personal">
						<form action="<?= site_url('register/simpan') ?>" method="post" id="register-form">
							<div class="form-row custom-form">
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
									<h4 class="text-center">Personal Information</h4>
									<hr>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
									<label for="name">Nama Lengkap*</label>
									<input type="text" class="form-control reservation-input" id="name" name="nama"
										   placeholder="cth: Agus" autofocus/>
								</div>

								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
									<label for="phone">Nomor Telp/HP*</label>
									<input type="number" class="form-control reservation-input" id="phone" name="phone"
										   placeholder="08** **** ****"/>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
									<label for="email">Email*</label>
									<input type="text" class="form-control reservation-input" id="email" name="email"
										   placeholder="example@mail.com"/>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-3">
									<label for="password">Password*</label>
									<input type="password" class="form-control reservation-input" id="password" name="password"/>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
									<label for="alamat">Alamat</label>
									<textarea class="form-control reservation-textarea" id="alamat" name="alamat"
											  rows="3" placeholder="cth: Jl. Abu Nawas"></textarea>
								</div>
								<div class="col-12 text-center mt-5">
									<button type="submit" class="btn book-now">Daftar <i class="icofont-double-right"></i></button>
								</div>
							</div>
						</form>
					</div>
				</div>
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
