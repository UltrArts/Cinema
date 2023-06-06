<?php
/**
 * Rooms Model Class
 */

Class Rooms extends Model
{
    protected $table = 'rooms';
    protected $beforeInsert = [
    ];
    protected $allowedCols = [
        'name',
        'capaity',
        'status',
        'created_at',
    ];

     // die
     public function validate($data){
        $this->errors = array();
        if(empty($data['name']))
            $this->errors['name']   =   'O campo nome é obrigatório.';
        else if(strlen($data['name']) > 20)
            $this->errors['name']   =   'Nome demasiado cumprido.';
        
        if(empty($data['capacity']))
            $this->errors['capacity']   =   'Capacidade  obrigatório.';
        else if(($data['capacity']) < 15)
            $this->errors['capacity']   =   'Capacidade permitida.';
        
        $this->is_unique($data);

        if(count($this->errors) == 0)
            return true;
        
        return false;
    }

    public function is_unique($data)
    {
        $room = new Rooms;
        $name = $room->where('name', $data['name']);
        if(! empty($name))
            $this->errors['name'] = "Já existe uma sala gravada com o mesmo nome.";
        
    }

}
?>