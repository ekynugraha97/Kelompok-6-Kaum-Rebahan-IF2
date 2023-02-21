  
    <section id="card" class="card bg-light py-4 mt-4">
      <div class="container mb-4 pt-5">
        <div class="col text-center pb-4 pt-4">
          <h4>Produk Cangkir Kopin Terbaik Untuk Anda</h4>
        </div>
        <div class="row mb-4">
          <?php foreach ($data['id_jenis'] as $jenis) :?>
            <div class="col-md">
              <div class="card shadow p-3 mb-5" style="width: 18rem;">
                <a href="<?= BASEURL; ?>/home/detail/<?= $jenis['id_jenis'] ?>"><img class="card-img-top" src="<?= BASEURL ?>/img/<?= $jenis['foto_gerabah']; ?>" alt="Card image cap" width="300px"></a>
                <div class="card-body">
                  <p class="card-title"><?= $jenis['nama_gerabah']?></p>
                  <h4 class="card-title">Rp. <?= $jenis['harga']?></h4>
                  <i class="fas fa-star"> 4.5</i>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>
    