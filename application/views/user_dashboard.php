<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
    <?php $this->load->view('partials/head.php'); ?>
    <?php $this->load->view('partials/title_user_level_condition.php'); ?>
</head>
<body>
<?php $this->load->view('partials/nav.php'); ?>
	<!-- main content -->
	<div class="container"style="margin-top: 35px;">
        <?php
if($this->session->userdata('admin'))
{ ?>
		<h3>Manage Users</h3>
		<a class="btn btn-primary pull-right top" href="/users/new">Add user</a>
<?php 
}
else 
{ ?>
		<h3>All Users</h3>
<?php 
}
 ?>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>
						ID
					</th>
					<th>
						Name
					</th>
					<th>
						Email
					</th>
					<th>
						Created At
					</th>
					<th>
						User Level
					</th>
<?php 
if($this->session->userdata('admin'))
{ ?>
					<th>
						Actions
					</th>
<?php 
}
 ?>
				</tr>
			</thead>
			<tbody>
<?php 
if(!empty($users)){
	foreach($users as $user)
	{ ?>
				<tr>
					<td>
						<?= $user['id'] ?>
					</td>
					<td>
						<a href="/users/show/<?= $user['id'] ?>"><?= $user['first_name'] ?> <?= $user['last_name'] ?></a>
					</td>
					<td>
						<?= $user['email'] ?>
					</td>
					<td>
						<?= $user['created_at'] ?>
					</td>
					<td>
						<?= $user['user_level'] ?>
					</td>
<?php 
if($this->session->userdata('admin'))
{ ?>
					<td>
						<a class="act-edit" href="/users/edit/<?= $user['id'] ?>">edit</a> <a href="/edit/delete/<?= $user['id'] ?>">remove</a>
					</td>
<?php 
}
 ?>
				</tr>
<?php 
} }
 ?>
			</tbody>
		</table>
	</div>
</div>
    <?php $this->load->view('partials/scripts.php'); ?>
</body>
</html>