<?php 
// bootlogin.php
?><!doctype html>
<html>
	<head>
		<title>Add Customer</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="customerStyle.css">
		<script src="jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Home</a>
				</div>
				<ul class="nav navbar-nav">
				<li><a href="#">About</a></li>
				<li><a href="#">Help</a></li>
				</ul>
			</div>
		</nav>
		<div id="wrapper">
			<h1>Add Customer Form</h1>
			<h3>Enter customer information.</h3>
			<div class="container">
				<div class="alert hidden" id="alertmsg">
					<a href="#" class="close" data-dismiss="alert">&times;</a>
					<span id="msg"><b>Warning!</b> This is a warning</span>
				</div>
			</div>

			<form> <!--method="post" action="add_customer.php"-->
				<label>First Name:</label>
				<input type="text" id="fName" name="fName"><br>

				<label>Last Name:</label>
				<input type="text" id="lName" name="lName"><br>

				<label>Address Line 1:</label>
				<input type="text" id="address1" name="address1"><br>

				<label>Address Line 2:</label>
				<input type="text" id="address2" name="address2"><br>

				<label>City:</label>
				<input type="text" id="city" name="city"><br>

				<label>State:</label>
				<input type="text" id="state" name="state"><br>

				<label>Zip Code:</label>
				<input type="text" id="zip" name="zip">

				<input type="button" id="submit" name="submit" value="Add Customer"> 
			</form>
		</div>
		<script>
			$('#submit').button().click(
				function(event) {
					var fName = $("#fName").val();
					var lName = $("#lName").val();
					var address1 = $("#address1").val();
					var address2 = $("#address2").val();
					var city = $("#city").val();
					var state = $("#state").val();
					var zip = $("#zip").val();
					var url = "add_customer.php?fName="+fName+"&lName="+lName+"&address1="+address1+"&address2="+address2+"&city="+city+"&state="+state+"&zip="+zip;
					$.get(url,function(html) {
						if (/^Err/.test(html) == true) {
							// If "ERR""
							$("#msg").html("Error! Customer was not added successfully");
							$("#alertmsg").addClass("alert-danger");
							$("#alertmsg").removeClass("hidden");
						}
						else {
							// If "OK"
							$("#msg").html("Success! Customer added.");
							$("#alertmsg").removeClass("alert-danger");
							$("#alertmsg").addClass("alert-success");
							$("#alertmsg").removeClass("hidden");
						}
					});
				}
			);
		</script>
	</body>
</html>


				<!--
				<select name="state">
					<option></option>
					<option>Alabama</option>
					<option>Alaska</option>
					<option>Arizona</option>
					<option>Arkansas</option>
					<option>California</option>
					<option>Colorado</option>
					<option>Connecticut</option>
					<option>Delaware</option>
					<option>Florida</option>
					<option>Georgia</option>
					<option>Hawaii</option>
					<option>Idaho</option>
					<option>Illinois</option>
					<option>Iowa</option>
					<option>Kansas</option>
					<option>Kentucky</option>
					<option>Louisiana</option>
					<option>Maine</option>
					<option>Maryland</option>
					<option>Massachusetts</option>
					<option>Michigan</option>
					<option>Minnesota</option>
					<option>Mississippi</option>
					<option>Missouri</option>
					<option>Montana</option>
					<option>Nebraska</option>
					<option>Nevada</option>
					<option>New Hampshire</option>
					<option>New Jersey</option>
					<option>New Mexico</option>
					<option>New York</option>
					<option>North Carolina</option>
					<option>North Dakota</option>
					<option>Ohio</option>
					<option>Oklahoma</option>
					<option>Oregon</option>
					<option>Pennsylvania</option>
					<option>Rhode Island</option>
					<option>South Carolina</option>
					<option>South Dakota</option>
					<option>Tennessee</option>
					<option>Texas</option>
					<option>Utah</option>
					<option>Vermont</option>
					<option>Virginia</option>
					<option>Washington</option>
					<option>West Virginia</option>
					<option>Wisconsin </option>
					<option>Wyoming</option>
				</select> -->