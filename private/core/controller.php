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
}