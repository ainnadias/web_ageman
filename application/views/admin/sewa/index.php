<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="">
    <h1 class="h3 text-gray-800">Sewa</h1>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Sewa</li>
    </ol>
    <?php if($this->session->flashdata('flash')):?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Yeayy!</strong> <?= $this->session->flashdata('flash')?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
    <?php unset($_SESSION['flash'])?>
    <?php endif?>
    <!-- <a href="<?php echo site_url('user/add') ?>" class="btn btn-primary mb-3"> 
        Tambah Member
    </a> -->
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Sewa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th width="10%">Nama User</th>
                        <th width="12%">Tanggal Sewa</th>
                        <th width="12%">Tanggal Mulai Sewa</th>
                        <th width="12%">Tanggal Kembali</th>
                        <th width="10%">Total Sewa</th>
                        <th width="7%">Status</th>
                        <th width="7%">Aksi</th>
                        <!-- <th width="5%">Detail</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($sewa)) {?>
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    <?php } else $no = 0;
                    foreach ($sewa as $item) : $no++ ?>
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
                        <td class="text-center">
                            <?php if($item->status == 'N'){?>
                                <a href="<?= site_url('sewa/activated/'.$item->idSewa)?>" class="btn btn-primary"  onclick="return confirm('Apakah anda yakin untuk di proses ?')">Diterima</a>
                            <?php } else { ?>
                                <a href="#" class="btn btn-secondary" disabled>Diterima</a>
                            <?php } ?>
                        </td>
                        <!-- <td class="text-center">
                            <a href="<?php echo site_url('detailSewa/detail/'.$item->idSewa)?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                        </td> -->
                    </tr>
                </tbody>
                <?php endforeach; ?>
            </table>
             <?php echo $pagination?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->