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


		<form class="col s12">

		<table>
			<tr>
				<td>
					Bank Card ID:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="cardID" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Full Name:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="full_name" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Account ID:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="account_ID" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
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
			</tr>

			<tr>
				<td>
					Account amount:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="street_address" type="number" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Account Status:
				</td>

				<td>
					<!-- Switch -->
					  <div class="switch">
						<label>
						  Active
						  <input type="checkbox">
						  <span class="lever"></span>
						  Passive
						</label>
					  </div>
				</td>
			</tr>
		</table>

		<div class="row" style="height:20px">
		</div>

		<center>
			<button class="btn waves-effect waves-light" type="submit" name="action">Add</button>
			</td>
			<button class="btn waves-effect waves-light" type="submit" name="action">Update</button>
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

  </body>
</html>
