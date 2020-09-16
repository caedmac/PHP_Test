<?php
session_start();
//Clear Session
$_SESSION["username"] = "";
session_destroy();
    echo 'LogOut';