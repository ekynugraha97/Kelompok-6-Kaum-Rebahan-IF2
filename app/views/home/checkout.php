<div class="container pt-5">
	<div class="modal-content">
		<div class="modal-header">
			<h2 class="modal-title" id="exampleModalLabel">Checkout</h2>
		</div>
		<form class="form-group" action="<?= BASEURL ?>/home/simpanTransaksi" method="POST">
			<div class="modal-body col-md">
				<div class="row g-3">
					<div class="col-md-8 order-md mb-5">
						<h4 class="d-flex justify-content-between align-items-center mb-3">
							<span class="text-muted">Keranjang Belanjamu</span>
							<span class="badge bg-warning rounded-pill" id="jml_item"> <?= $_POST['jml_item']; ?> </span>
							<input type="hidden" name="jml_item" value="<?= $_POST['jml_item']; ?>">
						</h4>
						<ul class="list-group mb-3">
							<li class="list-group-item d-flex justify-content-between lh-sm">
								<div>
									<h6 class="">Produk</h6>
									<input type="hidden" name="idgerabah" value="<?= $_POST['idgerabah']; ?>">
									<small class="text-muted" id="namaGerabah" name=""> <?= $_POST['namaGerabah']; ?> </small>
									<input type="hidden" name="namaGerabah" value="<?= $_POST['namaGerabah']; ?>">
								</div>
								<span class="text-muted" id="hargaGerabah">Rp. <?= $harga_total = $_POST['hargaGerabah'] * $_POST['jml_item']; ?> </span>
								<input type="hidden" name="hargaGerabah" value="<?= $harga_total = $_POST['hargaGerabah'] * $_POST['jml_item']; ?>">
								<input type="hidden" name="stok" value="<?= $_POST['stok'] ?>">
							</li>
							<li class="list-group-item d-flex justify-content-between">
								<span>Total</span>
								<strong id="harga_total" name="harga_total">Rp. <?= $harga_total; ?> </strong>
								<input type="hidden" name="harga_total" value="<?= $harga_total; ?>">
							</li>
						</ul>
					</div>
					<div class="col-md-8 col-lg-8">
						<h4 class="mb-3">Alamat Pengiriman</h4>
						<form class="needs-validation" novalidate>
							<div class="row">
								<div class="col-12 mt-2">
									<label for="email" class="form-label">Nama Penerima <span class="text-muted">(Optional)</span>
									</label>
									<input type="text" class="form-control" id="nama_penerima" name="nama_penerima" placeholder="Masukan nama... ">
									<input type="hidden" class="form-control" id="nama_penerima" name="idPelanggan" value="<?= $_SESSION['id'] ?>">
									<div class="invalid-feedback"> Anda belum mengisi nama pengirim </div>
								</div>
								<div class="col-md-12 mt-2">
									<label class="form-label">Provinsi</label>
									<select class="form-control" name="provinsi" required>
										<option selected>Pilih Provinsi</option>
										<?php foreach (json_decode(file_get_contents('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json'), TRUE) as $prov) { ?>
											<option value="<?= $prov['id'] ?>"><?= $prov['name'] ?></option>
										<?php } ?>
									</select>
								</div>
								<div class="col-md-12 mt-2" id="tampilKota">
									<label class="form-label">Kab/Kota</label>
									<select class="form-control" name="kab_kota" required>
									</select>
								</div>
								<div class="col-md-12 mt-2" id="tampilKecamatan">
									<label class="form-label">Kecamatan</label>
									<select class="form-control" name="kecamatan" required>
									</select>
								</div>
								<div class="col-md-12 mt-2" id="tampilKelurahan">
									<label class="form-label">Kelurahan</label>
									<select class="form-control" name="kelurahan" required>
									</select>
								</div>
								<div class="col-md-12 mt-2">
									<label for="zip" class="form-label">Kode Pos</label>
									<input type="text" class="form-control" id="kode_pos" name="kode_pos" placeholder="" required>
									<div class="invalid-feedback"> Kode Pos required. </div>
								</div>
								<div class="col-12 mt-2">
									<label for="address" class="form-label">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" required>
									<div class="invalid-feedback"> Anda belum mengisi alamat </div>
								</div>
								<div class="col-md-12 mt-2">
									<label for="zip" class="form-label">Nomor Handphone</label>
									<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="" required>
									<div class="invalid-feedback"> Kode Pos required. </div>
								</div>
							</div>
							<hr class="my-4">
							<h4 class="mb-3">Pembayaran</h4>
							<div class="my-3">
								<div class="form-check">
									<input id="credit" name="paymentMethod" value="Bank Mandiri" type="radio" class="form-check-input" checked required>
									<label class="form-check-label" for="credit">Bank Mandiri</label>
								</div>
								<div class="form-check">
									<input id="debit" name="paymentMethod" value="OVO" type="radio" class="form-check-input" required>
									<label class="form-check-label" for="debit">OVO</label>
								</div>
								<div class="form-check">
									<input id="paypal" name="paymentMethod" value="BCA"  type="radio" class="form-check-input" required>
									<label class="form-check-label" for="paypal">Bca</label>
								</div>
							</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<input type="hidden" name="provinsi_input">
				<input type="hidden" name="kab_kota_input">
				<input type="hidden" name="kecamatan_input">
				<input type="hidden" name="kelurahan_input">
				<button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Close</button>
				<button class="btn btn-primary btn-lg" type="submit">Lanjut Pembayaran</button>
			</div>
		</form>
	</div>
</div>
