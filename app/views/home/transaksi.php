<?php
	if($data['id_transaksi']['pembayaran'] == 'Bank Mandiri') {
		$norek = '0700006801218 A/n Wildan Yusup';
	} else if($data['id_transaksi']['pembayaran'] == 'OVO') {
		$norek = '085223665663 A/n Wildan Yusup';
	} else if($data['id_transaksi']['pembayaran'] == 'BCA') {
		$norek = '2090494506 A/n Wildan Yusup';
	}
?>


<section id="card" class="card bg-light py-4">
    <div class="container p-4">
        <div class="row mb-4">
            <div class="col-md">
                <div class="card shadow p-4 mb-4">
                    <div class="card-header bg-white">
                        <h2 class="text-center">Transaksi Berhasil</h2>
                    </div>
                    <div class="card-body text-center">
                        <img class="img-fluid" width="500px" src="<?= BASEURL;?>/img/terimaKasih.gif">
						<h4>Silahkan Transfer Ke <?= $data['id_transaksi']['pembayaran'] ?> <?= $norek ?> Sebesar Rp <?= $data['id_transaksi']['total_harga'] ?></h4>
                        <p class="card-text">Selamat Berbelanja Kembali</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>