<?php
session_start();//A session is created
  if($_SESSION['Username']==NULL)//A check is made to see if the username was actually inputted into the login form
  {
    header('Location:Login.php');//If no username was found, the user is redirected to the login page
  }
 ?>
