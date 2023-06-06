<?php
/**
 * Admin Controller
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Admin extends Controller
{
    
    public function index()
    {
        self::is_worker();
        $mv = new Movies;
        $us = new Users;
        $data['users'] = count($us->all());
        $data['movies'] = count($mv->all());
        // print_r($data['movies']);
        // die();
        $this->view('Admin/dashboard', [
            'data'  => $data,
        ]);            
    }

    public function movies()
    {
        self::is_worker();
        $errors = array();
        $db = new Database();
        $movies = new Movies;
        
        
        if(count($_POST) > 0){
            // die('cheguei');
            if($movies->validate($_POST)){
                try{
                    $tempFile = $_FILES['cover']['tmp_name']; // Local temporário do arquivo
                    $fileName = time() .'_'. $_FILES['cover']['name']; // Caminho de destino para salvar o arquivo
                    $targetFile = PATH_COVERS. $fileName; // Caminho de destino para salvar o arquivo
                    $cover = ROOT .'/covers/'. $fileName; // Caminho de destino para salvar o arquivo
                    move_uploaded_file($tempFile, $targetFile);
                    $vals['title'] = $_POST['title'];
                    $vals['duration'] = $_POST['duration'];
                    $vals['classification_id'] = $_POST['classification'];
                    $vals['cover'] = $cover;
                    $vals['year'] = $_POST['year'];
                    $vals['lang'] = $_POST['lang'];
                    if(! empty($_POST['sub'] ))
                        $vals['subtitles'] = $_POST['sub'];
                    $vals['sinopse'] = $_POST['sinopse'];
                    $vals['created_at'] = date("Y-m-d H:i:s");
                    
                    // die($_POST['sub']);
                    $mov = new Movies;
                    $mov->insert($vals);
                    
                    $mov = $mov->getLatest();

                    $val['gender_id'] = $_POST['gender'];
                    // $val['movie_id'] = 2;
                    $val['movie_id'] = $mov[0]->id;

                    $mv_gd = new MovieGender;
                    $mv_gd->insert($val);
                    $movies->errors['status']  = true;
                    echo json_encode($movies->errors);
                    die;
                }catch(Exception $e){
                    $movies->errors['status']  = false;
                    $movies->errors['error']  = $e;
                    echo json_encode($movies->errors);
                    die;
                }
            }else{
                
                $movies->errors['error'] = 1;
                echo json_encode($movies->errors);
                die;
            }
        }    
        $movies = $movies->get();
        $genders = $db->query("SELECT *  FROM genders ORDER BY name");
        $langs = $db->query("SELECT * FROM langs ORDER BY name");
        $classifications = $db->query("SELECT * FROM classifications ORDER BY name");
        // $genders = $genders->all();
        // echo '<pre>';
        // var_dump($movies);
        // // print_r ($movies);
        // die();
        $this->view('Admin/movies', [
            'movies'    =>  $movies,
            'genders'   =>  $genders,
            'langs'   =>  $langs,
            'classifications'   =>  $classifications,
        ]);            
    }

    public function bookings()
    {
        
        self::is_worker();
        $this->view('Admin/bookings');            
    }

    public function rooms()
    {
        $rooms = new Rooms;
        
        if(count($_POST) > 0){
            $room = new Rooms;
            if($room->validate($_POST)){
                try{
                    $vals['name'] = $_POST['name'];
                    $vals['capacity'] = $_POST['capacity'];
                    $vals['created_at'] = date("Y-m-d H:i:s");
                    $room->insert($vals);
                    
                    $room->errors['status']  = true;
                    echo json_encode($room->errors);
                    die;
                }catch(Exception $e){
                    $room->errors['status']  = false;
                    $room->errors['error']  = $e;
                    echo json_encode($room->errors);
                    die;
                }
            }else{
                
                $room->errors['error'] = 1;
                echo json_encode($room->errors);
                die;
            }
        }
        $rooms = $rooms->all();
        $this->view('Admin/rooms', [
            'rooms' =>  $rooms,
        ]);            
    }

    public function sessions()
    {
        $session = new Sessions;
        $rooms = new Rooms;
        $movies = new Movies;
        if(count($_POST) > 0){

            // die($_POST['room']);
            if($session->validate($_POST)){
                try{
                    $userDateTimeObj = DateTime::createFromFormat('Y-m-d\TH:i', $_POST['time_init']);
                    $init_time = $userDateTimeObj->format('Y-m-d H:i:s');
                    $init_time;
                    $val['time_init']   =   $init_time;
                    $val['movie_id']    =   $_POST['movie'];
                    $val['movie_id']    =   $_POST['movie'];
                    $val['room_id']     =   $_POST['room'];
                    $val['price']       =   $_POST['price'];
                    $session->insert($val);
                    $session->errors['status']  = true;
                    echo json_encode($session->errors);
                    die;
                }catch(Exception $e){
                    $session->errors['status']  = false;
                    $session->errors['error']  = $e;
                    echo json_encode($session->errors);
                    die;
                }
            }else{
                $session->errors['error'] = 1;
                echo json_encode($session->errors);
                die;
            }
        }
        
        $rooms = $rooms->all();
        $movies = $movies->get();

        $data = $session->get();
        self::is_admin();
        $this->view('Admin/sessions', [
            'sessions'  =>  $data,
            'movies'    =>  $movies,
            'rooms'     =>  $rooms,
        ]);            
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