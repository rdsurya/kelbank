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
  <title>Account Management</title>

  <!-- CSS  -->
  <?php include 'library/css_file.html'; ?>
</head>
<body>
  <nav class=" grey darken-1" role="navigation">
  <?php include 'library/nav_file.html' ;?>
  </nav>

  <!-- content of webpage-->

  <div class="container">
	<div class="row" style="height:20px">
	</div>

	<div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required placeholder="Search Accounts">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
        <div id="match"></div>
      </form>
    </div>

    <div class="row" style="background-color:#b3e5fc">

		<div class="row" style="height:20px">
		</div>


		<div class="row" style="height:20px">
			<h3><center>Manage Account</center></h3>
		</div>


		<div class="row" style="height:20px">
		</div>


		<form class="col s12" id="leForm">

		<table>
			<!-- <tr>
				<td class="kasi-right">
					Bank Card ID:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="cardID" type="text" class="validate">
					</div>
				</td>
			</tr> -->

			<tr>
				<td class="kasi-right">
					Full Name:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="Search customer" id="full_name" type="text" class="validate">
					</div>
          <div id="match_u"></div>
				</td>
			</tr>

      <tr>
				<td class="kasi-right">
					Username:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="Auto fill" id="username" type="text" class="validate" readonly>
					</div>
				</td>
			</tr>

			<tr>
				<td class="kasi-right">
					Account ID:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="Will be generated later" id="account_ID" type="text" class="validate">
					</div>
				</td>
			</tr>

			<!-- <tr>
				<td>
					Account type:
				</td>

				<td>
					<div class="input-field col  s12">
						 <select class="browser-default" id="account_type">
							  <option value="" disabled selected>Choose your option</option>
							  <option value="1">Option 1</option>
							  <option value="2">Option 2</option>
							  <option value="3">Option 3</option>
						</select>
					</div>
				</td>
			</tr> -->

			<tr>
				<td class="kasi-right">
					Account amount:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="Enter money amount (RM)" id="amount" type="number" class="validate">
					</div>
				</td>
			</tr>

			<!-- <tr>
				<td>
					Account Status:
				</td>

				<td> -->
					<!-- Switch -->
					  <!-- <div class="switch">
						<label>
						  Active
						  <input type="checkbox">
						  <span class="lever"></span>
						  Passive
						</label>
					  </div>
				</td>
			</tr> -->
		</table>

		<div class="row" style="height:20px">
		</div>

		<center>
			<button id="btnAdd" class="btn waves-effect waves-light" type="submit" name="action">Add</button>
			</td>
			<button id="btnUpdate" class="btn waves-effect waves-light" type="submit" name="action">Update</button>
      </td>
      <button id="btnClear" class="btn waves-effect waves-light" type="submit" name="action">Clear</button>
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
<?php include 'library/js_file.html'; ?>
  <script>
  $(function(){
    display_insert();
  });

  function display_insert(){
    $('#leForm')[0].reset();
    $('#btnAdd').show();


    $('#full_name').prop('readonly', false);
    $('#btnUpdate').hide();
    $('#match_u').html('');
    $('#full_name').val('');

    $('#match').html('');
    $('#search').val('');

  }

  function display_update(){
    $('#btnAdd').hide();

    $('#btnUpdate').show();
    $('#full_name').prop('readonly', true);
  }

  $('#btnClear').on('click', function(e){
    e.preventDefault();
    display_insert();
  });

  function validate_form(){
    var betul = true;
    var username = $('#username').val();
    var amount = $('#amount').val();

    if(username === '' || amount === ''){
      betul = false;
      swal("Oit!", "Fill in username and amount", "error");
    }
    else if(isNaN(amount)){
      betul = false;
      swal("Oit!", "Input number only for amount", "error");
    }
    else if(amount < 49.99){
      swal("Oit!", "Insufficient amount. Minimum is RM50.00", "error");
    }

    return betul;
  }

  $('#btnAdd').on('click', function(e){
    e.preventDefault();
    var betul = validate_form();

  });

  //----------------------search user -----------------------
    $('#full_name').on('keyup', function(){
      var input = $(this).val();
      $('#match').html('');
      if(input.length > 0){
        var data = {input: input};
        $.ajax({
          type: 'POST',
          url: 'controller/search_user.php',
          data: data,
          success: function(dataB){
            $('#match_u').html(dataB);
            $('#matchlist li').on('click', function () { // When click on an element in the list
                        // Update the field with the new element
                $('#full_name').val($(this).text());
                $('#username').val($(this).data('username'));

                $('#match_u').text(''); // Clear the <div id="PM_match_system"></div>


            });
          },
          error: function(jqxhr, textStatus, errorThrown){
            swal("Error", errorThrown, "error");
          }
        });
      }
      else{
        $('#match_u').html('');
      }
    });
  //=========================================================

  </script>

  </body>
</html>
