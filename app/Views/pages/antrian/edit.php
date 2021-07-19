<?= $this->extend('layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data antrian</h3>
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
            <form method="post" action="<?= base_url('antrian/update/' . $antrian->id_antrian) ?>">
                <?= csrf_field(); ?>

                <div class="form-group">
                    <label for="tanggal">Tanggal Antrian</label>
                    <input type="datetime-local" class="form-control" id="tanggal" name="tanggal" alue="<?= $antrian->tanggal; ?>">
                </div>
                <div class="form-group">
                    <label for="no_antrian">Nomor Antrian</label>
                    <input type="number" class="form-control" id="no_antrian" name="no_antrian" value="<?= $antrian->no_antrian; ?>">
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="number" class="form-control" id="status" name="status" value="<?= $antrian->status; ?>">
                </div>
                <div class="form-group">
                    <label for="id_pelayanan">Pelayanan</label>
                    <input type="number" class="form-control" id="id_pelayanan" name="id_pelayanan" value="<?= $antrian->id_pelayanan; ?>">
                </div>
                <div class="form-group">
                    <label for="waktu_panggil">Waktu Panggil</label>
                    <input type="datetime-local" class="form-control" id="waktu_panggil" name="waktu_panggil" value="<?= $antrian->waktu_panggil; ?>">
                </div>
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai</label>
                    <input type="datetime-local" class="form-control" id="waktu_selesai" name="waktu_selesai" value="<?= $antrian->waktu_selesai; ?>">
                </div>
                <div class="form-group">
                    <label for="id_loket">Loket</label>
                    <input type="text" class="form-control" id="id_loket" name="id_loket" value="<?= $antrian->id_loket; ?>">
                </div>

                <div class="form-group">
                    <input type="submit" value="Update Data" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>