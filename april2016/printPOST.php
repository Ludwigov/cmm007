<?php

    if(isset($_POST['submit'])) {
        $thelist = $_POST['thelist'];
        $lastname = $_POST[''];
        $addname = $_POST['theinput'];
        $textarea = $_POST['textarea'];

        echo "Now are you are here" . "<br>";
        echo $addname . "<br>";
        echo $thelist . "<br>";
        echo $textarea;
    }