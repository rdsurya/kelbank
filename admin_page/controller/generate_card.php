<?php
require '../../DB/connect.php';

$sql = "SELECT max(bankCardID) as id FROM bankCard limit 1";
$result = mysqli_query($conn,$sql) or die ("Error running MySQL query");
if($row = mysqli_fetch_assoc($result)){
  $intID = (int) $row['id'];
  $intID = $intID + 1;

  $sql= "Insert into bankCard(bankCardID, expireDate) values('$intID', date_Add(now(), interval 100 year))";
  mysqli_query($conn,$sql) or die ("Error running MySQL query");
  echo $intID;
   //date_Add(now(), interval 100 year)
}


//Closes specified connection
	mysqli_close($conn);
?>
