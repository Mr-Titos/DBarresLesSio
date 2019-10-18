<?php class Apropos extends Controller{
    function index(){
        $variable["test"]=array('titre'=>'Accueil', 'description'=>'trop de blabla');
        $this-> set($variable);
        $this->render('index');
    }
        

}
?>