<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Tambah Data Pelayanan</h3>
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
            <form method="post" action="<?= base_url('pelayanan/store') ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_pelayanan">Nama Pelayanan</label>
                    <input type="text" class="form-control" id="nama_pelayanan" name="nama_pelayanan" value="<?= old('nama_pelayanan'); ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan"><?= old('keterangan') ?></textarea>
                </div>
                <div class="form-group">
                    <label for="code_pelayanan">Kode Pelayanan</label>
                    <input type="number" class="form-control" id="code_pelayanan" name="code_pelayanan" value="<?= old('code_pelayanan'); ?>">
                </div>
                <div class="form-group">
                    <input type="submit" value="Simpan Data" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>