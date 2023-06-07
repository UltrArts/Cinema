<?php
/**
 * User Controller
 */
class User extends Controller{
    
    public function index(){
            $this->redirect('User/login');
    }
    
    public function login(){
        self::check_user();
        
        $errors = array();

        if(count($_POST) > 0){
            if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                $user = new Users;
                $mv = new Movies;
                if($row = $user->where('email', $_POST['email'])){
                    if(password_verify( $_POST['password'], $row[0]->password)){
                        Auth::authenticate($row);
                        if($row[0]->role == 'user')
                            $this->redirect('');
                        else
                            $this->redirect('/Admin');
                    }else
                        $errors['message'] = "Email ou Password incorrectos!";
                }else
                    $errors['message'] = "Email ou Password incorrectos!";
            }else
                $errors['email']   =   'Formato de email inválido.';
    
                
        }
        $this->view('Login', [
            'errors' => $errors,
        ]);  
    }

    public function logout()
    {
        Auth::logout();
        $this->redirect('');
    }

    private function check_user(){
        if(Auth::is_logged()){
            Auth::user()->role == 'user' ?
                $this->redirect('') :
                $this->redirect('/Admin');
        }
    }


    public function register(){
        self::check_user();
        $errors = array();
        if(count($_POST) > 0)
        {
            $user = new Users();
            if($user->validate($_POST))
            {
                $values['name']   =   $_POST['name'];
                $values['last_name']   =   $_POST['last_name'];
                $values['email']   =   $_POST['email'];
                $values['password']   =   $_POST['password'];
                $values['tel']   =   $_POST['tel'];
                $values['created_at']   =   date("Y-m-d H:i:s");
                $values['password']   =   password_hash($_POST['password'], PASSWORD_DEFAULT);

                if(isset($_POST['role'])){
                    $values['role']   =   $_POST['role'];
                }else{
                    $values['role']   =   'user';
                }
                $user->insert($values);
                while (count($errors) > 0)
                {
                    array_shift($errors);
                }
                $this->redirect('User/login');
                die;
            }else{
                $errors = $user->errors;
            }
        }

        $this->view('register', [
            'errors'    =>  $errors,
        ]);

    }

}