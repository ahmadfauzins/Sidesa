<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Warga</h1>
        </div>

        <a href="<?php echo base_url('admin/data_warga/tambah_warga')?>" class="btn btn-primary mb-3">Add Warga</a>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama Lengkap</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php 
                $no=1;
                foreach($warga as $wrg) : ?>
                <tr>
                    <td><?php echo $no++?></td>
                    <td><?php echo $wrg->nik?></td>
                    <td><?php echo $wrg->nama_lengkap?></td>
                    <td><?php echo $wrg->blok?>, Rt. <?php echo $wrg->rt?>, <?php echo $wrg->desa?>, <?php echo $wrg->kecamatan?>, <?php echo $wrg->kabupaten?></td>
                    <td>
                    <a href="<?php echo base_url('admin/data_warga/detail_warga/').$wrg->id_warga ?>" class="btn btn-success"><i class="fas fa-eye"></i></a>
                    <a href="<?php echo base_url('admin/data_warga/update_warga/').$wrg->id_warga ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="<?php echo base_url('admin/data_warga/delete_warga/').$wrg->id_warga ?>" class="btn btn-danger" onclick="javascript: return confirm('Anda yakin hapus ?')"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

    </section>
</div>
