<?php
require '../../DB/connect.php';

$input = $_POST['input'];

$sql = "SELECT username, password, firstname, lastname, contactNo, emailAddress, streetAddress, postcode, city, state from customer where concat('(',username, ')', ' ', firstname, ' ', lastname ) like '%$input%'";
$result = mysqli_query($conn, $sql) or die("Error searching");

if(mysqli_num_rows($result) > 0){

  echo '<ul id="matchlist" style="width: 300px; max-height: 200px; height: 100%; overflow: auto">';
  while($row = mysqli_fetch_assoc($result)){
?>
  <li data-username="<?=$row['username']?>" data-fname="<?=$row['firstname']?>" data-lname="<?=$row['lastname']?>" data-password="<?=$row['lastname']?>" data-phone="<?=$row['contactNo']?>"
    data-email="<?=$row['emailAddress']?>" data-street="<?=$row['streetAddress']?>" data-postcode="<?=$row['postcode']?>" data-city="<?=$row['city']?>" data-state="<?=$row['state']?>">
    <a style="cursor:pointer">(<?=$row['username']?>) <?=$row['firstname']?> <?=$row['lastname']?></a></li>
<?php
  }
  echo '</ul>';
}
else{
  echo "<span>No Record Found!</span>";
}

mysqli_close($conn);
?>
