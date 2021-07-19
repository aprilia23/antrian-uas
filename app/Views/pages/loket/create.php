<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data loket</h3>
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
            <?php echo form_open('loket/store'); ?>
            <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_loket">Nama loket</label>
                    <input type="text" class="form-control" id="nama_loket" name="nama_loket" value="<?= old('nama_loket'); ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan"><?= old('keterangan') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="id_pelayanan">Pelayanan</label>
                    <select name="id_pelayanan" class="form-control">
                        <?php foreach($pelayanan as $key):?>
                            <option value="<?php echo $key->id_pelayanan ?>" ><?php echo $key->nama_pelayanan ?></option>
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