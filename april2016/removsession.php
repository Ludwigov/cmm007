<?php
///REMOVING SESSION DATA

     $_SESSION['foo'] = 'bar';
     print $_SESSION['foo'];
     unset($_SESSION['foo']);
  ?>
