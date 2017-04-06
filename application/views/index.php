<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->session->sess_destroy();
$this->load->library('form_validation');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home Page</title>
    <?php $this->load->view('partials/custom_head.php'); ?>
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h1>Welcome to the Jose's App!</h1>
        <h2>Please log in or register</h2>
        <p>Check out what I built. A cool application using PHP MVC framework, CodeIgniter, MySQL with Twitter Bootstrap!.</p>
    </div>
    <div id='container'>
        <!-- login -->
        <form action='/login_user' method='post'>
            <h3>Log In</h3>
            <div class='required'>
                <label for='email'>Email:</label>
                <input type='text' name='email' class="form-control" placeholder="email@domain.com" />
            </div>
            <div class='required'>
                <label for='password'>Password:</label>
                <input type="password" name="password" class="form-control" placeholder="password" />
            </div>
            <input class="btn btn-success" type="submit" name="signin" value="Sign in!">
        </form>

        <!-- register -->
        <form class = 'register' action='register' method = 'post'>
            <h3>Register</h3>
            <div class='required'>
                <p><?= form_error('first'); ?></p>
                <label for='first_name'>First name:</label>
                <input type='text' class="form-control" name='first_name'/>
            </div>
            <div class='required'>
                <p><?= form_error('last'); ?></p>
                <label for='last_name'>Last name:</label>
                <input type='text' class="form-control" name='last_name'/>
            </div>
            <div class='required'>
                <p><?= form_error('email'); ?></p>
                <label for='email'>Email:</label>
                <input type='text' class="form-control" name='email'/>
            </div>
            <div class='required'>
                <p><?= form_error('password'); ?></p>
                <label for='password'>Password:</label>
                <input type='password' class="form-control" name='password'/>
            </div>
            <div class='required'>
                <p><?= form_error('confirm'); ?></p>
                <label for='confirm-password'>Confirm password:</label>
                <input type='password' class="form-control" name='confirm_password'/>
            </div>
            <input class="btn btn-success" type="submit" name="register" value="Register!">
        </form>
    </div>
</div>
<?php $this->load->view('partials/scripts.php'); ?>
</body>
</html>