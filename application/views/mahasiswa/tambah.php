<?php
$this->load->view('templates/header', $this->data);
$this->load->view('templates/sidebar');
?>

<div class="card">

    <form class="form-horizontal" action="" method="POST">
        <div class="card-body">
            <!-- <h4 class="card-title">Personal Info</h4> -->
            <div class="form-group row">
                <label for="nim" class="col-sm-2 text-end control-label col-form-label">NIM</label>
                <div class="col-sm-9">
                    <input type="text" name="nim" class="form-control" id="nim" placeholder="Insert Your NIM" />
                    <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="name" class="col-sm-2 text-end control-label col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Insert Your Name" />
                    <small class="form-text text-danger"><?= form_error('name'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-2 text-end control-label col-form-label">Phone</label>
                <div class="col-sm-9">
                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone" />
                    <small class="form-text text-danger"><?= form_error('phone'); ?></small>
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-sm-2 text-end control-label col-form-label">Address</label>
                <div class="col-sm-9">
                    <textarea class="form-control" name="address" placeholder="Your Address"></textarea>
                    <small class="form-text text-danger"><?= form_error('address'); ?></small>
                </div>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php
$this->load->view('templates/footer');
?>