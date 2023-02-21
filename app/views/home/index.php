
<section id="carousel" class="carousel py-4">
      <div class="container mb-4 " style="width:500px">
        <div id="carouselExampleIndicators" class="carousel slide pt-5" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?= BASEURL;?>/img/cangkir-kopin-jago.webp">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= BASEURL;?>/img/teaset-hitam.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="<?= BASEURL;?>/img/teaset-biru.jpg">
            </div>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
      </div>
      
  </section>
    
    <section id="card" class="card bg-light py-4">
      <div class="container mb-4">
        <div class="col text-center pb-4">
          <h4>Produk Kopin Terbaik Untuk Anda</h4>
        </div>
        <div class="row mb-4">
          <?php foreach ($data['idgerabah'] as $grbh) :?>
            <div class="col-md">
              <div class="card shadow p-3 mb-5" style="width: 18rem;">
                <a href="<?= BASEURL; ?>/home/detail/<?= $grbh['idgerabah'] ?>"><img class="card-img-top" src="<?= BASEURL ?>/img/<?= $grbh['foto_gerabah']; ?>" alt="Card image cap" width="300px"></a>
                <div class="card-body">
                  <p class="card-title"><?= $grbh['nama_gerabah']?></p>
                  <h4 class="card-title"><?= $grbh['harga']?></h4>
                  <?php 
                    if($grbh['stok'] == 0){
                  ?>
                  <p class="btn btn-danger">STOK HABIS</p><br>
                  <?php }?>
                  <i class="fas fa-star"> 4.5</i>
                </div>
            </div>
            </div>
            <?php endforeach; ?>
        </div>
        
         
    </section>
    