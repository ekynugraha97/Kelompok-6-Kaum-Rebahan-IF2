<section id="card" class="card bg-light py-4">        
        <div class="container p-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-light">
                  <li class="breadcrumb-item"><a href="<?= BASEURL;?>">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page" id="namaGerabah" name="namaGerabah"><?= $data['idgerabah']['nama_gerabah']?></li>
                </ol>
              </nav>
            <div class="row mb-4">
                <div class="col-md">
                  <form action="<?= BASEURL; ?>/home/checkout" method="POST">
                    <div class="card shadow p-3 mb-5" >
                        <img class="card-img-top" src="<?= BASEURL ?>/img/<?= $data['idgerabah']['foto_gerabah']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <input hidden class ="card-title" type="text" id="namaGerabah" name="namaGerabah" value="<?= $data['idgerabah']['nama_gerabah']?>">
                            <input hidden class ="card-title" type="text" id="idgerabah" name="idgerabah" value="<?= $data['idgerabah']['idgerabah']?>">
                            <h5 class="card-title" id="namaGerabah" name="namaGerabah"><?= $data['idgerabah']['nama_gerabah']?></h5>
                            <p class="card-text text-justify">Cangkir Asli Kopin Berkualitas </p>
                            <input hidden class ="card-title" type="text" id="stok" name="stok" value="<?= $data['idgerabah']['stok']?>">
                            <input hidden class ="card-title" type="text" id="hargaGerabah" name="hargaGerabah" value="<?= $data['idgerabah']['harga']?>">
                            <h3 class="card-title" id="hargaGerabah" name="hargaGerabah" >Rp. <?= $data['idgerabah']['harga']?></h3>
                            <i class="fas fa-star"> 4.5</i>
                        </div>
                        <div class="form p-1">
                            <div class="form-group">
                                <select class="form-control col-md-2" id="jml_item" name="jml_item">
                                      <?php
                                        $i = 1;
                                        $total =$data['idgerabah']['stok'];
                                        while($i<=$total){
                                          echo "<option value='".$i."'>".$i."</option>";
                                          $i++;
                                        }
                                    ?>
                                  </select><br>
                                  <?php 
                                      if($total == 0){
                                  ?>
                                      <p class="btn btn-danger">STOK HABIS</p><br>
                                      
                            </div>
                            <div class="form-group">
                                <button disabled type="submit" class="btn btn-outline-secondary btn-lg col-md-2 m-1" id="btnBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                            
                            <?php }else{?>
                              
                                <button  type="submit" class="btn btn-outline-secondary btn-lg col-md-2 m-1" id="btnBeli" data-bs-toggle="modal" data-bs-target="#exampleModal">Beli</button>
                              </div>
                            
                            <?php }?>
                          </div>
                        </div>
                      </form>
                 <div class="card shadow p-3 mb-5 ">
                        <div class="card-header bg-white">
                          <h5>Ulasan</h5>
                        </div>
                        <div class="card-body">
                          <h5 class="card-title">Mr. Eky Nugraha</h5>
                          <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                          <p class="card-text">Khualitas Barangnya  tidak perlu dipertanyakan lagi <br>MANTAPP ABISS</br>
                          </p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mr. Andi</h5>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p class="card-text">Barangnya Keren Abisss
                          </p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Mr. Rudi</h5>
                            <i class="fas fa-star"></i><i class="fas fa-star"></i></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                            <p class="card-text">Mangkoknya Mantap abis</p>
                        </div>
                  </div>
            </div>
          </div>
      </section>