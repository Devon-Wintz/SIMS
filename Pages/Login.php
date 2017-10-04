<?php
$title="Login";//The value for this variable will be accessible to the header.php
require_once '../Includes/constants.php';//Contains database connection-configuration variables
require_once 'LoginAuthentication.php';//Validates login credentials submitted
require_once '../Includes/header.php';
?>
	<div style="text-align:center">
	   <h1>Sales & Inventory Management System (SIMS)<div style="color:red; font-style:italic">Login</div></h1>
	   <form action="Login.php" method="POST">
			 <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $emptyFields ?> </div>
      	<div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $loginErr; ?> </div>
      	<div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $usernameErr; ?> </div>
      	<input type="text" name="username" size="30" placeholder="Username/Email"></br>
      	<div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $passwordErr; ?> </div>
        <input type="password" name="password" size="30" placeholder="Password"></br>
        <input type="checkbox" name="remember" value="1">Remember me</br></br>
      	<input style="margin-right:10px" type="submit" value="Login" name="loginbtn"><input type="submit" name="cancelbtn" value="Cancel"></br></br>
      	<div style="font-style:italic"><a style="text-decoration: none" href="#">Forget Password?</a></div>
      	<div>Don't Have An Account? <a style="text-decoration: none" href="Signup.php" style="font-style:italic">Signup</a></div>
	   </form>
	</div>
<?php require_once '../Includes/footer.php';?>
