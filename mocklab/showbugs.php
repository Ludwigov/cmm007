
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My form<</title>
</head>
<body>
<form action="submitform.php" method ="post">
    <input type="text" placeholder="First Name" name="firstname">
    <input type="text" placeholder="Last Name"    name="lastname">
    <input type="submit" value ="Please Press Enter"  >
</form>


     //include database
   include ("db_connect.php");

   $name = $_POST["name"];
   $summary = $_POST["summary"];
  $category = $_POST["category"];

  $sql = "INSERT INTO bugs (name,summary,category) VALUES ('$name','$summary','$category')"";

        if (mysqli_query($db, $sql)){
        } else{
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
        header("location:index.php");
   ?>

</body>
</html>