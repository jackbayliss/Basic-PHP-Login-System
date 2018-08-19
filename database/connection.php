<?php 
Class Connection { 
    public function details(){
       return new PDO("mysql:host=localhost;dbname=test",'root', '');
    }
}
?>