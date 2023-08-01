<?php
/**
 * Home Controller
 */
class Home extends Controller
{
    public function index()
    {
        $db = new Database();
        $sessions = new Sessions;
        $sessions = $sessions->get();
        $this->view('Home', ['movies' => $sessions]);            
    }

}