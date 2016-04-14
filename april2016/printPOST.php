<?php

    if(isset($_POST['submit'])) {
        $thelist = $_POST['thelist'];
        $lastname = $_POST[''];
        $addname = $_POST['theinput'];
        echo "Now are you are here";
        echo $addname . "<br>";
        echo $thelist;
    }