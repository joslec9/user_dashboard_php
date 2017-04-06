<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->library('form_validation');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <?php $this->load->view('partials/head.php'); ?>
</head>
<body>
<?php $this->load->view('partials/nav.php'); ?>
	<!-- main content -->
	<div class="container">
		<h2>Edit user #<?= $id ?></h2>
		<div class="col-md-6 blue">
			<h3>Edit Information</h3>
            <?php
            if($this->session->flashdata('update_error'))
            { ?>
                <p class="error"><?= $this->session->flashdata("update_error"); ?></p>
                <?php
            }
            else
            { ?>
                <p class="success"><?= $this->session->flashdata("update_info"); ?></p>
            <?php
            }
            ?>
			<form action="/users/edit/<?= $id ?>" method="post">
				<input type="hidden" name="form_id" value="user_info">
				<div class="form-group">
					<label>Email address</label>
					<p><?= form_error('email'); ?></p>
					<input type="text" name="email" class="form-control" value="<?= set_value('email') ?>" placeholder="email" />
				</div>
				<div class="form-group">
					<label>First Name</label>
					<p><?= form_error('first'); ?></p>
					<input type="text" name="first" class="form-control" value="<?= set_value('first') ?>" placeholder="first name" />
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<p><?= form_error('last'); ?></p>
					<input type="text" name="last" class="form-control" value="<?= set_value('last') ?>" placeholder="last name" />
				</div>
				<div class="form-group">
					<label>User Level</label>
					<p><?= form_error('last'); ?></p>
					<select name="user_level" class="form-control">
						<option>normal</option>
						<option>admin</option>
					</select>
				</div>
				<button class="btn btn-success pull-right" type="submit">Save</button>
			</form>
		</div>
		<div class="col-md-5 blue pull-right">
			<h3>Change Password</h3>
            <?php
            if($this->session->flashdata('update_error'))
            { ?>
                <p class="error"><?= $this->session->flashdata("password_error"); ?></p>
                <?php
            }
            else
            { ?>
                <p class="success"><?= $this->session->flashdata("password_updated"); ?></p>
                <?php
            }
            ?>
			<form action="/users/edit/<?= $id ?>" method="post">
				<input type="hidden" name="form_id" value="user_password">
				<div class="form-group">
					<label>Password</label>
					<p><?= form_error('password'); ?></p>
					<input type="password" name="password" class="form-control" placeholder="password" />
				</div>
				<div class="form-group">
					<label>Password Confirm</label>
					<p><?= form_error('confirm'); ?></p>
					<input type="password" name="confirm" class="form-control" placeholder="password" />
				</div>
				<button class="btn btn-success pull-right" type="submit">Update Password</button>
			</form>
		</div>
	</div>
    <?php $this->load->view('partials/scripts.php'); ?>
</body>
</html>