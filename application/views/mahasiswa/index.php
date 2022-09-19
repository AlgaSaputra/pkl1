<?php
$this->load->view('templates/header', $this->data);
$this->load->view('templates/sidebar');
?>

<?php if ($this->session->flashdata('flash')) : ?>
    <div class="row" mt-3>
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="card">

    <table class="table">
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="<?= base_url(); ?>Mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
            </div>
        </div>
        <thead>
            <tr>
                <th><b>No</b></th>
                <th><b>NIM</b></th>
                <th><b>Name</b></th>
                <th><b>Phone</b></th>
                <th><b>Address</b></th>
                <th><b>Action</b></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $mhs['nim']; ?></td>
                    <td><?= $mhs['name']; ?></td>
                    <td><?= $mhs['phone']; ?></td>
                    <td><?= $mhs['address']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['nim']; ?>" class="btn btn-warning">edit</a>
                        <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['nim']; ?>" class="btn btn-danger" onclick="return confirm('Yakin?');">delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
$this->load->view('templates/footer');
?>