<?php

    
    require 'config.php';
    require 'database.php';
    require 'functions.php';
    require 'controller.php';
    require 'model.php';
    require 'app.php';
      
      


    spl_autoload_register(function($class_name){
        require "../private/Models/". ucfirst($class_name) . ".php";
    });