    <?php
    session_start();
    $accesslevel = $_COOKIE['access_level_cookie'];

    displayAccessLevelInformation($accesslevel);

    function displayAccessLevelInformation($accessLevel)
    {
    if ($access_Level == "standarduser") {
        echo "<p style = \"background-color: lightgreen\">You are currently logged in as a standard user </p>";
    } elseif ($access_Level == "root") {
        echo "<p<p style = \"background-color: red\">You are currently logged as a root user</p>";
        echo "<p<p style = \"background-color: red\">You now have access to additional administrative features</p>";
    }
    }
    ?>

