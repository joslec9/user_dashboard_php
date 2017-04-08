<?php
//function to echo class="active" to make nav bar links active if on that page.
//found this function off stackoverflow
//http://stackoverflow.com/questions/11813498/make-twitter-bootstrap-navbar-link-active
function echoActiveClassIfRequestMatches($requestUri) {
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
    if ($current_file_name == $requestUri) {
        echo 'class="active"';
    }
}

?>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false" >
                <span class="sr-only" >Toggle navigation</span >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
                <span class="icon-bar" ></span >
            </button >

            <a class="navbar-brand" href="#" >User Dashboard App</a >
        </div >
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav" >
                <li><a href="/dashboard" >Home</a ></li>
                <li><a href="/dashboard/admin" >My Network</a ></li>
            </ul >
            <ul class="nav navbar-nav navbar-right top-nav" >
                <?php
                if ($this->session->userdata("logged_in") == 1) {
                    ?>
                    <li ><a href="/signin" >Sign in</a ></li >
                    <?php
                }
                else {
                    ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" ></i>account
                            <b class="caret" ></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/users/edit"><i class="fa fa-fw fa-user"></i>Edit Profile</a>
                            </li>
                            <?php
                            if ($this->session->userdata("admin")) {
                                ?>
                                <li <?= echoActiveClassIfRequestMatches("admin"); ?>><a href="/dashboard/admin"><i class="fa fa-fw fa-gear" ></i>manage users</a>
                                </li >
                                <?php
                            }?>
                            <li class="divider" ></li>
                            <li>
                                <a href="/"><i class="fa fa-fw fa-power-off" ></i> Log Out</a>
                            </li>
                        </ul >
                    </li >
                    <!--        <li><a href="/">Log off <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>-->
                    <?php
                }
                ?>
            </ul >
        </div >
    </div >
</nav >