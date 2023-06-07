<?php
/**
 * User Model Class
 */

Class Users extends Model
{
    protected $table = 'users';
    protected $allowedCols = [
        'name',
        'last_name',
        'email',
        'password',
        'created_at',
        'id',
        'role',
    ];
    protected $beforeInsert = [
        'hash_password',
    ];
    public function validate($data){

        $this->errors = array();
        if(empty($data['name'])){
            $this->errors['name']   =   'O campo nome é obrigatório.';
        }else if(! preg_match('/^[\pL\s]+$/u', $data['name'])){
            $this->errors['name']   =   'No campo apelido só são permitidas letra.';
        }

        if(empty($data['last_name'])){
            $this->errors['last_name']   =   'O campo Apelido é obrigatório.';
        }else if(! preg_match('/^[\pL\s]+$/u', $data['last_name'])){
            $this->errors['last_name']   =   'No campo apelido só são permitidas letra.';
        }

        if(! filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
            $this->errors['email']   =   'Formato de email inválido.';
        }

        if(strlen($data['password']) < 8)
        {
            $this->errors['password']   =   'O campo password deve ter mais que 8 caracteres.';
        }else if(empty($data['password'])){
            $this->errors['password']   =   'O campo password é obrigatório.';
        }else if( $data['password'] !== $data['passConf']){
            $this->errors['passConf']   =   'As passwords não correspondem.';
        }

        $this->is_unique($data);

        if(count($this->errors) == 0){
            return true;
        }

        return false;
    }

    public function hash_password($data)
    {
        $pass = password_hash($data['password'], PASSWORD_DEFAULT);
        return $pass;
    }

    public function is_unique($data)
    {
        $user = new Users();
        $email = $user->where('email', $data['email']);
        $tel = $user->where('tel', $data['tel']);
        if(! empty($email))
            $this->errors['email'] = "O email dado jé possui uma conta.";
        if(! empty($tel))
            $this->errors['tel'] = 'O telefone dado já está associado a uma conta';
    }

}

