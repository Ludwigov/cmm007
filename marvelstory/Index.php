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
     <form method="get" action="login.php">
         <label>Username:</label><br>
         <input type="text" name="username" placeholder="username"
     /><br><br>
         <label>Password:</label><br>
         <input type="password" name="password" placeholder="password" />
      <br><br>
         <input type="submit" name="submit" value = "login" />
     </form>
   </div>
$sql= "SELECT * uid FROM users";
$resp=$db->query($sql);

if($resp($_GET['username'])||($_GET['password']==1){
}

</body>
</html>