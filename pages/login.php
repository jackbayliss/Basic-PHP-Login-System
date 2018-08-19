<?php 
require_once('../helper/helper.php');
require_once(path('controllers/BaseController'));
require_once(path('controllers/AuthController'));
$AuthController = new AuthController;

if($AuthController->LoggedIn()){
  redirect('dashboard');
}

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vanilla Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
  <?php 
  if($AuthController->Login()){
    if($AuthController->LoginHandle()){
      redirect('dashboard');
  }else{
  ?>

  <div class="notification is-danger">
  <button class="delete"></button>
  Error logging in! Please check your email, and password.</a>
</div>
  <?php } }
  ?>
  <section class="section">
  <h1 class="title">Login</h1>
  <form action="login.php" method="POST">
<div class="field">
<input class="input" type="text" name="email" placeholder="Email">
</div>
<div class="field">
<input class="input" type="password" name="password" placeholder="Password">
</div>
<button type="submit" class="button">Submit</button>
<div class="alert">
<p>No account? <a href="<?php echo route('register') ?>">Register</a></p>
</div>
</form>
  </section>
  </body>
</html>

