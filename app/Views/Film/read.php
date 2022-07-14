<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Data Film</h3>
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
            <a href="<?= base_url('/Film/create'); ?>" class="btn btn-primary">Tambah</a>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Judul film</th>
                    <th>Tanggal rilis</th>
                    <th>Lama tayang</th>
                    <th>jumlah penonton</th>
                    <th>Action</th>
                </tr>
                <?php
                foreach ($film as $row) {
                ?>
                    <tr>
                        <td><?= $row->id_film; ?></td>
                        <td><?= $row->judul_film; ?></td>
                        <td><?= $row->tanggal_rilis; ?></td>
                        <td><?= $row->lama_tayang; ?></td>
                        <td><?= $row->jumlah_penonton; ?></td>
                        <td>
                            <a title="Edit" href="<?= base_url("FIlm/edit/$row->id_film"); ?>" class="btn btn-info">Edit</a>
                            <a title="Delete" href="<?= base_url("Film/delete/$row->id_film"); ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>