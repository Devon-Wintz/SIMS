<?php
$title='Sign Up';
require_once '../Includes/constants.php';//Contains database connection-configuration variables
require_once 'SignupValidation.php';//Validates submission of Signup Form
require_once '../Includes/header.php';
?>

<div style="text-align:center">
  <h1>Sales & Inventory Management System (SIMS)<div style="color:red; font-style:italic">Signup</div></h1>
	<div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $passwordErr; ?> </div>
    <form action="Signup.php" method="POST" align="center">
      <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $fnameErr; ?></div>
      <input type="text" name="firstName" size="35" placeholder="Frist Name" value="<?php if(isset($_POST['firstName']))  echo htmlspecialchars($_POST['firstName'])?>"></br>
      <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $lnameErr; ?></div>
      <input type="text" name="lastName" size="35" placeholder="Last Name" value="<?php if(isset($_POST['lastName']))  echo htmlspecialchars($_POST['lastName'])?>"></br>
      <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $unameErr; ?></div>
      <input type="text" name="username" size="35" placeholder="Username" value="<?php if(isset($_POST['username']))  echo htmlspecialchars($_POST['username'])?>"></br>
      <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $emailErr; ?></div>
      <input type="text" name="email" size="35" placeholder="Email" value="<?php if(isset($_POST['email']))  echo htmlspecialchars($_POST['email'])?>"></br>
      <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $password1Err; ?></div>
      <input type="password" name="password" size="35" placeholder="Password"></br>
      <div style="font-size:14px;color:red; font-family:monospace; font-weight:bold;font-style:italic"><?php echo $password2Err; ?></div>
      <input type="password" name="confirmPassword" size="35" placeholder="Confirm-Password"></br>
      <input style="margin-right:10px" type="submit" name="submitbtn" value="Sign Up"><input type="submit" name="cancelbtn" value="Cancel"></br></br>
      <div style="font-style:italic">Already Have An Account? <a style="text-decoration: none" href="Login.php">Login</a></div>
    </form>
</div>
<?php require_once '../Includes/footer.php';?>
