<?php
/**
 * Admin Controller
 */
class Admin extends Controller
{
    public function index()
    {
        self::is_worker();
        $this->view('Admin/dashboard');            
    }

    public function movies()
    {
        self::is_worker();
        $errors = array();
        $db = new Database();;
        $movies = new Movies;
        
        
        if(count($_POST) > 0){
            // die('cheguei');
            if($movies->validate($_POST)){
            }else{
                
                $movies->errors['error'] = 1;
                echo json_encode($movies->errors);
                die;
            }
        }       
        $movies = $movies->get();
        $genders = $db->query("SELECT * FROM genders ORDER BY name");
        $langs = $db->query("SELECT * FROM langs ORDER BY name");
        // $genders = $genders->all();
        // echo '<pre>';
        // var_dump($movies);
        // // print_r ($movies);
        // die();
        $this->view('Admin/movies', [
            'movies'    =>  $movies,
            'genders'   =>  $genders,
            'langs'   =>  $langs,
        ]);            
    }

    public function bookings()
    {
        self::is_worker();
        $this->view('Admin/bookings');            
    }

    public function rooms()
    {

        $this->view('Admin/rooms');            
    }

    public function sessions()
    {
        self::is_admin();
        $this->view('Admin/sessions');            
    }

    public function usersManage()
    {
        self::is_admin();
        $this->view('Admin/users_manage');            
    }

    public function is_admin()
    {
        if(! Auth::is_logged())
            return $this->redirect('');
        else
        if(! Auth::user()->role == 'admin')
            $this->redirect('/Ohps/forbidden');
    }

    public function is_worker()
    {
        if(!Auth::is_logged())
            $this->redirect('');
        else
        if( Auth::user()->role == 'user')
            $this->redirect('/Ohps/forbidden');
    }
}