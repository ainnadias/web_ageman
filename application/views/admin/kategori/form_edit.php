<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid my-4">
            <h1 class="h3 text-gray-800">Kategori</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('kategori/index') ?>">Kategori</a></li>
                    <li class="breadcrumb-item active">Edit Kategori</li>
                </ol>
                <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <form method="POST" action="<?php echo site_url('kategori/edit'); ?>">
                    <input type="hidden" name="id" value="<?= $kategori->idKategori; ?>">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Kategori</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Kategori</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="namaKategori" placeholder="Nama Kategori"
                                        value="<?php echo $kategori->namaKategori; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-1">Simpan</button>
                                <button class="btn btn-secondary" type="reset">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </main>
</div>