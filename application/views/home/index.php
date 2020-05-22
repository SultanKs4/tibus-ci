<div id="booking" class="section">
	<!-- <div class="section-center"> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="booking-form">
					<?php if (validation_errors()) : ?>
						<div class="alert alert-danger alert-dismissable" role="alert">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<?= validation_errors(); ?>
						</div>
					<?php endif ?>
					<form method="POST" action="">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Asal</span>
									<select class="form-control" name="dari">
										<option hidden>---select---</option>
										<?php
										foreach ($terminal as $trm) :
										?>
											<option value="<?= $trm['id'] ?>"><?= $trm['kota'] ?>(<?= $trm['nama'] ?>)</option>
										<?php
										endforeach;
										?>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Tujuan</span>
									<select class="form-control" name="tujuan">
										<option hidden>---select---</option>
										<?php
										foreach ($terminal as $trm) :
										?>
											<option value="<?= $trm['id'] ?>"> <?= $trm['kota'] ?>(<?= $trm['nama'] ?>)</option>
										<?php
										endforeach;
										?>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Tanggal</span>
									<input class="form-control" type="date" id="date" required name="tanggal">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Penumpang</span>
									<input type="text" class="form-control" name="penumpang" id="penumpang" value="1" readonly>
								</div>
							</div>
						</div>
						<div class="form-btn">
							<button class="submit-btn">Check availability</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="booking-cta">
				<h1>TIBUS.COM</h1>
				<p>Merupakan suatu website berbasis sistem informasi yang memberika
					layanan tentang pembelian tiket bus dengan berbagai fitur menarik.
					Fitur yang ditawarkan berupa, pemesanan secara tidak langsung,
					pemilihan tujuan, serta pemilihan tempat duduk.
					Di website ini tidak hanya menyedia satu PO bus, namun ada
					beberapa pilihan PO bus lainnya yang dapat
					dipilih sesuai keinginan pelanggan.
				</p>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
</div>
<script>
	$(function() {
		var dtToday = new Date();

		var month = dtToday.getMonth() + 1;
		var day = dtToday.getDate();
		var year = dtToday.getFullYear();
		if (month < 10)
			month = '0' + month.toString();
		if (day < 10)
			day = '0' + day.toString();

		var maxDate = year + '-' + month + '-' + day;
		$('#date').attr('min', maxDate);
	});
</script>