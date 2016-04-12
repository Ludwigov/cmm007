<?php
///START THE SESSION,
///SETS $ACCESSLEVEL FROM THYE COOKIE
///PASSSES ACCESS LEVEL INTO THE FUNCTION

  session_start();
  $accesslevel =$_COOKIE['access_Level_cookie'];

    displayAccessLevelInformation($accessLevel);

    function displayAccessLevelInformation($accessLevel)
    }
     if ($accessLevel =="standarduser")  {
         echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user </p>";
    }
     elseif ($accessLevel == "root") {
         echo "<p<p style = \\";
         echo "<p<p style = \\";
     }
  ?>
