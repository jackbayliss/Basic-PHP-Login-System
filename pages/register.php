<?php 
require_once('../helper/helper.php');
require_once(path('controllers/BaseController'));
require_once(path('controllers/AuthController'));
$AuthController = new AuthController;
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vanilla Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
  <?php
  if($AuthController->Register()){
    if($AuthController->RegisterHandle()){
?>

<div class="notification is-success">
  <button class="delete"></button>
  Signed up succesfully! Why not <a href="<?php echo route('login'); ?>">Log in?</a>
</div>

<?php
}
else{
?>

<div class="notification is-danger">
  <button class="delete"></button>
  Signed up failed.... Ensure the fields are filled in correctly.
</div> 
<?php 
    }
  }
?>
  <section class="section">
  <h1 class="title">Register</h1>
  <form action="register.php" method="POST">
  <div class="field">
<input class="input" type="text" name="name" placeholder="Name">
</div>
<div class="field">
<input class="input" type="text" name="email" placeholder="Email">
</div>
<div class="field">
<input class="input" type="password" name="password" placeholder="Password">
</div>
<button type="submit" class="button">Submit</button>
</form>
<div class="alert">
<p>Already have an account? <a href="<?php echo route('login') ?>">Login</a></p>
</div>
  </section>
  </body>
</html>

