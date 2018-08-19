<!DOCTYPE html>
<html>
<?php
include_once('../helper/helper.php');
include_once(path('controllers/AuthController'));
$AuthController = new AuthController;

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vanilla Dash</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
  <?php
if($AuthController->LoggedIn()){
?>
<div class="box">
Nice, Logged in!</div>
<br>
<a href="<?php echo route('logout') ?>"><button class="button">Log out?</button></a>
<?php 
}else{

?>
<div class="box">
You're not logged in... Sorry.</div>
<a href="<?php echo route('login') ?>"><button class="button"> Login</button></a>
<?php
} ?>

  </body>
</html>

