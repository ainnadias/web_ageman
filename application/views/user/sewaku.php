
<!-- Awal Sewa -->
<div class="container">
        <main class="mb-5">
          <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="<?php echo base_url()?>assets/images/Logo TPE.png" alt="" width="200" >
            <h2>Tabel Sewa <?php echo $user->namaUser?></h2>        </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-success">Data Sewa <?php echo $user->namaUser?></h6>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th width="3%">No</th>
                                <th width="10%">Nama User</th>
                                <th width="12%">Tanggal Sewa</th>
                                <th width="12%">Tanggal Mulai Sewa</th>
                                <th width="12%">Tanggal Kembali</th>
                                <th width="10%">Total Sewa</th>
                                <th width="7%">Status</th>
                                <!-- <th width="7%">Aksi</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (empty($sewa)) { ?>
                           <tr>
                            <td colspan="7" class="text-center">
                                Sewa Kosong
                            </td>
                           </tr>

                            <?php } else $no = 0;
                            foreach ($sewa as $item) : $no++?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <td><?php echo $item->namaUser; ?></td>
                                <td><?php echo format_indo(date($item->tanggalSewa)); ?></td>
                                <td><?php echo format_indo(date($item->tgl_mulai_sewa)); ?></td>
                                <td><?php echo format_indo(date($item->tgl_kembali_sewa)); ?></td>
                                <td><?php echo 'Rp '.number_format($item->total_sewa); ?></td>
                                <td class="text-center">
                                    <?php if($item->status == 'N'){?>
                                        <span class="badge badge-pill badge-danger py-2 px-3">Pending</span>
                                    <?php } else{ ?>
                                            <span class="badge badge-pill badge-success p-2">Diterima</span>
                                    <?php } ?>
                                </td>
                            </tr>
                            </tbody>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        </main>
    </div>
<!-- Akhir sewa -->