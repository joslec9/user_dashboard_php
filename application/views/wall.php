<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html>
<head>
    <title><?= $wall_user['first_name'] ?> <?= $wall_user['last_name'] ?>'s Wall</title>
    <?php $this->load->view('partials/custom_head_wall.php'); ?>

</head>
<body>
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
            <a class="navbar-brand" href="#">Dojo Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php
                if($this->session->userdata('admin'))
                {
                    ?>
                    <li><a href="/dashboard/admin">Dashboard <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
                    <?php
                }
                else
                {
                    ?>
                    <li><a href="/dashboard">Dashboard <span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
                    <?php
                }
                ?>
                <li><a href="/users/edit">Profile <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
                <li class="active"><a href="#"><?= $wall_user['first_name'] ?>'s Wall <span class="glyphicon glyphicon-comment" aria-hidden="true"></span><span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/login">Log off <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

</nav>
<!-- main content -->
<?php
$t = time($wall_user['created_at']);
$reg_date = date("F j, Y", $t);
?>
<div class="container">
    <h3><?= $wall_user['first_name'] ?> <?= $wall_user['last_name'] ?></h3>
    <div class="col-md-6 cust-pad">
        <div class="col-md-12">
            <div class="col-md-6">
                <p>Registered:</p>
            </div>
            <div class="col-md-6">
                <p><?= $reg_date ?></p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <p>User ID:</p>
            </div>
            <div class="col-md-6">
                <p><?= $wall_user['id'] ?></p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <p>Email Address:</p>
            </div>
            <div class="col-md-6">
                <p><?= $wall_user['email'] ?></p>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <p>Description:</p>
            </div>
            <div class="col-md-6">
                <p><?= $wall_user['description'] ?></p>
            </div>
        </div>
    </div>
    <div class="row col-md-12">
        <h3>Leave a message for <?= $wall_user['first_name'] ?></h3>
    <form action="/message_post" method="post">
        <div class="form-group">
            <textarea class="form-control" rows="5" id="comment" name="user_post" placeholder="Write something..."></textarea>
            <input type="submit" class="btn btn-success pull-right" value="Post">
        </div>
    </form>
    </div>
    <?php
    if($wall_posts)
    {
        foreach($wall_posts as $post)
        { ?>
            <div class="col-md-12">
                <p class="marg-bot"><?= $post['first_name'] ?> <?= $post['last_name'] ?> wrote:</p>
                <div class="col-md-8 message">
                    <p class="white"><?= $post['content'] ?></p>
                </div>
            </div>
            <?php
            if($post['comments'])
            {
                foreach ($post['comments'] as $comment)
                { ?>
                    <div class='col-md-12'>
                        <p class="marg-bot marg-left col-md-8 pull-right"><?= $comment['first_name'] ?> <?= $comment['last_name'] ?> wrote</p>
                        <div class='col-md-8 pull-right comment'>
                            <p class="white"><?= $comment['comment'] ?></p>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            <div class="col-md-8 pull-right">
                <form action="/comment_post/<?= $post['post_id'] ?>" method="post">
                    <textarea class="form-control" rows="3" name="user_comment" placeholder="Add to the conversation..."></textarea>
                    <input type="submit" class="btn btn-info pull-right" value="Comment">
                </form>
            </div>
            <?php
        }
    }
    ?>
</div>
<?php $this->load->view('partials/scripts.php'); ?>
</body>
</html>