<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data antrian</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <a href="<?= base_url('antrian/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Tanggal Antrian</th>
                    <th>No Antrian</th>
                    <th>Status</th>
                    <th>Pelayanan</th>
                    <th>Waktu Panggil</th>
                    <th>Waktu Selesai</th>
                    <th>Loket</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($antrian as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->tanggal; ?></td>
                        <td><?= $row->no_antrian; ?></td>
                        <td><?= $row->status; ?></td>
                        <td><?= $row->id_pelayanan; ?></td>
                        <td><?= $row->waktu_panggil; ?></td>
                        <td><?= $row->waktu_selesai; ?></td>
                        <td><?= $row->id_loket; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("antrian/edit/$row->id_antrian"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("antrian/delete/$row->id_antrian") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>