<?php
/**
 * Home Controller
 */
class Home extends Controller
{
    public function index()
    {
        $db = new Database();
        // $movies = $db->query("select * from movies WHERE title = 'O Rei Leão'");
        $movies = new Movies;
        
        // Seeding Up Database
        $arr['title'] = 'O Magaiva'; 
        $arr['cover'] = 'unknown';
        $arr['duration'] = 100;
        $arr['sinopse'] = 'Des';
        $arr['lang'] = 'Português';
        $arr['subtitles'] = 'Português';
        // $arr['created_at'] = ;
        $movies = new Movies;
        // $movies->insert($arr);
        
        // $movies = $movies->where('title', 'O Rei Leão');
        $movies = $movies->get();
        // print_r($movies);
        // die;
        // $movies = $movies->findById(1);
        $this->view('Home', ['movies' => $movies]);            
    }

}