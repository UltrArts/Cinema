<?php

/**
 * DATABASE CLASS
 */


 class Database
 {

    private function connect()
    {
        $string = DB_DRIVER . ":host=" . HOST . ";dbname=" . DB_NAME;
        if(! $conn = new PDO($string, DB_USER, DB_PASSWORD)){
            die('ERRO NA CONEXÃO!');
        }

        return $conn;
    }


    public function query($query, $data = array(), $data_type = "object"){
        $conn = $this->connect();
        $stm = $conn->prepare($query);

        if($stm){
            $check = $stm->execute($data);
            if($check){
                if($data_type == "object"){
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }else{
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);
                }

                if(is_array($data) && count($data) > 0){
                    // die('CHEGUEI');
                    return $data;
                }else{
                    //die("REGISTO VAZIO");
                }
            }
        }

        return false;
    }



 }