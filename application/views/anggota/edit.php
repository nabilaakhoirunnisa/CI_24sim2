<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Anggota</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('anggota/update/' . $anggota->Nomor_Anggota) ?>" method="post">

    <div class="form-group">
        <label>Nomor Anggota</label>
        <input type="text" name="nomor_anggota"
               value="<?= $anggota->Nomor_Anggota ?>" class="form-control" readonly>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama"
               value="<?= $anggota->Nama ?>" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control"><?= $anggota->Alamat ?></textarea>
    </div>

    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon"
               value="<?= $anggota->Telepon ?>" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email"
               value="<?= $anggota->Email ?>" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Tanggal Daftar</label>
        <input type="date" name="tanggal_daftar"
               value="<?= $anggota->Tanggal_Daftar ?>" class="form-control">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Aktif" <?= $anggota->Status == 'Aktif' ? 'selected' : '' ?>>Aktif</option>
            <option value="Tidak Aktif" <?= $anggota->Status == 'Tidak Aktif' ? 'selected' : '' ?>>Tidak Aktif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
    </div>
</div>