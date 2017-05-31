<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Customer Registration</title>

  <!-- CSS  -->
  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

  <link rel="stylesheet" type="text/css" href="../assets/css/sweetalert.css"> -->
  <?php include 'library/css_file.html'; ?>
</head>
<body>
  <nav class=" grey darken-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">KelBank</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Logout</a></li>
      </ul>

	  <ul class="right hide-on-med-and-down">
        <li><a href="#">Profile</a></li>
      </ul>

	  <ul class="right hide-on-med-and-down">
        <li><a href="Transactions.html">Transactions</a></li>
      </ul>

	  <ul class="right hide-on-med-and-down">
        <li><a href="Accounts.html">Accounts</a></li>
      </ul>

	  <ul class="right hide-on-med-and-down">
        <li><a href="Registration.html">Registration</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!--Contain of webpage-->

  <div class="container">
	<div class="row" style="height:20px">
	</div>

	<div class="nav-wrapper">
      <form>
        <div class="input-field">
          <input id="search" type="search" required placeholder="Search customer">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
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
					First Name:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="first_name" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Last Name:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="last_name" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Contact No:
				</td>

				<td>
					<div class="input-field col  s12">
					  <input placeholder="" id="contact_no" type="tel" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Street Address:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="street_address" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Postcode:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="postcode" type="number" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					City:
				</td>

				<td>
					<div class="input-field col s12">
						<input placeholder="" id="city" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					State:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="state" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Country:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="country" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Username:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="username" type="text" class="validate">
					</div>
				</td>
			</tr>

			<tr>
				<td>
					Password:
				</td>

				<td>
					<div class="input-field col s12">
					  <input placeholder="" id="password" type="password" class="validate">
					</div>
				</td>
			</tr>

		</table>

		<div class="row" style="height:20px">
		</div>

		<center>
			<button class="btn waves-effect waves-light" type="submit" name="action">Submit</button>
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
   <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> -->
   <!-- <script type="text/javascript" src="../assets/js/jquery-3.2.1.min.js"></script>
   <script src="../assets/js/materialize.js"></script>
   <script src="../assets/js/init.js"></script>
   <script src="../assets/js/sweetalert.min.js"></script> -->
  <?php include 'library/js_file.html'; ?>
  <script type="text/javascript">
      swal({
        title: "Error!",
        text: "Here's my error message!",
        type: "error",
        confirmButtonText: "Cool"
    });
  </script>

  </body>
</html>
