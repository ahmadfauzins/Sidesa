<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Warga</h1>
        </div>

        <div class="card">
            <div class="card-body">
            <div class="section-body">
            <h2 class="section-title">Form Edit Warga</h2>
            <p class="section-lead">
              National Polithecnic Institute Of Cambodia
            </p>

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form edit Warga</h4>
                  </div>
                  <div class="card-body">

                  <?php foreach ($warga as $wrg) : ?>
                  <form method="post" action="<?php echo site_url('admin/data_warga/update_warga_aksi') ?>" enctype="multipart/form-data">

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nik</label>
                      <div class="col-sm-12 col-md-7">
                      <input type="hidden" class="form-control" name="id_warga" value="<?php echo $wrg->id_warga?>">
                        <input type="text" class="form-control" name="nik" value="<?php echo $wrg->nik?>" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Lengkap</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $wrg->nama_lengkap?>" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ttl</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control" name="ttl" value="<?php echo $wrg->ttl?>" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3 control-label">Jenis Kelamin</label>
                        <div class="custom-switches-stacked mt-4">
                            <label class="custom-switch">
                                <input type="radio" name="jenis_kelamin" value="1" class="custom-switch-input" <?php if($wrg->jenis_kelamin=='1')
                                     : echo 'checked'; ?><?php endif; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Laki - Laki</span>
                            </label>
                            <label class="custom-switch">
                                <input type="radio" name="jenis_kelamin" value="0" class="custom-switch-input" <?php if($wrg->jenis_kelamin=='0')
                                     : echo 'checked'; ?><?php endif; ?>>
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Perempuan</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Blok</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="blok" value="<?php echo $wrg->blok?>" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Rt</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="number" class="form-control" name="rt" value="<?php echo $wrg->rt?>" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Desa</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="desa" value="Karangsari" required readonly>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kecamatan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="kecamatan" value="Weru" required readonly>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kabupaten</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="kabupaten" value="Cirebon" required readonly>
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Agama</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="agama" required>
                          <option value="<?php echo $wrg->agama?>"><?php echo $wrg->agama?></option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Budha">Budha</option>
                          <option value="Katolik">Katolik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Konghucu">Konghucu</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status Perkawinan</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="status_perkawinan" required>
                          <option value="<?php echo $wrg->status_perkawinan?>"><?php echo $wrg->status_perkawinan?></option>
                          <option value="Belum Kawin">Belum Kawin</option>
                          <option value="Kawin">Kawin</option>
                          <option value="Janda">Janda</option>
                          <option value="Duda">Duda</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pekerjaan</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" name="pekerjaan" value="<?php echo $wrg->pekerjaan?>" required>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kewarganegaraan</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kewarganegaraan" required>
                          <option value="<?php echo $wrg->kewarganegaraan?>"><?php echo $wrg->kewarganegaraan?></option>
                          <option value="WNI">WNI</option>
                          <option value="WNA">WNA</option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Warga</label>
                      <div class="col-sm-12 col-md-7">
                      <img src="" alt="">
                      <img src="<?php echo base_url(). 'assets/foto_warga/'. $wrg->foto_warga ?>" width="120px" height="150">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Choose a Foto</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="file" class="form-control" name="foto_warga">
                      </div>
                    </div>
                    
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button type="submit" class="btn btn-primary">Update Warga</button>
                        <a href="<?php echo base_url('admin/data_warga/')?>" class="btn btn-danger ml-2">Back</a>
                      </div>
                    </div>
                    </form>
                          <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>

    </section>
</div>