<?php
require_once('BaseController.php');

Class AuthController extends BaseController {

    public function __construct()
    {
        // Parent
        parent::__construct();
    }

    public function Register():bool
    {
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
            return true;
        }
        else {
            return false;
        }
    }

    public function RegisterHandle():bool {
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
       try{
        $connection = new Connection();
        $connection = $connection->Details();
        $stmt = $connection->prepare("INSERT INTO users (name,email,password)
        VALUES (:name, :email, :password)");
         $stmt->bindParam(':name', $_POST['name']);
         $stmt->bindParam(':email',$_POST['email']);
         $stmt->bindParam(':password',$_POST['password']);
        $stmt->execute();
        return true;
       }catch(PDOException $e){
        return false;   
        echo $e;
       }
        }
        else {
            return false;
        }
    }

    public function Login():bool
    {
        if(isset($_POST['email']) && isset($_POST['password'])){
            return true;
        }
        else {
            return false;
        }
    }

    public function LoginHandle():bool {
        try{
         $connection = new Connection();
         $connection = $connection->Details();
         $stmt = $connection->prepare("SELECT * FROM Users WHERE email = :email && password = :password");
          $stmt->bindParam(':email',$_POST['email']);
          $stmt->bindParam(':password',$_POST['password']);
         $stmt->execute();
         if($stmt->fetchAll()){
            $_SESSION['User'] = $stmt->fetchAll();
            return true;
         }else {
             return false;
         }
  
        }catch(PDOException $e){
         return false;   
         echo $e;
        }
    }
    public function Logout(){
             
                unset($_SESSION['User']);
         
                redirect('login');
    }
}

?>