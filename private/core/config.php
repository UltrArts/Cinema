<?php
    // Obtém a string do cabeçalho "HTTP_ACCEPT_LANGUAGE"
    $acceptLanguage = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

    // Extrai a parte relevante que contém a informação da timezone
    $timezoneString = substr($acceptLanguage, strpos($acceptLanguage, 'timezone=') + 9, 32);

    // Verifica se a string da timezone é válida
    if (strlen($timezoneString) === 32 && preg_match('/^[A-Za-z0-9_-]+$/', $timezoneString)) {
        // Define a timezone do usuário
        date_default_timezone_set($timezoneString);
    } else {
        // Caso não seja possível determinar a timezone, define a timezone de Maputo (Africa/Maputo)
        date_default_timezone_set('Africa/Maputo');
    }

    define('ROOT', 'http://localhost/Cinema/public');


    // DATABASE
    define('HOST', 'localhost');
    define('DB_NAME', 'cinema');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_DRIVER', 'mysql');
    define('PROJ_OWNER', 'Edson Da Cruz');
    define('PROJ_NAME', 'CineArts');
