<?php class Blague extends Controller{
    
    function index(){
        $tables = Model::load("categorie");
        $tableRes['variable']=array("categorie"=>$tables->find(Model::connexion(), array('inner'=>'natural join illustration')));
        Model::deconnexion();
       
        $this-> set($tableRes);
        $this->render('index');
        
    }
    
    function detail($i){
        $tables = Model::load("blagues");
        $id=(int)$i;
        var_dump($id);
        $tableRes['variable']=array("produit"=>$tables->find(Model::connexion(), array('condition'=>"id_categorie=$id", 'inner'=>'natural join auteur natural join illustration')), "param"=>$i);
        Model::deconnexion();
        $this-> set($tableRes);
        $this->render('detail');
    }
        

}
?>