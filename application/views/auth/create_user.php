<?php 
$this->load->view('templates/header', $this->data);
$this->load->view('templates/sidebar');
?>


<div class="row">
      <div class="card">
            <?php echo form_open("auth/create_user");?>                
            <div class="card-body">
                  <div id="infoMessage"><?php echo $message;?></div>                  
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_fname_label', 'first_name');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($first_name);?>
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_lname_label', 'last_name');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($last_name);?>
                              </div>
                        </div>                        
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_company_label', 'company');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($company);?>
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_phone_label', 'phone');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($phone);?>
                              </div>
                        </div>                        
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_identity_label', 'identity');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($identity);?>
                              </div>
                        </div>
                        <!-- echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>'; -->


                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_email_label', 'email');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($email);?>
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_password_label', 'password');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($password);?>
                              </div>
                        </div>
                        <div class="form-group row">
                              <label for="fname" class="col-sm-3 control-label col-form-label"><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                              <div class="col-sm-9">
                              <?php echo form_input($password_confirm);?>
                              </div>
                        </div>
                        <div class="col-sm-3 text-end control-label col-form-label">
                              <?php echo form_submit('submit', lang('create_user_submit_btn'), array('class'=>'btn btn-primary'));?>
                        </div>
                  </div>            
            </div>
      </div>


<?php echo form_close();?>

<?php $this->load->view('templates/footer'); ?>