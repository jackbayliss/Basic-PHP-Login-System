<?php
/**
 * Gets the root where we are.
 *
 * @param string $path
 * @return string
 */
 function path(string $_path):string {
    $path = $_SERVER['DOCUMENT_ROOT'] . '\\'. $_path .'.php';

    return $path;
}   
function redirect(String $_page){
if(!empty($_SERVER['HTTPS'])){

    $start = 'https://';
}else{
    $start = 'http://';


}
    
header('Location:'. $start . $_SERVER['HTTP_HOST'] . '/pages/' . $_page . '.php');

    exit();
}

function route(String $_page):String {
    if(!empty($_SERVER['HTTPS'])){

        $start = 'https://';
    }else{
        $start = 'http://';
    
    
    }
        
    return  $start . $_SERVER['HTTP_HOST'] . '/pages/' . $_page . '.php';
    
        exit();
}


?>