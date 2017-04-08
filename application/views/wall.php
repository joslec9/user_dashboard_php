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
<?php $this->load->view('partials/custom_nav.php'); ?>
<!-- main content -->
<?php
$t = time($wall_user['created_at']);
$reg_date = date("F j, Y", $t);
?>
<div class="container" style="margin-top: 50px;">
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