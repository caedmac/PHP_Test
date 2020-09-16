<?php
session_start();
    if(!isset($_SESSION['name'])){
        session_destroy();
        echo 'noSession';
    }
    else{
        var_dump($_COOKIE);
    }
