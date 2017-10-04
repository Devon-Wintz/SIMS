<?php
include '../Includes/constants.php';//Contains database connection-configuration variables
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Item</title>
	 <meta charset="utf-8">
</head>

<body>
</br></br>
<form style="text-align:center;">
<h1>Sales & Inventory Management System (SIMS)<div style="color:red; font-style:italic">Add Item<div></h1>
<div style="color:gray; font-family:calibri; ">Item No.:</div>
<input type="text" size="25%" placeholder="Item Name"></br></br>
<label style="color:gray; font-family:calibri">Item Category:</label>
<select width="100%" >
  <option>Beverages</option>
  <option>Food</option>
  <option>Snacks</option>
</select></br></br>
<label style="color:gray; font-family:calibri">Amount in case(Drinks):</label>
<select width="100%" >
  <option>12</option>
  <option>24</option>
  <option>N/A</option>
</select>
</br></br>
<input type="text"  size="25%" placeholder="Item Quantity"></br>
<input type="text"  size="25%" placeholder="Unit Cost $"></br>
<input type="text"  size="25%" placeholder="Expiration Date"></br>
<input type="text"  size="25%" placeholder="Supplier"></br>
<textarea style="resize:none" name="comment" rows="3" cols="22"  placeholder="Comment"></textarea></br>
<input style="margin-right:10px" type="submit" value="Add Item"><input type="submit" value="Cancel">
</form>

</body>
