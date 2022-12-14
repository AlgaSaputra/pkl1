<?php
$this->load->view('templates/header', $this->data);
$this->load->view('templates/sidebar');
?>

<div id="infoMessage"><?php echo $message; ?></div>

<div class="card">
	<div class="table-responsive">
		<div class="card-body">
			<a href="<?= base_url('auth/create_user'); ?>" class="btn btn-primary">Create User</a>
			<a href="<?= base_url('auth/create_group'); ?>" class="btn btn-success text-white">Create group</a>
		</div>
		<table cellpadding=0 cellspacing=10 id="zero_config" class="table table-striped table-bordered">
			<tr>
				<th><?= 'No'; ?></th>
				<th><?php echo 'Name'; ?></th>
				<th><?php echo 'Username'; ?></th>
				<th><?php echo lang('index_email_th'); ?></th>
				<th><?php echo lang('index_groups_th'); ?></th>
				<th><?php echo lang('index_status_th'); ?></th>
				<th><?php echo lang('index_action_th'); ?></th>
			</tr>
			<?php $i = 1; ?>
			<?php foreach ($users as $user) : ?>
				<tr>
					<td><?= $i++; ?></td>
					<td><?php echo htmlspecialchars($user->first_name, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><?php echo htmlspecialchars($user->username, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><?php echo htmlspecialchars($user->email, ENT_QUOTES, 'UTF-8'); ?></td>
					<td>
						<?php foreach ($user->groups as $group) : ?>
							<?php echo anchor("auth/edit_group/" . $group->id, htmlspecialchars($group->name, ENT_QUOTES, 'UTF-8')); ?><br />
						<?php endforeach ?>
					</td>
					<td><?php echo ($user->active) ? anchor("auth/deactivate/" . $user->id, lang('index_active_link')) : anchor("auth/activate/" . $user->id, lang('index_inactive_link')); ?></td>
					<td><?php echo anchor("auth/edit_user/" . $user->id, 'Edit'); ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>
</div>
<!-- ============================================================== -->
<!-- Sales chart -->
<!-- ============================================================== -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->

<?php
$this->load->view('templates/footer');
?>