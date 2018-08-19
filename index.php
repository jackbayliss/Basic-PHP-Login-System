<?php 
$host = $_SERVER['HTTP_HOST'];
if(isset($_SERVER['HTTPS'])){
 $url = 'https://';
}else{
 $url = 'http://';
}

header('Location:'.$url.$host .'/pages/index.php');

?>