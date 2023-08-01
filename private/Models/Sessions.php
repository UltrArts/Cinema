<?php
/**
 * Session Model Class
 */

Class Sessions extends Model
{
    protected $table = 'sessions';
    protected $beforeInsert = [
    ];
    protected $allowedCols = [
        'movie_id',
        'time_init',
        'time_end',
        'room_id',
        'staatus',
        'price',
        'created_at',
    ];

     // die
     public function validate($data){
        $this->errors = array();
        if(empty($data['movie']))
            $this->errors['movie']   =   'O campo filme é obrigatório.';
        
        if(empty($data['room']))
            $this->errors['rooms']   =   'Sala de Projecção é obrigatória.';
        
        
        if(empty($data['price']))
            $this->errors['price']   =   'Preço obrigatório.';
        else if(($data['price']) < 25)
            $this->errors['price']   =   'Preço não permitido.';


        if(empty($data['time_init']))
            $this->errors['time_init']   =   'Hora obrigatória';
        else if(self::check_days() < 3)
            $this->errors['time_init']   =   'A Sessão deve ser feita pelo menos 3 dias antes.';
        

        if(count($this->errors) == 0)
            return true;
        
        return false;
    }


    public function get(){
        $db = new Database;
        
        $sessions = $db->query("select s.*, s.id session_id, m.*, r.name room, c.name cla, c.age age
        from sessions s
        INNER JOIN movies m ON s.movie_id = m.id
        INNER JOIN rooms r ON s.room_id = r.id
        INNER JOIN classifications c ON m.classification_id = c.id
        ORDER BY time_init ASC");
        // echo '<pre>';
        // print_r($sessions);
        // die;
        return $sessions;
    }


    public function check_days(){
        $init = DateTime::createFromFormat('Y-m-d\TH:i:s', $_POST['time_init'] . ':00');
        $now = DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'));
        $difference = $init->diff($now);
         return $difference->d;
    }


}
?>