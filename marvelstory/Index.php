<!doctype html>
<html>
<head>
     <meta charset="utf-8">
     <title>PHP Login Form without Session</title>
     <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<h1>PHP Login Form</h1>
<div class="loginBox">
     <h3>Login Form</h3>
     <br><br>
     <form method="get" action="Index.php">
         <label>Username:</label><br>
         <input type="text" name="username" placeholder="username"
     /><br><br>
         <label>Password:</label><br>
         <input type="password" name="password" placeholder="password" />
      <br><br>
         <input type="submit" name="submit" value = "login" />
     </form>
   </div>
<?php
include("dbconnect.php");
$sql= "SELECT * FROM users";
$resp=$db->query($sql);
if(empty($_GET['username'])||(empty ($_GET['password']))){
    echo "<p>"."Both fields are Required"."</p>";
}else {
    if (mysqli_num_rows($resp)==1) {
        header("location:login.php");
    }else{echo "Username or Password Incorrect";}
}


?>
</body>
</html>