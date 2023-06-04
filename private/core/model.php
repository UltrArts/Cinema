<?php
/**
 * MODEL CLASS
 */
Class Model extends Database
{
    public $errors = array();

    public function __construct()
    {
        if(! property_exists($this, 'table'))
        {
            $this->table = strtolower($this::class).'s';
        }
    }


    public function where($column, $value){
        $column = addslashes($column); //SANITIZE
        $query = "SELECT * FROM $this->table WHERE $column = :value";
        // die($query);
        return $this->query($query,[
            'value' => $value
        ]);
    }

    public function all(){
        $query = "SELECT * FROM $this->table";
        // die($query);
        return $this->query($query);
    }

    public function find($id, $d = null){
        $query = "SELECT * FROM $this->table WHERE id = :id";
        // die($query);
        return $this->query($query);
    }


    public function insert($data)
    {
        //Removing unwanted columns
        if(! property_exists($this, 'allowedCols')){
            foreach($data as $key => $col){
                if(in_array($key, $this->allowedCols))
                    unset($data[$key]);
            }
        }

        //Run Functions Before insert
        if(! property_exists($this, 'beforeInsert')){
            foreach($this->beforeInsert as $func){
                die($func);
                $data = $this->$func($data);
            }
        }
        $keys = array_keys($data);
        $columns = implode(', ', $keys);
        $values = implode(', :', $keys);
        $query = "INSERT INTO $this->table ($columns) VALUES(:$values)";

        return $this->query($query, $data);
    }

    public function update($id, $data)
    {
        $str = '';
        foreach($data as $key => $value){
            $str .= $key . "=:" . $key . ", ";
        }
        //Removing , in the end of query
        $str = trim($str, ',');

        $dat['id'] = $id;
        $query = "UPDATE $this->table SET $str WHERE id = :id";

        return $this->query($query, $data);
    }

}