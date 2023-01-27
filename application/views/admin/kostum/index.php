<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 text-gray-800">Kostum</h1>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Kostum</li>
    </ol>
    <a href="<?php echo site_url('kostum/add')?>" class="btn btn-primary mb-3"> 
        Tambah Kostum 
    </a>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kostum</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Kostum</th>
                        <th>Harga</th>
                        <th width="30%">Deskripsi</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Nama Kostum</th>
                        <th>Harga</th>
                        <th width="30%">Deskripsi</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php if(empty($kostum)) {?>
                        <tr>
                            <td colspan="3" class="text-center">Data Kosong</td>
                        </tr>
                    <?php } else $no = 1;
                    foreach ($kostum as $item) 
                    { ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $item->Kategori; ?></td>
                        <td><?php echo $item->namaKostum; ?></td>
                        <td><?php echo 'Rp ' .number_format($item->harga);  ?></td>
                        <td><?php echo $item->deskripsi; ?></td>
                        <td><?php echo $item->stok; ?></td>
                        <td><img src="<?php echo base_url();?>assets/kostum/<?php echo $item->gambar;?>" width="90" alt="<?php echo $item->gambar;?>"></img></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('kostum/edit/'.$item->idKostum);?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('kostum/delete/'.$item->idKostum);?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
                <?php $no++; 
                    }
                ?>
            </table>
            <?php echo $pagination?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

