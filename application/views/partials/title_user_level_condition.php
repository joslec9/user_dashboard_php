<?php
	if($this->session->userdata('user_level') == 'admin')
	{
?>
		<?= "Admin" ?>
<?php
	}
	else //$this->session->userdata('user_level') == 1
	{
?>
		<?= "User" ?>
<?php
	}
?>