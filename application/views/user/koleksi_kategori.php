<!-- Awal Isi Koleksi -->
    <!-- Header-->
    <header class="bg-dark py-5" style="background-image:url(<?php echo base_url('/assets/images/mask.jpg') ?>)">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Sewa di AGEMAN SEWA</h1>
                <p class="lead fw-normal text-white-50 mb-0">Praktis ga pake ribet !</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container">
            <div class="text-center justify-content-center">
                <div class="text-center justify-content-center">
                    <h2>Kategori : <?php echo $kategori->namaKategori?></h2>
                </div>
            </div>
            <div class="row row-cols-4 row-cols-sm-3 row-cols-lg-2 text-center justify-content-center">
                <div class="collection">
                <?php $kategori = $this->model_user->get_all_data_kategori();?>
                <a href="<?php echo site_url('user/koleksi') ?>" class="btn btn-outline-dark px-3 m-2 " type="button">All</a>

                  <?php if (empty($kategori)) { ?>
                    <a class="btn btn-outline-dark px-3 m-2 " type="button">Data Kosong</a>

                  <?php } else
                    foreach ($kategori as $item) : ?>
                    <a href="<?php echo site_url('user/koleksi/kategori/'. $item->idKategori) ?>" class="btn btn-outline-dark px-3 m-2 " type="button"><?= $item->namaKategori ?></a>
                  <?php endforeach; ?>
                  <!-- <button class="btn btn-outline-dark px-3 m-2 " type="button">Wanita</button>
                  <button class="btn btn-outline-dark px-3 m-2" type="button">Pria</button>
                  <button class="btn btn-outline-dark px-3 m-2" type="button">Anak - anak</button>
                  <button class="btn btn-outline-dark px-3 m-2" type="button">Properti</button>
                  <button class="btn btn-outline-dark px-3 m-2" type="button">Aksesoris</button> -->
                </div>
            </div>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php if(empty($kostum)) {?> 
                <tr>
                    <td colspan="3" class="text-center">Data Kosong</td>
                </tr>
            <?php } else $no = 0;
            foreach ($kostum as $item) : $no++ ?>   
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="<?php echo base_url();?>assets/kostum/<?php echo $item->gambar;?>" width="90" alt="<?php echo $item->gambar;?>" />
                        <!-- Product details-->
                        <div class="card-body ">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder"><?php echo $item->namaKostum; ?></h5>
                                <!-- Product price-->
                                <div class="mt-3">
                                    <b style="
                                        font-weight: 500;
                                        color: #cdac79;
                                        background-color: #1b4b43;
                                        width: 140px;
                                        border-radius: 10px;
                                        padding: 6px 15px 6px 15px;"><?php echo $item->harga; ?> / hari</b>
                                </div>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="d-flex justify-content-center text-center">
                                    <?php
                                        $status = $this->session->userdata('status');
                                        if (empty($status)) {
                                            echo '<div class=""><div class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-shopping-cart"></i></div></div>';
                                            echo '<div class=""><a class="btn btn-outline-dark ms-2" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a></div>';
                                        } else {
                                            echo anchor('user/koleksi/tambah_ke_keranjang/'.$item->idKostum,'<div class=""><div class="btn btn-outline-dark swalDefaultSuccess"><i class="fa fa-shopping-cart"></i></div></div>' );
                                            echo '<div class="me-2"></div>';
                                            echo anchor('user/koleksi/detail_kostum/'.$item->idKostum,'<div class="btn btn-outline-dark">Detail</div>' );
                                        }
                                    ?>
                                    <!-- <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Login</button> -->
                                    <!-- <?php echo anchor('user/koleksi/tambah_ke_keranjang/'.$item->idKostum,'<div class=""><div class="btn btn-outline-dark swalDefaultSuccess"><i class="fa fa-shopping-cart"></i></div></div>' ) ?> -->
                                    <!-- <div class=""><a class="btn btn-outline-dark ms-2" href="<?php echo site_url('user/koleksi/detail_kostum/'.$item->idKostum)?>">Detail</a></div> -->
                                </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                
            </div>
        </div>
    </section>
    <!-- Akhir Isi Koleksi -->

  