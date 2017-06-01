<?php
session_start();
require '../../DB/connect.php';

if(isset($_POST['username'])){

  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT password, name FROM admin WHERE username='$username' limit 1";
	$result = mysqli_query($conn,$sql) or die ("Error running MySQL query");
	if($row = mysqli_fetch_assoc($result)){

    $pass2 = $row['password'];

    if(strcmp($password, $pass2) == 0){
      $_SESSION['USERNAME'] = $username;
      $_SESSION['NAME'] = $row['name'];
      echo "1";
    }
    else{
      echo "2";
    }

  }else{
    echo "HAI?";
  }

}else{
  echo 'NOTHING';

}

//Closes specified connection
	mysqli_close($conn);
?>
