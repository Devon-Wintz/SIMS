<?php
  session_start();
  if($_SESSION['Username']==NULL)
  {
    header('Location:Login.php');
  }
  $currentDateTime = date('Y-m-d');
  echo"<div style=text-align:center;font-style:italic>"."User: ". $_SESSION['Username']."</div>";
  echo"<div style=text-align:center;font-style:italic>"."Date: ".$currentDateTime."</div>";
  echo"<div style=text-align:center>"."======================"."</div>";
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reports</title>
	  <meta charset="utf-8">
</head>

<body>
  <div style="text-align:center">
  <h1>Sales & Inventory Management System (SIMS)<div style="color:red; font-style:italic">Reports</div></h1>
  <div style="font-style:italic">Currently working on this...</div></br>
  <a style="text-decoration: none" href="index.php">Main Menu</a>
</div>
</body>
</html>
