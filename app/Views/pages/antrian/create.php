<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data antrian</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <?php echo form_open('antrian/store'); ?>
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="tanggal">Tanggal Antrian</label>
                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" value="<?= old('nama_antrian'); ?>">
                </div>
                <div class="form-group">
                    <label for="no_antrian">Nomor Antrian</label>
                    <input type="number" class="form-control" id="no_antrian" name="no_antrian" value="<?= old('nama_antrian'); ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="number" class="form-control" id="status" name="status" value="<?= old('nama_antrian'); ?>">
                </div>
                <div class="form-group">
                    <label for="id_pelayanan">Pelayanan</label>
                    <select name="id_pelayanan" class="form-control">
                        <?php foreach($pelayanan as $key):?>
                            <option value="<?php echo $key->id_pelayanan ?>" ><?php echo $key->id_pelayanan ?></option>
                        <?php endforeach; ?>
                    </select>             
                </div>
                <div class="form-group">
                    <label for="waktu_panggil">Waktu Panggil</label>
                    <input type="datetime-local" class="form-control" id="waktu_panggil" name="waktu_panggil" value="<?= old('nama_antrian'); ?>">
                </div>
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai</label>
                    <input type="datetime-local" class="form-control" id="waktu_selesai" name="waktu_selesai" value="<?= old('nama_antrian'); ?>">
                </div>
                <div class="form-group">
                    <label for="id_loket">Loket</label>
                    <select name="id_loket" class="form-control">
                        <?php foreach($loket as $key):?>
                            <option value="<?php echo $key->id_loket ?>" ><?php echo $key->id_loket ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan Data" class="btn btn-info" />
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>