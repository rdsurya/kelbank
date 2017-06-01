<?php
  session_start();
  if(isset($_SESSION['USERNAME'])){
    //Destroy the whole session
    $_SESSION = array();
    session_destroy();

  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>KelBank | Login</title>

  <?php include 'library/css_file.html'; ?>

  <link href="styling2.css" rel="stylesheet">

</head>
<body style="background-image: url(bg.jpg)">

<div style="background-color:black; height:60px">
  <h1 style="display:inline;float left;"><span style="color:white"><span style="color:orange">$$$</span>Kel</span><span style="color:orange">Bank</span></h1>
  <span style="display:inline; float: right;">
      <button onclick="showModal()" style="width:auto; background-color:orange">Login</button>
    </span>
</div>


<div style="clear:both"></div>



<div id="id01" class="modal">

  <form class="modal-content animate" action="#" id="leForm">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="kelbank.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container" style="width:50%; margin:auto">
      <div id="div_username">
        <label><b>Username</b></label>
        <input id="username" type="text" placeholder="Enter Username" maxlength="50" name="uname" >
      </div>

      <div id="div_password">
        <label><b>Secure Word</b></label>
        <input id="secureWord" type="text" disabled>

        <label><b>Password</b></label>
        <input id="password" type="password" placeholder="Enter Password" maxlength="50" name="psw" >

      </div>

      <button type="submit" style="background-color:orange"><span id="login_symbol"></span></button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<?php include 'library/js_file.html'; ?>
<script src="validator.js"></script>
<script>

//global var for login
var pressedTime = 0;
//create the modal
function showModal(){
  document.getElementById('id01').style.display='block';
  $('#div_username').show();
  $('#div_password').hide();
  $('#login_symbol').html('<i class="fa fa-arrow-circle-right fa-2x" aria-hidden="true"></i>');
  document.getElementById("leForm").reset();
  pressedTime = 0;

}

// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var form = document.getElementById("leForm");
form.onsubmit = function(e) {

  e.preventDefault();
  var username = document.getElementById('username').value;
  var password = document.getElementById('password').value;

  if(pressedTime === 0){
    if(username === ''){
      swal({
        title: "Error!",
        text: "Enter your username!",
        type: "error",
        customClass: 'custom-dialog-class',
        confirmButtonText: "OK"
      });

    }
    else{
      var data = {username: username};

      $.ajax({
        type: 'POST',
        url: 'controller/getSecureWord.php',
        data: data,
        success: function(dataB){
          $('#div_username').hide();
          $('#div_password').show();
          $('#secureWord').val(dataB.trim());
          pressedTime = 1;
          $('#login_symbol').html('Login');


        },
        error: function(jqxhr, textStatus, errorThrown){
          swal({
            title: "Error!",
            text: "Something went wrong: "+ errorThrown,
            type: "error",
            customClass: 'custom-dialog-class',
            confirmButtonText: "OK"
          });
        }
      });
    }
  }// end if pressedTime == 0
  else{

    if(password === ''){
      swal({
        title: "Error!",
        text: "Enter your password!",
        type: "error",
        customClass: 'custom-dialog-class',
        confirmButtonText: "OK"
      });

    }
    else{
      var data = {
        username: username,
        password: password
      };

      $.ajax({
        type: 'POST',
        url: 'controller/login_process.php',
        data: data,
        success: function(dataB){
          if(dataB.trim() === '1'){
            window.location = "../admin_page/registration.php";
          }
          else{
            modal.style.display = "none";
            swal({
              title: "Error!",
              text: "Wrong username or password!",
              type: "error",
              customClass: 'custom-dialog-class',
              confirmButtonText: "OK"
            });
          }


        },
        error: function(jqxhr, textStatus, errorThrown){
          swal({
            title: "Error!",
            text: "Something went wrong: "+ errorThrown,
            type: "error",
            customClass: 'custom-dialog-class',
            confirmButtonText: "OK"
          });
        }
      });
    }

  }

}//end form submit
</script>

</body>
</html>
