<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data loket</h3>
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
            <?php echo form_open('loket/update/' . $loket->id_loket ); ?>
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="nama_loket">Nama loket</label>
                    <input type="text" class="form-control" id="nama_loket" name="nama_loket" value="<?= $loket->nama_loket; ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $loket->keterangan; ?>" />
                </div>

                <div class="form-group">
                    <label for="id_pelayanan">Pelayanan</label>
                    <input type="text" class="form-control" id="id_pelayanan" name="id_pelayanan" value="<?= $loket->id_pelayanan; ?>" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Update Data" class="btn btn-info" />
                </div>
                <?php echo form_close(); ?>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>