<?php
/**
 * Error Classe
 */

 Class Ohps extends Controller
 {
    
    public function forbidden()
    {
        return $this->view('403');
    }
    public function index()
    {
        return $this->view('404');
    }
 }