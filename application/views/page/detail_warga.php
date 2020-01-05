<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail Warga</h1>
        </div>
    </section>
    <?php foreach($detail as $dt) : ?>

        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-5"><br><br>
                        <img src="<?php echo base_url(). 'assets/foto_warga/'. $dt->foto_warga ?>" width="430px" height="510"> 
                    </div>
                    <div class="col-md-6">
                        <table class="table">
                            <tr>
                                <td>NIK</td>
                                <td><?php echo $dt->nik?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><?php echo $dt->nama_lengkap?></td>
                            </tr>
                            <tr>
                                <td>Ttl</td>
                                <td><?php echo $dt->ttl?></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                <?php if($dt->jenis_kelamin == "0"){
                                echo "<span class='badge badge-success'>Perempuan</span>";
                                }else{
                                    echo "<span class='badge badge-primary'>Laki-Laki</span>";
                                }
                                ?>
                            </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $dt->blok?>, <?php echo $dt->rt?>, <?php echo $dt->desa?>, <?php echo $dt->kecamatan?>, <?php echo $dt->kabupaten?></td>
                            </tr>
                            <tr>
                                <td>Agama</td>
                                <td><?php echo $dt->agama?></td>
                            </tr>
                            <tr>
                                <td>Status Perkawinan</td>
                                <td><?php echo $dt->status_perkawinan?></td>
                            </tr>
                            <tr>
                                <td>Pekerjaan</td>
                                <td><?php echo $dt->pekerjaan?></td>
                            </tr>
                            <tr>
                                <td>Kewarganegaraan</td>
                                <td><?php echo $dt->kewarganegaraan?></td>
                            </tr>
                        </table>
                        <a href="<?php echo base_url('admin/data_warga/')?>" class="btn btn-danger ml-4">Back</a>
                        <a href="<?php echo base_url('admin/data_warga/update_warga/'.$dt->id_warga) ?>" class="btn btn-primary ml-3">Update</a>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach;?>
</div>
