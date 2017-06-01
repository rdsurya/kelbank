<?php
session_start();

if(!isset($_SESSION['USERNAME'])){
  echo "Not authorized!";
	session_unset();
	echo "<meta http-equiv=\"refresh\"content=\"3;URL=../entrance/login.php\">";
  die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Customer Registration</title>

  <!-- CSS  -->

  <?php include 'library/css_file.html'; ?>
</head>
<body>
  <nav class=" grey darken-1" role="navigation">
    <?php include 'library/nav_file.html' ;?>
  </nav>

  <!--Contain of webpage-->

<div class="container">
  <h5>Hi <?= $_SESSION['NAME']?> !</h5>
	<div class="row" style="height:20px">
	</div>

	<div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required placeholder="Search customer">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons" onclick="$('#search').val(''); $('#match').html('');">close</i>
        </div>
        <div class="search-drop" id="match"></div>
      </form>
    </div>

    <div class="row" style="background-color:#e8eaf6">

		<div class="row" style="height:20px">
		</div>


		<div class="row" style="height:20px">
			<h3><center>Registration</center></h3>
		</div>


		<div class="row" style="height:20px">
		</div>


		<form id="leForm" class="col s12">

		<table>
			<!-- <tr>
				<td class="kasi-right">
					Bank Card ID:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="Generate the card please" id="cardID" type="text" class="validate" readonly>
            <br/>
            <center><button id="btn_generate_card" class="btn waves-effect waves-light" name="action"><i class="material-icons">settings</i>Generate</button></center>
					</div>
				</td>

        <!-- <td>
          <button id="btn_generate_card" class="btn waves-effect waves-light" name="action">Generate</button>
        </td>
			</tr> -->

			<tr>
				<td class="kasi-right">
					First Name:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="first_name" type="text" class="validate" maxlength="25">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					Last Name:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="last_name" type="text" class="validate" maxlength="25">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					Contact No:
				</td>

				<td>
					<div class="input-field col  s12">
					  <input placeholder="" id="contact_no" type="tel" class="validate" maxlength="12">
					</div>
				</td>
			</tr>

      <tr>
				<td class="kasi-right">
					Email:
				</td>

				<td>
					<div class="input-field col  s12">
					  <input placeholder="" id="email" type="text" class="validate" maxlength="45">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					Street Address:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="street_address" type="text" class="validate" maxlength="90">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					Postcode:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="postcode" type="text" class="validate" maxlength="5">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					City:
				</td>

				<td>
					<div class="input-field col s12">
						<input placeholder="" id="city" type="text" class="validate" maxlength="20">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					State:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="state" type="text" class="validate" maxlength="20">
					</div>
				</td>
			</tr>

			<!-- <tr>
				<td class="kasi-right">
					Country:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="country" type="text" class="validate" maxlength="20">
					</div>
				</td>
			</tr> -->

			<tr>
				<td class="kasi-right">
					Username:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="username" type="text" class="validate" maxlength="15">
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					Password:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="password" type="password" class="validate" maxlength="25">
					</div>
				</td>
			</tr>

      <tr>
				<td class="kasi-right">
					Confirm Password:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="password2" type="password" class="validate" maxlength="25">
					</div>
				</td>
			</tr>

		</table>

		<div class="row" style="height:20px">
		</div>

		<center>
			<button id="btnSubmit" class="btn waves-effect waves-light" name="action"><i class="material-icons">add</i>Submit</button>
			</td>
			<button id="btnUpdate" class="btn waves-effect waves-light" name="action"><i class="material-icons">system_update_alt</i>Update</button>
      </td>
      <button id="btnClear" class="btn waves-effect waves-light" name="action"><i class="material-icons">not_interested</i>Clear</button>
		</center>

		<div class="row" style="height:20px">
		</div>
		</form>
     </div>

	<div class="row" style="height:20px">
	</div>

</div>


  <footer class="page-footer grey darken-1">
    <div class="container">
      <div class="row">
        <div class="col l3 s10">
			 <a class="white-text" href="#!"><b>About KelBank</b></a>
        </div>

		<div class="col l3 s10">
			 <a class="white-text" href="#!"><b>Terms And Condition</b></a>
        </div>


        <div class="col l3 s10">
			 <a class="white-text" href="#!"><b>Privacy $ Security</b></a>
        </div>

        <div class="col l3 s10">
			 <a class="white-text" href="#!"><b>Support</b></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      copyright @ <a class="orange-text text-lighten-3" href=""><b>KelBank</b></a> 2017
      </div>
    </div>
  </footer>


   <!--  Scripts-->
   <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
   <!-- <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
   <script src="../assets/js/materialize.js"></script>
   <script src="../assets/js/init.js"></script>
   <script src="../assets/js/sweetalert.min.js"></script> -->
  <?php include 'library/js_file.html'; ?>
  <script type="text/javascript">
    //   swal({
    //     title: "Error!",
    //     text: "Here's my error message!",
    //     type: "error",
    //     confirmButtonText: "Cool"
    // });
    $(function(){
      display_insert();
    });

    function display_insert(){
      $('#leForm')[0].reset();
      $('#btnSubmit').show();
      $('#btn_generate_card').show();
      $('#btn_generate_card').prop('disabled', false);
      $('#username').prop('readonly', false);
      $('#btnUpdate').hide();
      $('#match').html('');
      $('#search').val('');

    }

    function display_update(){
      $('#btnSubmit').hide();
      $('#btn_generate_card').hide();
      $('#btnUpdate').show();
      $('#username').prop('readonly', true);
    }

    $('#btnClear').on('click', function(e){
      e.preventDefault();
      display_insert();
    });

    //-------------------validate the form -----------------
    function validate_form(){
      var betul = true;

      //var cardID = $('#cardID').val();
      var fname = $('#first_name').val();
      var lname = $('#last_name').val();
      var phone = $('#contact_no').val();
      var email = $('#email').val();
      var street = $('#street_address').val();
      var postcode = $('#postcode').val();
      var city = $('#city').val();
      var state = $('#state').val();
      //var country = $('#country').val();
      var username = $('#username').val();
      var password = $('#password').val();
      var password2 = $('#password2').val();

      if(fname === '' || lname === '' || phone === ''|| email === ''
        || street === '' || postcode === '' || city === '' || state === ''
          || username === '' || password === ''|| password2 === ''){

        betul = false;
          swal({
            title: "Error!",
            text: "Fill up all fields!",
            type: "error",
            confirmButtonText: "OK"
        });
      }
      else if(!validateEmail(email)){

        betul = false;
          swal({
            title: "Error!",
            text: "Invalid email!",
            type: "error",
            confirmButtonText: "OK"
        });

      }
      else if(!validatePhonenumber(phone)){
        betul = false;
          swal({
            title: "Error!",
            text: "Invalid phone number!",
            type: "error",
            confirmButtonText: "OK"
        });

      }
      else if(!validatePhonenumber(postcode)){
        betul = false;
          swal({
            title: "Error!",
            text: "Invalid postcode!",
            type: "error",
            confirmButtonText: "OK"
        });
      }
      else if(!isAlphaNumeric(password+username)){
        betul = false;
          swal({
            title: "Error!",
            text: "Name, password and username must be alphanumeric only!",
            type: "error",
            confirmButtonText: "OK"
        });
      }
      else if(password.length < 5){
        betul = false;
          swal({
            title: "Error!",
            text: "Password must at least have 6 characters!",
            type: "error",
            confirmButtonText: "OK"
        });
      }
      else if(password !== password2){
        betul = false;
          swal({
            title: "Error!",
            text: "Passwords do not match!",
            type: "error",
            confirmButtonText: "OK"
        });
      }

      return betul;
    }
    //=====================================================

    $('#btn_generate_card').on('click', function(e){
      e.preventDefault();
      $(this).prop('disabled', true);
      $.ajax({
        type: 'POST',
        url: 'controller/generate_card.php',
        //data: data,
        success: function(dataB){
          $('#cardID').val(dataB.trim());
        },
        error: function(jqxhr, textStatus, errorThrown){
          swal({
            title: "Error!",
            text: "Something went wrong: "+ errorThrown,
            type: "error",
            //customClass: 'custom-dialog-class',
            confirmButtonText: "OK"
          });
        }
      });
    });

    //--------------------submit registration ----------------
    $('#btnSubmit').on('click', function(e){
      e.preventDefault();
      var betul = validate_form();

      if(betul){
        var fname = $('#first_name').val();
        var lname = $('#last_name').val();
        var phone = $('#contact_no').val();
        var email = $('#email').val();
        var street = $('#street_address').val();
        var postcode = $('#postcode').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();

        var data = {
          fname: fname,
          lname: lname,
          phone: phone,
          email: email,
          street: street,
          postcode: postcode,
          city: city,
          state: state,
          username: username,
          password: password
        };

        $.ajax({
          type: 'POST',
          url: 'controller/register_user.php',
          data: data,
          success: function(dataB){
            var msg = '';

            if(dataB.trim() === '1'){
              msg = 'User registered successfully';
              swal("Done!", msg, "success");
              display_insert();
            }
            else if(dataB.trim() === '2'){
              msg = 'Username has been used! Enter different username';
              swal("Opps!", msg, "error");
            }
            else if(dataB.trim() === '3'){
              msg = 'Try again later';
              swal("Opps!", msg, "error");
            }
          },
          error: function(jqxhr, textStatus, errorThrown){
            swal({
              title: "Error!",
              text: "Something went wrong: "+ errorThrown,
              type: "error",
              //customClass: 'custom-dialog-class',
              confirmButtonText: "OK"
            });
          }
        });

      }
      else{
        return false;
      }

    });
    //===========================================================

    //---------------update user ----------------------------
    $('#btnUpdate').on('click', function(e){
      e.preventDefault();
      var betul = validate_form();

      if(betul){
        var fname = $('#first_name').val();
        var lname = $('#last_name').val();
        var phone = $('#contact_no').val();
        var email = $('#email').val();
        var street = $('#street_address').val();
        var postcode = $('#postcode').val();
        var city = $('#city').val();
        var state = $('#state').val();
        var username = $('#username').val();
        var password = $('#password').val();
        var password2 = $('#password2').val();

        var data = {
          fname: fname,
          lname: lname,
          phone: phone,
          email: email,
          street: street,
          postcode: postcode,
          city: city,
          state: state,
          username: username,
          password: password
        };

        $.ajax({
          type: 'POST',
          url: 'controller/update_user.php',
          data: data,
          success: function(dataB){
            var msg = '';

            if(dataB.trim() === '1'){
              msg = 'User updated successfully';
              swal("Done!", msg, "success");
              //display_insert();
            }
            else if(dataB.trim() === '3'){
              msg = 'Try again later';
              swal("Opps!", msg, "error");
            }
          },
          error: function(jqxhr, textStatus, errorThrown){
            swal({
              title: "Error!",
              text: "Something went wrong: "+ errorThrown,
              type: "error",
              //customClass: 'custom-dialog-class',
              confirmButtonText: "OK"
            });
          }
        });

      }
      else{
        return false;
      }

    });
    //======================================================

    //----------------------search user -----------------------
      $('#search').on('keyup', function(){
        var input = $(this).val();
        console.log(input);
        if(input.length > 0){
          var data = {input: input};
          $.ajax({
            type: 'POST',
            url: 'controller/search_user.php',
            data: data,
            success: function(dataB){
              $('#match').html(dataB);
              $('#matchlist li').on('click', function () { // When click on an element in the list
                          // Update the field with the new element
                  $('#search').val($(this).text());
                  $('#username').val($(this).data('username'));
                  $('#first_name').val($(this).data('fname'));
                  $('#last_name').val($(this).data('lname'));
                  $('#contact_no').val($(this).data('phone'));
                  $('#email').val($(this).data('email'));
                  $('#street_address').val($(this).data('street'));
                  $('#postcode').val($(this).data('postcode'));
                  $('#city').val($(this).data('city'));
                  $('#state').val($(this).data('state'));
                  $('#password').val($(this).data('password'));
                  $('#password2').val($(this).data('password'));
                  $('#match').text(''); // Clear the <div id="PM_match_system"></div>
                  display_update();

              });
            },
            error: function(jqxhr, textStatus, errorThrown){
              swal("Error", errorThrown, "error");
            }
          });
        }
        else{
          $('#match').html('');
        }
      });
    //=========================================================
  </script>

  </body>
</html>
