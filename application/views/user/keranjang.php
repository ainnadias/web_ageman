
<script>
  function updateCartItem(obj, rowid){
    $.get("<?php echo base_url('user/koleksi/update_keranjang'); ?>", {rowid:rowid, qty:obj.value}, function(resp){
        if(resp == 'ok'){
            location.reload();
        }else{
            alert('Update keranjang gagal, mohon coba lagi');
        }
    });
}
</script>

<!-- Awal keranjang -->
<div class="container">
        <main class="mb-5">
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="<?php echo base_url()?>assets/images/Logo TPE.png" alt="" width="200" >
            <h2>Keranjang Sewa</h2>
            <!-- <p class="lead">Harap isilah formulir dibawah ini dengan benar! Jika terbukti mengisikan data yang tidak benar maka akan di blok dari <b>Ageman Sewa</b></p> -->
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
                                <th width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Gambar</th>
                                <th>Nama Kostum</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot> -->
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
                                <td class="text-center"><input type="number" class="form-control text-center" value="<?php echo $items["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $items['rowid']; ?>')"></td>
                                <td><?php echo 'Rp ' .number_format( $items['price'], 0, ',','.')?></td>
                                <td><?php echo 'Rp ' .number_format($items['subtotal'], 0, ',', '.') ?></td>
                                <td class="text-center">
                                    <a class="btn btn-outline-dark" onclick="return confirm('Hapus keranjang?')?window.location.href='<?php echo base_url('user/koleksi/hapus_keranjang/'.$items['rowid']); ?>':false;"><i class="fa fa-duotone fa-trash" ></i></a>
                                </td>
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="table-responsive">
                <div class="container ">
                    <div class="row">
                        <div class="col-lg-5 mx-3">
                            <table class="table" width="30%">
                                <tr class="table-success">
                                    <th class="py-2 pe-4"><h4>Total</h4></th>
                                    <th class="py-2 "><h4>Rp <?php echo number_format($this->cart->total(), 0, ',', '.')?></h4></th>
                                </tr>
                                <form action="" method="post">
                                    <tr>
                                        <td class="py-2 pe-4"><b>Tanggal Mulai Sewa</b></td>
                                        <td class="py-2"><input type="date"  name="tgl_mulai_sewa" id="tglmulaisewa" placeholder="00/00/0000"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 pe-4"><b>Tanggal Kembali</b></td>
                                        <td class="py-2"><input type="date"  name="tgl_kembali_sewa" id="tglkembalisewa" placeholder="00/00/0000"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <button type="submit" name="hari_sewa" class="btn btn-outline-success">Jumlah Hari</button>
                                        </td>
                                    </tr>
                                </form>
                                
                            </table>
                        </div>
                        <div class="col-lg-5 mx-3">
                            <table class="table">
                            <?php
                                if(isset($_POST['hari_sewa'])){
                                    $tgl_mulai_sewa   = $_POST['tgl_mulai_sewa'];
                                    $tgl_kembali_sewa = $_POST['tgl_kembali_sewa'];

                                    $tanggal_mulai_sewa = new DateTime("$tgl_mulai_sewa");
                                    $tanggal_kembali_sewa = new DateTime("$tgl_kembali_sewa");
                                    $jumlah_hari    = $tanggal_kembali_sewa-> diff($tanggal_mulai_sewa) -> days + 1;

                                    echo "
                                        <tr>
                                            <th>Jumlah hari</th>
                                            <td>$jumlah_hari hari</td>
                                        </tr>    
                                    ";
                                }
                            ?>
                                    <tr class="table-success">
                                        <th class="py-2 pe-4"><h4>Total Sewa</h4></th>
                                        <th class="py-2" name="total_sewa"><h4>Rp <?php echo number_format($this->cart->total()*$jumlah_hari , 0, ',', '.')?></h4></th>
                                    </tr>
                                    <tr >
                                        <td colspan="2" >
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#sewaModal" class="btn btn-outline-dark px-4 py-2 mt-4" >Checkout
                                                <i class="fa-solid fa-shopping-cart ms-2"></i>
                                            </a>
                                        </td>
                                    </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </main>
    </div>
<!-- Akhir keranjang -->

    <!-- Logout Modal-->
    <div class="modal fade" id="sewaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title  " id="exampleModalLabel" bg-danger>Perhatian !!!</h5>
                    <button class="close bg-success text-white" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Sudahkah benar produk yang akan disewa?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancel</button>
                    <a class="btn btn-success" href="<?php echo site_url('user/order/index/'.$jumlah_hari.'/'.$tgl_mulai_sewa.'/'.$tgl_kembali_sewa)?>">Sewa</a>
                </div>
            </div>
        </div>
    </div>