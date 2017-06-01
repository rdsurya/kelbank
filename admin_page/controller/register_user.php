<?php

require '../../DB/connect.php';

if(isset($_POST['fname']) && isset($_POST['lname'])){

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $street = $_POST['street'];
  $postcode = $_POST['postcode'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "Select username from customer where username = '$username' limit 1";
  $result = mysqli_query($conn, $sql) or die ("Error running MySQL query");
  if(mysqli_num_rows($result) > 0){
    echo "2";
  }
  else{
    $sql2 = "Insert into customer(username, password, firstname, lastname, contactNo, emailAddress, streetAddress, postcode, city, state) ";
    $sql2 .= "values('$username', '$password', '$fname', '$lname', '$phone', '$email', '$street', '$postcode', '$city', '$state' )";
    if(mysqli_query($conn, $sql2)){
      echo "1";
    }
    else{
      echo "3";
    }
  }

}
else{
  trigger_error("No inputs...", E_USER_ERROR);
}

mysqli_close($conn);

?>
