<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        header('Location: users.html');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        header('Location: index.html');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
    {
        header('Location: api/logout.php');
    }

    header("HTTP/1.1 400 Bad Request");