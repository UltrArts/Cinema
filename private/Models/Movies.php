<?php
/**
 * Movies Model Class
 */

Class Movies extends Model
{
    protected $table = 'movies';
    protected $allowedCols = [
        'title',
        'duration',
        'classification',
        'cover',
        'year',
        'gender',
        'lang',
        'subtitles',
        'sinopse',
        'created_at',
    ];
    // protected $beforeInsert = [
    //     'hash_password',
    // ];
    // die
    public function validate($data){
        $this->errors = array();
        if(empty($data['title']))
            $this->errors['title']   =   'O campo título é obrigatório.';
        else if(strlen($data['title']) > 30)
            $this->errors['title']   =   'Título demasiado cumprido.';
        
        if(empty($data['duration']))
            $this->errors['duration']   =   'Duração é obrigatório.';
        else if(($data['duration']) < 15)
            $this->errors['duration']   =   'Duração não permitida.';
        
        if(empty($data['gender']))
            $this->errors['gender']   =   'Género é obrigatório.';

        if(empty($data['classification']))
            $this->errors['classification']   =   'Classificação é obrigatório.';

        if(empty($data['lang']))
            $this->errors['lang']   =   'A língua é obrigatório.';


        // if(isset($_FILES['cover']) && $_FILES['cover']['error'] === UPLOAD_ERR_OK)
        //     $this->errors['cover']   =   'Capa obrigatória';
            
        // Verificar se o arquivo é uma imagem
            if (!($_FILES['cover']['size'] <= 2 * 1024 * 1024)) 
                $this->errors['cover']   =   'O arquivo excede o tamanho máximo permitido.';
        else
        if (!(isset($_FILES['cover']) && is_uploaded_file($_FILES['cover']['tmp_name']))) 
            $this->errors['cover']   =   'Capa obrigatória';
    
            

        if(empty($data['year'])) 
            $this->errors['year']   =   'Ano obrigatório.';
        else if(($data['year'] < 1930 || $data['year'] > date('Y')))
            $this->errors['year']   =   'Ano inválido.';
        
        $this->is_unique($data);

        if(count($this->errors) == 0)
            return true;
        
        return false;
    }

    public function hash_password($data)
    {
        $pass = password_hash($data['password'], PASSWORD_DEFAULT);
        return $pass;
    }

    public function is_unique($data)
    {
        $movie = new Movies;
        $title = $movie->where('title', $data['title']);
        if(! empty($title))
            $this->errors['title'] = "Já existe um filme gravado com o mesmo título.";
    }

    public function get(){
        $db = new Database;
        
        $movies = $db->query("select m.*, g.name gender, g.short_name gender_short, g.id gender_id, 
        s.id sub_id, s.name sub, s.short_name sub_short, 
        l.id lang_id, l.name lang_name, l.short_name lang_short 
        from movies m
        INNER JOIN movie_gender mg ON m.id = mg.movie_id
        INNER JOIN genders g ON mg.gender_id = g.id
        INNER JOIN langs s ON mg.gender_id = s.id
        INNER JOIN langs l ON mg.movie_id = l.id");

        return $movies;
    }
}

