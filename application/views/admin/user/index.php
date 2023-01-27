<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 text-gray-800">Member</h1>
    <ol class="breadcrumb ">
        <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
        <li class="breadcrumb-item active">Member</li>
    </ol>
    <!-- <a href="<?php echo site_url('user/add') ?>" class="btn btn-primary mb-3"> 
        Tambah Member
    </a> -->
<!-- DataTales Example -->
<div class="card shadow mb-4 col-lg-8">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Member</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Alamat</th>
                        <th>No Handphone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($user)) {?>
                        <tr>
                            <td colspan="6" class="text-center">Data Kosong</td>
                        </tr>
                    <?php } else $no = 0;
                    foreach ($user as $item) : $no++ ?>
                    <tr>
                        <td><?php echo $no ?></td>
                        <td><?php echo $item->namaUser; ?></td>
                        <td><?php echo $item->email; ?></td>
                        <td><?php echo $item->username; ?></td>
                        <td><?php echo $item->alamat; ?></td>
                        <td><?php echo $item->no_hp; ?></td>
                        <!-- <td>
                            <a href="<?php echo site_url('kategori/editKategori/'.$item->idKategori) ?>" class="btn btn-warning">Edit</a>
                            <a href="<?php echo site_url('kategori/delete/'.$item->idKategori) ?>" class="btn btn-danger">Hapus</a>
                        </td> -->
                </tbody>
                <?php endforeach; ?>
            </table>
             <?php echo $pagination?>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->