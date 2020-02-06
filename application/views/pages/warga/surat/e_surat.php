
<div class="destination_details_info" style="padding-top: 25px">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-9">

					<div class="contact_join">
						<h3 style="text-align: center;margin-bottom:10px">Layanan Permohonan Surat Online (E-Surat) </h3>
						<form method="post" action="<?php echo site_url('w/surat/insert') ?>"><center>
							<h6 style="font-size: 0.8rem">Silahkan Lengkapi Data Sesuai dengan Keperluan</h6>
							<div class="row">

								<div class="col-lg-12">
									<div class="single_input">
										<select type="text" name="type"
											placeholder="Jenis Surat Keterangan" required>
											<option value="Surat Keterangan Usaha">-- Jenis Layanan Surat Keterangan
												Desa --</option>
											<option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu
											</option>
											<option value="Surat Keterangan Miskin">Surat Keterangan Kerja</option>
											<option value="Surat Keterangan Belum Pernah Menikah">Surat Keterangan Belum
												Pernah Menikah</option>
											<option value="Surat Keterangan Kelahiran">Surat Keterangan Kelahiran
											</option>
											<option value="Surat Keterangan Kematian">Surat Keterangan Kematian</option>
											<option value="Surat Keterangan Beda Nama">Surat Keterangan Perubahan Nama
											</option>
											<option value="Surat Keterangan Penghasilan">Surat Keterangan Penghasilan
											</option>
											<option value="Surat Keterangan Harga Tanah">Surat Keterangan Harga Tanah
											</option>
										</select>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="single_input">
										<input type="number" placeholder="NIK" required>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="single_input">
										<input type="text" placeholder="Nama Lengkap" required>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="single_input">
										<input type="email" name="email" placeholder="Alamat e-mail" required>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="single_input">
										<input type="number" name="no_hp" placeholder="No. Handphone" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="single_input">
										<textarea name="message" id="" cols="30" rows="10"
											placeholder="Message"></textarea>
									</div>
								</div>

								<div class="col-lg-6 col-md-6">
									<div class="single_input">
										<button class="boxed-btn3" type="submit">submit</button>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="single_input">	
										<button class="boxed-btn4" type="reset">Reset</button>
									</div>
								</div>
							</div>
							<br>
							<br>
							</p> Bingung Cara Menggunakan nya? <a href="#"> Lihat Cara Mengisi </a></p>
							
						</center>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
