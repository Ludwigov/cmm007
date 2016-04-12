<?php
     $username = $_POST["username"];
 $password = $_POST["password"];

if ($username =="Ludov" && $password=="goodluckludov")
{
    setcookie('access_level_cookie','standarduser');
}
    header('Location: loggedin.php');

?>

