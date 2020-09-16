<?php
session_start();

$username = $_POST['username'];
$remember = $_POST['remember'];
$password = $_POST['password'];

$connect = mysqli_connect("localhost", "root", "", "knowlegetest");
if(isset($_POST["username"]))
{
    if(!empty($_POST["username"]) && !empty($_POST["password"]))
    {
        $name = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = mysqli_real_escape_string($connect, $_POST["password"]);
        $sql = "Select * from api_users where username = '" . $name . "' and password = '" . $password . "' and authorized = 1";
        $result = mysqli_query($connect,$sql);
        $user = mysqli_fetch_array($result);
        if($user)
        {
            $_SESSION["name"] = $name;
            if($_POST["remember"]==1)
            {
                setcookie ("member_login",$name,time()+ (10 * 365 * 24 * 60 * 60));
                setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
            }
            echo 'Login';
            exit();
        }

        echo "Invalid Login";
    }
    else
    {
        $message = "Both are Required Fields";
    }
}