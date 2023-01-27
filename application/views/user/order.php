
<!-- Awal Sewa -->
<div class="container">
        <main class="mb-5">
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="<?php echo base_url()?>assets/images/Logo TPE.png" alt="" width="200" >
            <h2>Keranjang Sewa</h2>
            <!-- <p class="lead">Harap isilah formulir dibawah ini dengan benar! Jika terbukti mengisikan data yang tidak benar maka akan di blok dari <b>Ageman Sewa</b></p> -->  
        </div>
        <div class="">
        <?php if($this->session->flashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Yeayy!</strong> <?= $this->session->flashdata('success')?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['flash'])?>
        <?php endif?>
        </div>
      
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Data Keranjang</h6>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th width="25%">Gambar</th>
                                <th width="25%">Nama Kostum</th>
                                <th width="7%">Jumlah</th>
                                <th width="13%">Harga</th>
                                <th width="15%">Sub Total</th>
                                <th width="10%">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($this->cart->contents())) { ?>
                           <tr>
                            <td colspan="7" class="text-center">
                                Keranjang Kosong
                            </td>
                           </tr>

                            <?php } else $no = 1;
                            foreach ($this->cart->contents() as $items) : ?>

                            <tr>
                                <td class="text-center"><?php echo $no++?></td>
                                <td class="justify-content-center text-center">
                                    <?php $imageURL = !empty($items['image'])?base_url('assets/kostum/'.$items['image']):base_url('assets/images/undraw_posting_photo.svg'); ?>
                                    <img src="<?php echo $imageURL; ?>" width="120"/>
                                </td>
                                <td><?php echo $items['name']?></td>
                                <td class="text-center"><?php echo $items["qty"]?></td>
                                <td><?php echo 'Rp ' .number_format( $items['price'], 0, ',','.')?></td>
                                <td><?php echo 'Rp ' .number_format($items['subtotal'], 0, ',', '.') ?></td>
                                <td class="text-center">
                                <?php echo 'Rp ' .number_format($items['subtotal'], 0, ',', '.') ?>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </main>
    </div>
<!-- Akhir sewa -->