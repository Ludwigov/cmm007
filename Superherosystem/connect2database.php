     <?
     include ("db_connecvt.php");
     $sql_query ="SELECT * FROM superheros";
     $result = $db->query($sql_query);
     while($row = $results->fetch_array())
     {
         $firstname = $row['firstName'];
         $lastname = $row['lastName'];
         $id = $row['superheroID'];
         echo "<li> <a href='displayBattles.php?id={$id}'>Battles for {firstname} {lastname}</a></li>
     }
     ?>

