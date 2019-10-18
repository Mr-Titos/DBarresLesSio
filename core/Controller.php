<?php
class Controller{
    var $vars=array();
    var $layout ='template';
    function set($id){
        $this->vars=array_merge($this->vars,$id);
    }
    function render($filename){
        extract($this->vars);
        ob_start();
        require(ROOT.'view/'.get_class($this).'/'.$filename.'.php');
        $content_for_layout=ob_get_clean();
        if($this->layout == false){
            echo $content_for_layout;
        }else{
            require(ROOT.'view/layout/'.$this->layout.'.php');
    }
    }
}
?>