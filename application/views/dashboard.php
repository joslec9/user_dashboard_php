<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('partials/head.php'); ?>
    <style>
        body {
            font: 20px Montserrat, sans-serif;
            line-height: 1.8;
            color: #f5f6f7;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .bg-1 {
            background-color: #1abc9c; /* Green */
            color: #ffffff;
        }
        .bg-2 {
            background-color: #474e5d; /* Dark Blue */
            color: #ffffff;
        }
        .bg-3 {
            background-color: #ffffff; /* White */
            color: #555555;
        }
        .bg-4 {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
    </style>
</head>
<body>
<?php $this->load->view('partials/nav.php'); ?>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Who Am I?</h3>
    <img src="/assets/images/bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
    <h3>I'm an adventurer, Coding Ninja</h3>
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
    <h3 class="margin">What Am I?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Where To Find Me?</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <img src="/assets/images/nyc.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
            <img src="/assets/images/coding.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
        <div class="col-sm-4">
            <img src="/assets/images/mountain.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
    </div>
</div>
<!-- fourth Container (Grid) -->
<div class="container-fluid bg-3 text-center">
    <div class="row">
        <div class="col-sm-4">
            <img src="/assets/images/cooking-college.jpg" class="img-responsive margin" style="width:100%; height: 317px;" alt="Image">
        </div>
        <div class="col-sm-4">
            <img src="/assets/images/me_climbing.png" class="img-responsive margin" style="width:100%; height: 317px;" alt="Image">
        </div>
        <div class="col-sm-4">
            <img src="/assets/images/family_hiking.jpg" class="img-responsive margin" style="width:100%" alt="Image">
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
    <p>Jose Lechuga</p>
</footer>
<?php $this->load->view('partials/scripts.php'); ?>
</body>
</html>
