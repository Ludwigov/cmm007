<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>example</title>
    <link rel="stylesheet" type ="text/css"  href="addbugs.css">
</head>
<body>

<fieldset>
    <header>
        <img id="logo" src="../mockrepito/images/logo.png">
        <div id="titles">
            <h1>BugTracker</h1>
            <h2>Keeping track of all pesky little bugs</h2>
        </div>
    </header>
</fieldset>

    <main>
       <fieldset>
         <nav>
            <ul>
                <li><a href="showbugs.html">All Bug Items</a></li><br>
                <li><a href="showbugs.html">Android Bugs</a></li><br>
                <li><a href="showbugs.html">iOS Bugs</a></li><br>
                <li><a href="showbugs.html">Windows Bugs</a></li><br>
                <li><a href="addbugs.html">Insert Bug</a></li><br>
            </ul>
          </nav>
        </fieldset>

     </main>

      include ("connect.php");
      if(isset($_GET['category'])) {
          $bugsCategory + $_GET['Category'];
          echo "category: ($bugscetegory) <hr>";
          $sql = "SELECT = FROM bugs WHERE cetegory= '$bugsCategory'";
      }
      else {
          echo "category: all bugs <hr>";
          $sql = "SELECT*FROM bugs";
      }
          $result = $db->query($sql);
          while($row =$result->fetch_array()) {
              $name = $row['name'];
              $summary = $row['summary'];
              $category = $row['category'];
              echo "<li>{$name} {$summary} {$category}</li>";
          }

<!--   <form>
     <table><p>
             <table width="100%"></table>
       <tr><td > Name:</td ><td ><input type="text" class="form2" name="link" /></td></tr>
       <tr><td > Summary:</td ><td ><textarea class="form2" cols ="101" rows="5" /></td></tr>
       <tr><td > Category:</td ><td ><input type="text" class="form2" name="category" /></td></tr>
     </table ></p >
    </form ><br >-->
              }
     }





