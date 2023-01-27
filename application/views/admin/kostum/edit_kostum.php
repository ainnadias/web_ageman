<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid my-4">
            <h1 class="h3 text-gray-800">Kostum</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('dashboard/dashboard_admin') ?>">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="<?php echo site_url('kostum/index') ?>">Kostum</a></li>
                    <li class="breadcrumb-item active">Edit Kostum</li>
                </ol>
                <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-8">
                    <form method="POST" action="<?php echo site_url('kostum/update');?>" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Kostum</h4>
                            </div>
                            
                                <input type="hidden" name="id" value="<?php echo $kostum->idKostum?>" >
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Nama Kostum</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="namaKostum" placeholder="Nama Kostum" value="<?php echo $kostum->namaKostum?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Kategori</label>
                                    <div class="col-sm-8">
                                    <div class="form-selct">
                                        <select id="inputEmail3" class="form-control" name="idKategori">
                                            <option value="<?php echo $kostum->idKategori ?>"><?php echo $kostum->Kategori ?></option>
                                            <?php foreach ($kategori as $item) : ?>
                                                <option value="<?php echo $item->idKategori?>"><?php echo $item->namaKategori ?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Harga</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="harga" placeholder="Harga Kostum" value="<?php echo $kostum->harga ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Deskripsi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputEmail3" name="deskripsi" placeholder="Deskripsi Kostum" value="<?php echo $kostum->deskripsi ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Stok</label>
                                    <div class="col-sm-8">
                                        <input type="number" class="form-control" id="inputEmail3" name="stok" placeholder="Stok Kostum" value="<?php echo $kostum->stok ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Gambar</label>
                                    <div class="col-sm-8">
                                        <input type="file" class="custom-file-input" id="gambar" name="gambar" placeholder="Gambar Kostum">
                                        <label class="custom-file-label" for="gambar"></label>
                                        <img src="<?php echo base_url();?>assets/kostum/<?php echo $kostum->gambar;?>" width="90" alt="<?php echo $kostum->gambar;?>"></img>
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