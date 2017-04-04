<?php
	if($this->session->userdata('user_level') == 'admin')
	{
?>
			<?= "Manage Users" ?>
<?php
	}
	else //$this->session->userdata('user_level') == 1
	{
?>
			<?= "All Users" ?>
<?php
	}
?>