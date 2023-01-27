 <!-- Awal Isi Detail -->

 <div class="container" class="section-p1">
      <div class="">
        <div class="pt-5 text-center">
          <img class="d-block mx-auto mb-4" src="<?php echo base_url()?>assets/images/Logo TPE.png" alt="" width="200" >
          <h2>Detail Kostum</h2>
          <!-- <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?php echo site_url('kostum/index') ?>">Kostum</a></li>
            <li class="breadcrumb-item active">Tambah Kostum</li>
        </ol> -->
          <!-- <p class="lead">Harap isilah formulir dibawah ini dengan benar! Jika terbukti mengisikan data yang tidak benar maka akan di blok dari <b>Ageman Sewa</b></p> -->
        </div>

            <?php if(empty($kostum)) {?> 
              <tr>
                  <td colspan="3" class="text-center">Data Kosong</td>
              </tr>
            <?php } else $no = 0;
            foreach ($kostum as $item) : $no++?>   
          <div class="container" class="section-p1">
              <div class="row mb-4 row-cols-1 row-cols-sm-1 row-cols-md-1 row-cols-lg-2">
                  <div class="col">
                      <div class="card align-items-center">
                        <img src="<?php echo base_url();?>assets/kostum/<?php echo $item->gambar;?>" alt="<?php echo $item->gambar;?>" width="80%" id="mainImg" alt="">
                      </div>
                  </div>
                  <div class="col">
                      <div class="single-pro-detail">
                          <!-- <h6>Home / Kostum</h6> -->
                          <h1 class="bg-success text-light p-2 mb-4 rounded"><?php echo $item->namaKostum; ?></h1>
                          <h4>
                          <table>
                                <tr>
                                    <td class="pb-2 pe-2">Kategori </td>
                                    <td class="pb-2 pe-1">:</td>
                                    <td class="pb-2"><?php echo $item->Kategori; ?></td>
                                </tr>
                                <tr>
                                    <td class="pb-2 pe-2">Harga </td>
                                    <td class="pb-2 pe-1">:</td>
                                    <td class="pb-2"><?php echo 'Rp ' .number_format($item->harga) ?> / hari</td>
                                </tr>
                                <tr>
                                    <td class="pb-4">Stok</td>
                                    <td class="pb-4">:</td>
                                    <td class="pb-4"><?php echo $item->stok?> item</td>
                                </tr>
                              
                              <tr><td colspan="3">Detail Kostum</td></tr>
                            </table>
                          </h4>
                          <!-- <h5>Detail Kostum</h5> -->
                          <span><?php echo  $item->deskripsi?></span>
                          
                          <div class="my-3 d-flex ">
                              <?php echo anchor('user/koleksi/tambah_ke_keranjang/'.$item->idKostum,'<div class=""><div class="me-3 btn btn-outline-dark swalDefaultSuccess"><i class="me-1 fa fa-shopping-cart"></i>Tambah ke Keranjang</div></div>' ) ?>
                      
                              <a href="<?php echo site_url('user/koleksi')?>"><button class="btn btn-outline-dark px-4">Kembali</button></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
    </div>
    <!-- Akhir Isi Detail -->
