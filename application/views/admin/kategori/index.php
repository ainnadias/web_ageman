<!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 text-gray-800">Kategori</h1>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Kategori</li>
    </ol>
    <a href="<?php echo site_url('kategori/add') ?>" class="btn btn-primary mb-3"> 
                    Tambah Kategori 
    </a>
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-8">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kategori</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Id</th>
                        <th>Nama Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($kategori)) {?>
                        <tr>
                            <td colspan="3" class="text-center">Data Kosong</td>
                        </tr>
                    <?php } else $no = 0;
                    foreach ($kategori as $item) : $no++ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $item->idKategori; ?></td>
                        <td><?php echo $item->namaKategori; ?></td>
                        <td class="text-center">
                            <a href="<?php echo site_url('kategori/editKategori/'.$item->idKategori) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('kategori/delete/'.$item->idKategori) ?>" class="btn btn-danger">Hapus</a>
                        </td>
                </tbody>
                <?php endforeach; ?>
            </table>
             <?php echo $pagination?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->