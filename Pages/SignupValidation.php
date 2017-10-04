<?php
$fnameErr='';$lnameErr='';$unameErr='';$emailErr=''; $password1Err=''; $password2Err='';$passwordErr="";

if(isset($_POST['submitbtn']))
{
  if(empty($_POST['firstName']))
  {
    $fnameErr="*First Name is required";
  }
  else if(empty($_POST['lastName']))
  {
    $lnameErr="*Last Name is required";
  }
  else if(empty($_POST['username']))
  {
    $unameErr="*Username is required";
  }
  else if(empty($_POST['email']))
  {
    $emailErr="*Email is required";
  }
  else if(empty($_POST['password']))
  {
    $password1Err="*Password is required";
  }
  else if(empty($_POST['confirmPassword']))
  {
    $password2Err="*Re-enter password";
  }
  else if($_POST['password']!=$_POST['confirmPassword'])
  {
    $passwordErr="*Mismatched Passwords";
  }
  else
  {
    //GET VALUES FROM SIGNUP FORM//
    $firstname = mysqli_real_escape_string($db, $_POST['firstName']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastName']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password= mysqli_real_escape_string($db, $_POST['password']);
    $confirmPassword = mysqli_real_escape_string($db, $_POST['confirmPassword']);

    $password=md5($password);//hash password before storing to database
    //saved the values entered into the form to the database
    $sql="INSERT INTO users (ID, FirstName, LastName, Username, Email, Password, ConfirmPassword) VALUES (NULL, '$firstname',  '$lastname', '$username', '$email', '$password', '$confirmPassword')";
    $db_query=mysqli_query($db, $sql);

    echo '<script language="javascript">';
    echo 'alert("New user successfully added")';
    echo '</script>';
  }

}
?>
