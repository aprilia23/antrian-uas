<?= $this->extend('/layouts/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Pelayanan</h3>
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
            <a href="<?= base_url('pelayanan/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Id Pelayanan</th>
                    <th>Nama Pelayanan</th>
                    <th>Keterangan</th>
                    <th>Kode</th>
                    <th>Action</th>
                </tr>
                <?php
                $no = 1;
                foreach ($pelayanan as $row) {
                ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->id_pelayanan; ?></td>
                        <td><?= $row->nama_pelayanan; ?></td>
                        <td><?= $row->keterangan; ?></td>
                        <td><?= $row->code_pelayanan; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("pelayanan/edit/$row->id_pelayanan"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("pelayanan/delete/$row->id_pelayanan") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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