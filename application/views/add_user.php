<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->library('form_validation');
?>
<!DOCTYPE html>
<html>
<head>
	<title>New User</title>
    <?php $this->load->view('partials/head.php'); ?>
</head>
<body>
<?php $this->load->view('partials/nav.php'); ?>
	<!-- main content -->
	<div class="container" style="margin-top: 50px">
		<div class="col-md-4 padded blue">
			<h2>Add a new user</h2>
			<form action="/register_admin" method="post">
				<div class="form-group">
					<label>Email address</label>
					<p><?= form_error('email'); ?></p>
					<input type="text" name="email" class="form-control" placeholder="email" />
				</div>
				<div class="form-group">
					<label>First Name</label>
					<p><?= form_error('first'); ?></p>
					<input type="text" name="first" class="form-control" placeholder="first name" />
				</div>
				<div class="form-group">
					<label>Last Name</label>
					<p><?= form_error('last'); ?></p>
					<input type="text" name="last" class="form-control" placeholder="last name" />
				</div>
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
				<button class="btn btn-success pull-right" type="submit">Create</button>
			</form>
		</div>
	</div>
    <?php $this->load->view('partials/scripts.php'); ?>
</body>
</html>