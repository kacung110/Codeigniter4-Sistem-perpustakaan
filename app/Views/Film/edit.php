<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Update Data Film</h3>
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
            <form method="post" action="<?= base_url('/Film/update/'.$film->id_film); ?>">
                <?= csrf_field(); ?>
                <div class="form-group">
                    <label for="id_film">ID</label>
                    <input type="text" class="form-control" id="id_film" name="id_film" value="<?php echo $film->id_film;?>">
                </div>

                <div class="form-group">
                    <label for="judul_film">judul film</label>
                    <input type="text" class="form-control" id="judul_film" name="judul" value="<?php echo $film->judul_film?>">
                </div>

                <div class="form-group">
                    <label for="tanggal_rilis">tanggal_rilis</label>
                    <input type="date" class="form-control" id="tanggal_rilis" name="tanggal" value="<?php echo $film->tanggal_rilis; ?>" />
                </div>

                <div class="form-group">
                    <label for="Lama_tayang">Lama tayang</label>
                    <input type="date" class="form-control" id="Lama_tayang" name="tayang" value="<?php echo $film->lama_tayang; ?>" />
                </div>
                <div class="form-group">
                    <label for="jumlah_penonton">jumlah penonton</label>
                    <input type="text" class="form-control" id="jumlah_penonton" name="jumlah" value="<?php echo $film->jumlah_penonton; ?>" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Update" class="btn btn-info" />
                </div>

            </form>
        </div>
    </div>
</div>
<?= $this->endSection('content'); ?>