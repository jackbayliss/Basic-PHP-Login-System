<?php 
require_once('../helper/helper.php');
require_once(path('controllers/BaseController'));
require_once(path('controllers/AuthController'));

$AuthController = new AuthController();

if($AuthController->LoggedIn()){
    redirect('dashboard');
}else {
    redirect('login');
}
?>
  






