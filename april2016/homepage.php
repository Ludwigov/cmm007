<?php
function displayAccessLevelInformation($accessLevel){
    if ($accessLevel == "standarduser") {
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
 ?>