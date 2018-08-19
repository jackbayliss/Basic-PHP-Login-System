<?php 
include_once('../helper/helper.php');
include_once(path('controllers/AuthController'));
$auth = new AuthController;
$auth->Logout();


?>