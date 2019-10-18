<?php
if(!isset($_SESSION)) session_start();


require('define.php');
require(ROOT.'core/Model.php');
require(ROOT.'core/Controller.php');
try{
    $param=explode('/',$_GET['p']);
}catch(Exception $e){
   
}

$controller=(isset($param[0])&& $param[0]!='')? $param[0] : 'Accueil';
$action=(isset($param[1])&& $param[1]!='') ? $param[1] : 'index';
 
$fichier='controller/'.ucfirst($controller).'.php';
    
if(file_exists($fichier)){
    require('controller/'.ucfirst($controller).'.php');
    
    $controller = new $controller();
    
    if(method_exists($controller, $action)){
        $produit=(isset($param[2])&& $param[2]!='') ? $param[2] : 0;
       
        if($produit !=0){
           
            $controller->$action($produit);
            
        }else{
            
            $controller->$action();
            
        }        
    }else{
        
        erreur();
        
    }
    
    
}else{
    
    erreur();
    
}

function erreur(){
    $controller='erreur';
    $action='perdu';
    require('controller/'.ucfirst($controller).'.php');
    
    $controller = new $controller();
    $controller->perdu();
}

?>