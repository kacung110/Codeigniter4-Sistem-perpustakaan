<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Edit Data Film</h3>
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
            <form method="post" action="<?= base_url('Film/simpan') ?>">
                <div class="mb-3">
                    <label for="id" class="form-label">ID</label>
                    <input type="text" id="id" name="id_film" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul film</label>
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal rilis</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal">
                </div>
                <div class="mb-3">
                    <label for="tayang" class="form-label">Lama tayang</label>
                    <input type="date" class="form-control" id="tayang" name="tayang">
                </div>
                <div class="mb-3">
                    <label for="penonton" class="form-label">Jumlah penonton</label>
                    <input type="text" class="form-control" id="penonton" name="jumlah">
                </div>
                <div class="form-group">
                <input type="submit" value="Simpan" class="btn btn-info" />
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>