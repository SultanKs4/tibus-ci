<div id="booking" class="section">
	<!-- <div class="section-center"> -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="booking-form">
					<form>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Asal</span>
									<select class="form-control" name="dari">
										<option value="" hidden>---select---</option>
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
										<option value="" hidden>---select---</option>
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
									<span class="form-label">Tanggal</span>
									<input class="form-control" type="date" required>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<span class="form-label">Penumpang</span>
									<select class="form-control">
										<?php
										for ($i = 1; $i < 3; $i++) {
										?>
											<option value="<?= $i ?>"><?= $i ?> Orang</option>
										<?php
										};
										?>
									</select>
									<span class="select-arrow"></span>
								</div>
							</div>
						</div>
						<div class="form-btn">
							<button class="submit-btn">Check availability</button>
						</div>
				</div>
				</form>
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