<?php


function get_var($key)
{
    if(isset($_POST[$key]))
    {
        return $_POST[$key];
    }

    return "";
}

function get_select($key, $value)
{
    if(isset($_POST[$key]))
    {
        if($_POST[$key] == $value)
        {
            return 'selected';
        }
    }
}

function esc($var)
{
    return htmlspecialchars($var);
}

function diffForHumans($date){

    // Create DateTime objects
    $receivedDate = date_create($date);
    $currentDate = date_create();

    // Calculate the difference between the dates
    $diff = $currentDate->diff($receivedDate);

    // Format the difference into a human-readable string
    $humanReadableDate = "";

    if ($diff->y > 0) {
        $humanReadableDate = 'há '. $diff->y . " ano" . ($diff->y > 1 ? "s" : "") ;
    }else if ($diff->m > 0) {
        $humanReadableDate = 'há '. $diff->m . " mese" . ($diff->m > 1 ? "s" : "") ;
    }else if ($diff->d > 0) {
        $humanReadableDate = 'há '. $diff->d . " dia" . ($diff->d > 1 ? "s" : "") ;
    }else if ($diff->h > 0) {
        $humanReadableDate = 'há '. $diff->h . " hora" . ($diff->h > 1 ? "s" : "") ;
    }else if ($diff->i > 0) {
        $humanReadableDate = 'há '. $diff->i . " minuto" . ($diff->i > 1 ? "s" : "") ;
    }else if (empty($humanReadableDate)) {
        $humanReadableDate = "Agora mesmo.";
    } else {
        // $humanReadableDate .= "atrás";
    }


    return  $humanReadableDate;
}