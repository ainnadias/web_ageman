<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
    <div class="">
    <h1 class="h3 text-gray-800">Sewa</h1>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Sewa</li>
    </ol>
    </div>

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
                        <th>No</th>
                        <th></th>
                        <th>Id Sewa</th>
                        <th>Nama Kostum</th>
                        <th>Harga / Item</th>
                        <th>Jumlah</th>
                        <th>Harga Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($detail_sewa)) {?>
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    <?php } else $no = 0;
                    foreach ($detail_sewa as $item) : $no++ ?>
                    <tr>
                        <td class="text-center"><?php echo $no ?></td>
                        <td>
                            <img src="<?php echo base_url();?>assets/kostum/<?php echo $item->gambar;?>" alt="<?php echo $item->gambar;?>" width="80px" id="mainImg" alt="">
                        </td>
                        <td><?php echo $item->idSewa; ?></td>
                        <td><?php echo $item->namaKostum; ?></td>
                        <td><?php echo $item->harga; ?></td>
                        <td class="text-center"><?php echo $item->qty; ?></td>
                        <td><?php echo $item->harga_detail; ?></td>
 
                </tbody>
                <?php endforeach; ?>
            </table>
             <!-- <?php echo $pagination?> -->
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->