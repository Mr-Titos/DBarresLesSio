<?php 
class Model{
    public $table;
    public $id;
    public static $pdo;
    public static function connexion(){
        $bd="blague";
        $login="root";
        $mdp="";
        $pdo=new PDO("mysql:host=localhost;dbname=".$bd,$login,$mdp);
        $pdo->exec('SET NAMES utf8');
        
        return  $pdo;
    }
    
    static function deconnexion(){
               
        self::$pdo=null;
    }
    
    
    
    public function read($pdo,$shield=null){
        if($shield == null){
            $shield="*";
        }
        
        $requete = $pdo->prepare("SELECT $shield FROM $this->table where id_$this->table = :id");
        var_dump($requete);
        $requete->bindParam(':id',$this->id);
        $requete->execute();
        
        $resultats=$requete->fetchAll(PDO::FETCH_OBJ);
        return $resultats;
    }
    
    public function save($pdo,$data){
        if(isset($data['id_'.$this->table]) && !empty($data['id_'.$this->table])){
            $sql="UPDATE $this->table SET ";
            foreach($data as $k=>$v){
                if($k != "id_$this->table"){
                    $sql.="$k=:$k,";
                }
                
            }
            $sql =substr($sql,0,-1);
            $sql .=" WHERE id_".$this->table."=".(int)$data['id_'.$this->table];
            var_dump($sql);
            $requete = $pdo->prepare($sql);
            
            
            foreach($data as $k=>$v){
                if($k != "id_$this->table"){
                    echo ':'.$k;
                   echo $v;
                    $requete->bindValue(':'.$k,$v);
                   echo "<br>";
                }
                
            }
            $requete->execute();
        }else{
            $sql="INSERT INTO $this->table (";
            foreach($data as $k=>$v){
                if($k != "id_".$this->table){
                    $sql.="$k,";
                }
                
            }
            $sql =substr($sql,0,-1);
            
            $sql .=") VALUES(";
            foreach($data as $k=>$v){
                if($k != "id_.$this->table"){
                    $sql.=':'.$k.',';
                }
                
            }
            $sql =substr($sql,0,-1);
            $sql .=")";
            //var_dump($sql);
            $requete = $pdo->prepare($sql);
          
            
            foreach($data as $k=>$v){
                if($k != "id"){
                    // echo ':'.$k;
                    // echo $v;
                    $requete->bindValue(':'.$k,$v);
                    // echo "<br>";
                }
                
            }
            if( $requete->execute()) return true;
            else return false;
        }
        
    }
    
    public function delete($pdo, $id){
        $sql="DELETE FROM $this->table where id_$this->table = :id";
        $requete = $pdo->prepare($sql);
        var_dump($requete);
        $requete->bindParam(':id',$id);
        $requete->execute();
        
    }
    
    public function find($pdo, $data=array()){
        $condition="1=1";
        $champs="*";
        $limit="";
        $order="";
        $inner="";
        
        
        if(isset($data['condition'])) {$condition=$data['condition'];}
        if(isset($data['champs'])) {$champs=$data['champs'];}
        if(isset($data['limit'])) {$limit="LIMIT ".$data['limit'];}
        if(isset($data['order'])) {$order=$data['order'];}
        if(isset($data['inner'])) {$inner=$data['inner'];}
        
        $sql="SELECT $champs from $this->table $inner WHERE $condition  $order $limit";
        //var_dump($sql);
        $requete = $pdo->prepare($sql);
        $requete->execute();
        $resultats=$requete->fetchAll(PDO::FETCH_OBJ);
        return $resultats;     
        
    }
    
    public static function load($name){
        require(ROOT.'model/'.ucfirst($name).'.php');
        // var_dump($name);
        $monObjet= ucfirst($name);
        return new $monObjet();
        
    }
}


?> 