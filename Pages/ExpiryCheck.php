<?php
$currentDateTime = date('Y-m-d');
$numOfExpiredItems=0;

  $query="SELECT * FROM stocks";
  $results=mysqli_query($db,$query);
  $row_count=mysqli_num_rows($results);
  while($row=mysqli_fetch_array($results)){
    if($row['Expiry']==$currentDateTime){
      $numOfExpiredItems=$numOfExpiredItems+1;
      echo"Item is expired";
      echo"$numOfExpiredItems items is/are expired";
    }else{
      echo"Stock is good to go";
    }
  }
 ?>
