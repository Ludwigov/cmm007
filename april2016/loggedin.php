<?php
///START THE SESSION,
///SETS $ACCESS LEVEL FROM THE COOKIE
///PASSES ACCESS LEVEL INTO THE FUNCTION


  session_start();
  $accesslevel = $_COOKIE['access_Level_cookie'];

 displayAccessLevelInformation($accesslevel);

   function displayAccessLevelInformation($accessLevel)
   {
       if ($accessLevel == "standarduser") {
           echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user </p>";
       } elseif ($accessLevel == "root") {
           echo "<p<p style = \"background-color: red\">You are currently logged as a root user</p>";
           echo "<p<p style = \"background-color: red\">You now have access to additional administrative features</p>";
       }
   }
  ?>
