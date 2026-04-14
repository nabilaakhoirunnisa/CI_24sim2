<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
            <a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary btn-sm">
                <i class="fas fa-plus"></i> Tambah Anggota
            </a>
        </div>
        <div class="card-body">

            <?php if ($this->session->flashdata('succes')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= $this->session->flashdata('succes') ?>
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
                </div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nomor Anggota</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($anggota as $row): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row->Nomor_Anggota ?></td>
                            <td><?= $row->Nama ?></td>
                            <td><?= $row->Telepon ?></td>
                            <td><?= $row->Email ?></td>
                            <td>
                                <?php if ($row->Status == 'Aktif'): ?>
                                    <span class="badge badge-success">Aktif</span>
                                <?php else: ?>
                                    <span class="badge badge-secondary">Tidak Aktif</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('anggota/edit/' . $row->Nomor_Anggota) ?>" 
                                   class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="<?= base_url('anggota/hapus/' . $row->Nomor_Anggota) ?>" 
                                   class="btn btn-danger btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i> Hapus
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>