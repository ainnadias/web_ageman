<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid my-4">
            <h1 class="h3 text-gray-800">Kostum</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('kostum/index') ?>">Kostum</a></li>
                    <li class="breadcrumb-item active">Tambah Kostum</li>
                </ol>
                <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <form method="POST" action="<?php echo site_url('kostum/save');?>" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Tambah Kostum</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Kostum</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="namaKostum" >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                    <div class="form-selct">
                                        <select id="inputEmail3" aria-label="Default select example" class="form-control" name="idKategori">
                                            <option selected>Kategori</option>
                                            <?php if (empty($kategori)) { ?>
                                                <option>Data Kosong</option>
                                            <?php } else
                                                foreach ($kategori as $item) : ?>
                                                <option value="<?= $item->idKategori ?>"><?= $item->namaKategori ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="harga" >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <!-- <input type="textarea" class="form-control" id="inputEmail3" name="deskripsi" > -->
                                        <textarea class="form-control" id="inputEmail3" name="deskripsi"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Stok</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputEmail3" name="stok" >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Upload Gambar Kostum</label>
                                    <div class="col-sm-8">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                        <label class="custom-file-label" for="gambar">Pilih Gambar ... </label>
                                      </div>
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