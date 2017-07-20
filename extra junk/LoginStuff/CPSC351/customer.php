<?php 
// bootlogin.php
?><!doctype html>
<html>
	<head>
		<title>Bootstrap Login</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src="jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">MyApp</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">About</a></li>
				<li><a href="#">Help</a></li>
			</ul>
		</div>
	</nav>
		<div class="container">
		<div class="jumbotron">
			<h1>Welcome</h1>
			<p>Please log in.</p>
		</div>
		</div>
		<div class="container">
			<div class="alert hidden" id="alertmsg">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<span id="msg"><b>Warning!</b> This is a warning</span>
			</div>
		</div>
		<div class="container">
			<div class="form-group">
			<form>
				<input type="text" id="user" class="form-control" placeholder="username (e.g. joe@smith.com)">
				<input type="password" id="pass" class="form-control" placeholder="password">
				<input type="button" id="submit" value="Login" class="btn btn-primary"> 
			</form>
			</div>
		</div>
		<script>
			$("#submit").button().click(
				function(event) {
					var user = $("#user").val(); //document.getElementById("user").value;
					var pass = $("#pass").val();
					var url = "validate_logon.php?username="+user+"&password="+pass;
					$.get(url,function(html) {
						if (/^ERR/.test(html) == true) {
							// If "ERR""
							$("#msg").html("<b>Error!</b> " + html);
							$("#alertmsg").addClass("alert-danger");
							$("#alertmsg").removeClass("hidden");
						}
						else {
							// If "OK"
							$("#msg").html("<b>Success!</b> You are loggged in as Bartholemew Gosnold.");
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