<?php

/**
 * Main Controller Class
 */
class Controller
{
    public function view($view, $data = array()){
        extract($data);
        // var_dump(ROOT);
        if(file_exists('../private/Views/'.$view.'.view.php')){
            require ('../private/Views/'.$view.'.view.php');
        }else{
            require ('../private/Views/404.view.php');
        }
    }


    public function load_model($model){

        // INSTANCIATION OF THE GUIVEN MODEL
        if(file_exists("../private/Models/" . ucfirst($model) . ".php")){
            require "../private/Models/" . ucfirst($model) . ".php";
            return $model = new $model();
        }
        return false;
    }


    public function redirect($link){
        header('Location: '. ROOT. '' . $link);
        die;
    }

}