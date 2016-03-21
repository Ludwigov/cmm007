<?php

    $p = $_GET['$planet'];

?>

<html>
    <head>
 <h1>Where would you like to say hello?</h1>
    </head>

    <body>
<a href="http://1405114.azurewebsite.net/GetnPost/helloPrinter.php?planet=Earth">Earth</a>"
<a href="http://1405114.azurewebsite.net/GetnPost/helloPrinter.php?planet=Mars">Mars</a>
<a href="http://1405114.azurewebsite.net/GetnPost/helloPrinter.php?planet=Uranus">Uranus</a>
        <main>

            <p>Hello <?php echo $p; ?></p>

        </main>
    </body>
</html>
