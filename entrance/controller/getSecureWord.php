<?php
session_start();
require '../../DB/connect.php';

if(isset($_POST['username'])){

  $username = $_POST['username'];
  $sql = "SELECT secure_word FROM admin WHERE username='$username' limit 1";
	$result = mysqli_query($conn,$sql) or die ("Error running MySQL query");
	if($row = mysqli_fetch_assoc($result)){
    echo $row['secure_word'];

  }else{
    echo "HAI?";
  }

}else{
  echo 'NOTHING';

}

?>
