<?php 
//function to echo class="active" to make nav bar links active if on that page.
//found this function off stackoverflow
//http://stackoverflow.com/questions/11813498/make-twitter-bootstrap-navbar-link-active
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <?php
	if($this->session->userdata("logged_in") == 1)
	{
?>
				<li><a href="/">Home</a></li>
<?php
	}
	else
	{
?>
<?php
	if($this->session->userdata('user_level') == 'admin')
	{
?>
				<li <?= echoActiveClassIfRequestMatches("admin"); ?>><a href="/dashboard/admin">Dashboard</a></li>
<?php
	}
	else
	{
?>
				<li <?= echoActiveClassIfRequestMatches("dashboard"); ?>><a href="/dashboard">Dashboard</a></li>
<?php
	}
?>
				<li <?= echoActiveClassIfRequestMatches("edit"); ?>><li><a href="/users/edit">Profile <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
<?php
	}
?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
<?php
	if($this->session->userdata("logged_in") == 1)
	{
?>
              <li><a href="/signin">Sign in</a></li>
<?php
	}
	else
	{
?>
        <li><a href="/">Log off <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
<?php
	}
?>
            </ul>
		</div>
	</div>
</nav>