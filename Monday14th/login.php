<?php
   include("connection.php");//establishiong connection with our database
   if(empty($_POST["username"])|| empty($_POST["password"]))
 {
    echo "Both fields are required.";
  }else
  {
   $username=$_POST['username'];
   $password=$_POST['password'];
   }
   $sql="select uid from users where username='$username'
   password='$password'";

   $result=mysqli-query($db,$sql);

   if(mysqli_num_rows($result)==1)
   {
    header("Location:home.php");//Redirecting To another Page
   }else
   {
    echo "Incorrect username or password.";
   }
?>