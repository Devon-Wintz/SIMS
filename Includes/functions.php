<?php


//==================================VIEW INVENTORY TABLE==================================
function viewInventory()
{
  require_once '../Includes/constants.php';//Contains database connection-configuration variables
  $currentDateTime = date('Y-m-d');
  $query="SELECT * FROM stocks";
	$results=mysqli_query($db,$query);
	$row_count=mysqli_num_rows($results);
	echo"<table align='center' border='1'>";
	echo"<tr>";
	echo"<th style='padding:15px;'>"."Item No"."</th>";
	echo"<th style='padding:15px;'>"."Supplier No"."</th>";
	echo"<th style='padding:25px;'>"."Item Name"."</th>";
	echo"<th style='padding:25px;'>"."Item Category"."</th>";
	echo"<th style='padding:25px;'>"."Unit Description"."</th>";
	echo"<th style='padding:25px;'>"."Unit Cost"."</th>";
  echo"<th style='padding:25px;'>"."Amount Available"."</th>";
	echo"<th style='padding:25px;'>"."Expiration Date"."</th>";
	echo"<th style='padding:25px;'>"."Comment"."</th>";
	echo"<th style='padding:20px;' colspan='2'>"."Operations"."</th>";
	echo"</tr>";
  while($row=mysqli_fetch_array($results))
	{
    if($row['Expiry']==$currentDateTime) //Check to see if any item is expired or near to its expiry database
    {
      echo '<script language="javascript">';
      echo 'alert("NOTICE: Please be advised that some goods will expire in one week or less")';
      echo '</script>';
    }
	  echo"<tr>";
	  echo"<td style='text-align:center'>".$row['StockID']."</td>";
	  echo"<td style='text-align:center'>".$row['SupplierID']."</td>";
	  echo"<td style='text-align:left;padding-right:20px'>".$row['ItemName']."</td>";
	  echo"<td style='text-align:cleft;padding-left:10px'>".$row['ItemCategory']."</td>";
	  echo"<td style='text-align:center;'>".$row['UnitDescription']."</td>";
	  echo"<td style='text-align:center'>".$row['UnitCost']."</td>";
    echo"<td style='text-align:center'>".$row['Amount']."</td>";
	  echo"<td style='text-align:center'>".$row['Expiry']."</td>";
	  echo"<td style='text-align:center'>".$row['Comment']."</td>";
	  echo"<td><button style='color:red; font-weight:bold'>Delete</button></td>";
	  echo"<td><button style='color:red; font-weight:bold'>Update</button></td>";
	  echo"</tr>";
	}
	echo"</table>";
}

 ?>
