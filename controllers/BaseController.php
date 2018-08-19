<?php 
include_once('../helper/helper.php');
include_once(path('database/connection'));
Class BaseController{
    public $connection;
    public function __construct(){

        if(isset($_SESSION)){

        }else{
            session_start();
        }
    }


    public function LoggedIn():bool
    {
        
        if(isset($_SESSION['User'])){
           return true;
        }else{
            return false;
        }
    }

   }

?>