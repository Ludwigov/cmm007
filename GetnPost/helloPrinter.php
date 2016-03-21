<?php

    $p = $_GET['$planet'];

?>

<html>
    <head>
 <h1>Where would you like to say hello?</h1>
    </head>

    <body>
<a href="1405114.azurewebsite.net/getnPost/helloPrinter.php?planet=Earth">Earth</a>"
<a href="1405114.azurewebsite.net/getnPost/helloPrinter.php?planet=Mars">Mars</a>
<a href="1405114.azurewebsite.net/getnPost/helloPrinter.php?planet=Uranus">Uranus</a>
        <main>

            <p>Hello <?php echo $p; ?></p>

        </main>
    </body>
</html>
