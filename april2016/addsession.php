<?php
##ADDING SESSION DATA

 $_SESSION['username'] = $Ludov;
 $_SESSION['password'] =  "goodluckludov";
  if ($username == "Ludov" && $password=="goodluckludov")
  {
   session_start();
   setcookie('access_level_cookie','standarduser');
   header('Location: loggedin.php');
  }

 ?>


