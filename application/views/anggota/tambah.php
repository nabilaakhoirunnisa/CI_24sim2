<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Anggota</h6>
        </div>
        <div class="card-body">
            <form action="<?= base_url('anggota/simpan') ?>" method="post">

    <div class="form-group">
        <label>Nomor Anggota</label>
        <input type="text" name="nomor_anggota" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label>Telepon</label>
        <input type="text" name="telepon" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Tanggal Daftar</label>
        <input type="date" name="tanggal_daftar" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
        </div>
    </div>
</div>