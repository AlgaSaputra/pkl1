<?php
$this->load->view('templates/header', $this->data);
$this->load->view('templates/sidebar');
?>

<div class="card">

    <form class="form-horizontal" action="" method="POST">
        <div class="card-body">
            <!-- <h4 class="card-title">Personal Info</h4> -->
            <input type="hidden" name="nim" value="<?= $mahasiswa['nim'];?>">
            <div class="form-group row">
                <label for="name" class="col-sm-2 text-end control-label col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="name" value="<?= $mahasiswa['name'];?>" />
                    <small class="form-text text-danger"><?= form_error('name'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 text-end control-label col-form-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" id="phone" value="<?= $mahasiswa['phone'];?>" />
                    <small class="form-text text-danger"><?= form_error('phone'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 text-end control-label col-form-label">Address</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="address" ><?= $mahasiswa['address'];?></textarea>
                    <small class="form-text text-danger"><?= form_error('address'); ?></small>
                </div>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Change Data</button>
        </div>
    </form>
</div>

<?php
$this->load->view('templates/footer');
?>