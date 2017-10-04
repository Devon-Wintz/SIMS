<?php
$emptyFields='';                    //username & password fields are empty
$usernameErr='';$passwordErr='';   //username or password field is empty
$loginErr='';                     //either username or password is incorrect

if(isset($_POST['loginbtn']))
{
//CHECK IF LOGIN CREDENTIAL FIELDS ARE EMPTY
	if(empty($_POST['username']) && empty($_POST['password']))
	{
	$emptyFields="*Username & Password are required";
	}
	else if(empty($_POST['username']))
  {
  	$usernameErr="*Username\Email is required";
  }
  else if(empty($_POST['password']))
  {
    $passwordErr="*Password is required";
  }
  else
  {
    //VALIDATE USER CREDENTIALS
		$username=mysqli_real_escape_string($db, $_POST['username']);
		$password=mysqli_real_escape_string($db, $_POST['password']);
		//HASH BACK PASSWORD BEFORE USING IN QUERY//
		//$password = md5($password);
		$sql = mysqli_query($db, "SELECT * FROM users WHERE Username='$username' AND Password='$password' OR Email='$username'");
		$numrows=mysqli_num_rows($sql);

		if($numrows!=0)
		{
			session_start();
			$_SESSION['Username']=$username;
			header('Location:index.php');
		}
		else{
			{$loginErr="Invalid Username/Password";}
		}
	}



}

?>
